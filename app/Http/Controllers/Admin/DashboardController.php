<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'faqCount' => Faq::count(),
            'activeFaqCount' => Faq::where('is_active', true)->count(),
        ]);
    }
}
