<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response
            ->assertStatus(200)
            ->assertSee('We Build');
    }

    public function test_public_pages_render_successfully(): void
    {
        foreach ([
            '/about-us',
            '/contact-us',
            '/privacy-policy',
            '/terms-of-service',
        ] as $uri) {
            $this->get($uri)->assertOk();
        }
    }

    public function test_contact_form_can_submit_with_json_response(): void
    {
        config()->set('services.telegram.bot_token', 'test-bot-token');
        config()->set('services.telegram.chat_id', '123456');

        Http::fake([
            'https://api.telegram.org/*' => Http::response([
                'ok' => true,
            ], 200),
        ]);

        $response = $this->postJson('/contact-us', [
            'name' => 'Kairos Client',
            'email' => 'client@example.com',
            'phone' => '+20123456789',
            'service' => 'crm',
            'message' => 'Need a CRM with support.',
            '_gotcha' => '',
        ]);

        $response
            ->assertOk()
            ->assertJson([
                'message' => 'Your message was sent successfully. We will contact you soon.',
            ]);
    }
}
