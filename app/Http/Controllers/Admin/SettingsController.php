<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function edit(): View
    {
        return view('admin.settings.edit', [
            'settings' => Setting::values(),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'contact_email' => ['required', 'email', 'max:255'],
            'phone_display' => ['required', 'string', 'max:255'],
            'phone_href' => ['required', 'string', 'max:255'],
            'whatsapp_url' => ['required', 'url', 'max:255'],
            'linkedin_url' => ['nullable', 'url', 'max:255'],
            'x_url' => ['nullable', 'url', 'max:255'],
            'facebook_url' => ['nullable', 'url', 'max:255'],
            'instagram_url' => ['nullable', 'url', 'max:255'],
            'location_text' => ['required', 'string', 'max:255'],
            'footer_description' => ['required', 'string', 'max:500'],
        ]);

        Setting::updateValues($validated);

        return back()->with('status', 'Settings saved successfully.');
    }
}
