@extends('layouts.admin')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('subheading', 'Overview of the dynamic content now powering the Kairos website.')

@section('content')
    <div class="admin-grid">
        <div class="card">
            <h2>Published FAQs</h2>
            <p class="stat-value">{{ $faqCount }}</p>
            <p>{{ $activeFaqCount }} currently visible on the public homepage.</p>
        </div>

        <div class="card">
            <h2>Contact Settings</h2>
            <p class="stat-value">Live</p>
            <p>Email, phone, WhatsApp, and social links are now shared across the footer, CTA, and contact page.</p>
        </div>

        <div class="card">
            <h2>Next Step</h2>
            <p class="stat-value">Review</p>
            <p>Update your real links and contact details if you want to replace the starter defaults immediately.</p>
        </div>
    </div>

    <div class="card" style="margin-top: 1.5rem;">
        <h2>Quick Actions</h2>
        <div class="actions">
            <a href="{{ route('admin.settings.edit') }}" class="button">Edit Contact Settings</a>
            <a href="{{ route('admin.faqs.index') }}" class="button-secondary">Manage FAQs</a>
            <a href="{{ route('home') }}" class="button-secondary">View Website</a>
        </div>
    </div>
@endsection
