<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $faqs = Faq::query()
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('pages.home', [
            'faqs' => $faqs,
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'serviceOptions' => self::serviceOptions(),
        ]);
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }

    public static function serviceOptions(): array
    {
        return [
            'custom-software' => 'Custom Software',
            'crm' => 'CRM System',
            'ecommerce' => 'E-commerce',
            'mobile-application' => 'Mobile Application',
            'hosting-support' => 'Hosting & Support',
            'other' => 'Other',
        ];
    }
}
