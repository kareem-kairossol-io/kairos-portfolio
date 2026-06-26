<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    public static function defaults(): array
    {
        return [
            'company_name' => 'Kairos Solutions',
            'contact_email' => 'hello@kairossolutions.com',
            'phone_display' => '+20 100 000 0000',
            'phone_href' => '+201000000000',
            'whatsapp_url' => 'https://wa.me/201000000000',
            'linkedin_url' => 'https://linkedin.com/company/your-page',
            'x_url' => 'https://x.com/your-account',
            'facebook_url' => 'https://facebook.com/your-page',
            'instagram_url' => 'https://instagram.com/your-account',
            'location_text' => 'Based in Egypt - working with businesses remotely',
            'footer_description' => 'Contact us today to discuss your project and discover how our expert business software solutions can help you grow.',
        ];
    }

    public static function values(): array
    {
        return array_replace(
            static::defaults(),
            static::query()->pluck('value', 'key')->all(),
        );
    }

    public static function updateValues(array $values): void
    {
        foreach ($values as $key => $value) {
            static::updateOrCreate(
                ['key' => $key],
                ['value' => $value],
            );
        }
    }
}
