<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Process\Process;
use Throwable;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $serviceOptions = PageController::serviceOptions();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'service' => ['required', 'string', 'in:'.implode(',', array_keys($serviceOptions))],
            'message' => ['required', 'string', 'max:4000'],
            '_gotcha' => ['nullable', 'max:0'],
        ]);

        if (! empty($validated['_gotcha'] ?? null)) {
            return $this->successResponse($request, 'Your message has been received.');
        }

        $botToken = config('services.telegram.bot_token');
        $chatId = config('services.telegram.chat_id');

        if (! $botToken || ! $chatId) {
            return $this->errorResponse(
                $request,
                'Telegram is not configured yet.',
            );
        }

        $message = implode("\n", [
            'New website inquiry from Kairos Solutions',
            'Name: '.$validated['name'],
            'Email: '.$validated['email'],
            'Phone: '.($validated['phone'] ?: 'Not provided'),
            'Service: '.$serviceOptions[$validated['service']],
            'Message:',
            $validated['message'],
        ]);

        try {
            if (! $this->sendTelegramMessage($botToken, (string) $chatId, $message)) {
                return $this->errorResponse(
                    $request,
                    'We could not send your message right now. Please try again.',
                );
            }
        } catch (Throwable $exception) {
            Log::error('Telegram contact delivery failed with an unexpected exception.', [
                'message' => $exception->getMessage(),
            ]);

            return $this->errorResponse(
                $request,
                'We could not send your message right now. Please try again.',
            );
        }

        return $this->successResponse(
            $request,
            'Your message was sent successfully. We will contact you soon.',
        );
    }

    protected function successResponse(Request $request, string $message): JsonResponse|RedirectResponse
    {
        if ($request->expectsJson()) {
            return response()->json([
                'message' => $message,
            ]);
        }

        return redirect()
            ->route('contact')
            ->with('status', $message);
    }

    protected function errorResponse(Request $request, string $message): JsonResponse|RedirectResponse
    {
        if ($request->expectsJson()) {
            return response()->json([
                'message' => $message,
            ], 422);
        }

        return back()
            ->withInput()
            ->withErrors(['form' => $message]);
    }

    protected function sendTelegramMessage(string $botToken, string $chatId, string $message): bool
    {
        $verifySsl = (bool) config('services.telegram.verify_ssl', true);

        try {
            $response = Http::asForm()
                ->withOptions(['verify' => $verifySsl])
                ->timeout(15)
                ->post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                    'chat_id' => $chatId,
                    'text' => $message,
                ]);

            if ($response->successful()) {
                return true;
            }

            Log::warning('Telegram send failed via Laravel HTTP client. Falling back to curl.', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
        } catch (Throwable $exception) {
            Log::warning('Telegram send threw via Laravel HTTP client. Falling back to curl.', [
                'message' => $exception->getMessage(),
            ]);
        }

        return $this->sendTelegramMessageWithCurl($botToken, $chatId, $message);
    }

    protected function sendTelegramMessageWithCurl(string $botToken, string $chatId, string $message): bool
    {
        $process = new Process([
            'curl.exe',
            '-sS',
            '-X',
            'POST',
            "https://api.telegram.org/bot{$botToken}/sendMessage",
            '-d',
            "chat_id={$chatId}",
            '--data-urlencode',
            "text={$message}",
        ]);

        $process->setTimeout(20);
        $process->run();

        if (! $process->isSuccessful()) {
            Log::error('Telegram send failed via curl fallback.', [
                'error_output' => $process->getErrorOutput(),
                'output' => $process->getOutput(),
            ]);

            return false;
        }

        $payload = json_decode($process->getOutput(), true);

        if (! is_array($payload) || ! ($payload['ok'] ?? false)) {
            Log::error('Telegram send returned an unexpected curl payload.', [
                'output' => $process->getOutput(),
            ]);

            return false;
        }

        return true;
    }
}
