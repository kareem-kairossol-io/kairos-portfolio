@extends('layouts.admin')

@section('title', 'Contact Settings')
@section('heading', 'Contact Settings')
@section('subheading', 'These values are used anywhere the website shows contact details, social links, or footer copy.')

@section('content')
    <form action="{{ route('admin.settings.update') }}" method="POST" class="card">
        @csrf
        @method('PUT')

        <div class="form-grid">
            <div class="field">
                <label for="company_name">Company Name</label>
                <input id="company_name" type="text" name="company_name" value="{{ old('company_name', $settings['company_name']) }}" required>
            </div>

            <div class="field">
                <label for="contact_email">Contact Email</label>
                <input id="contact_email" type="email" name="contact_email" value="{{ old('contact_email', $settings['contact_email']) }}" required>
            </div>

            <div class="field">
                <label for="phone_display">Phone Display</label>
                <input id="phone_display" type="text" name="phone_display" value="{{ old('phone_display', $settings['phone_display']) }}" required>
            </div>

            <div class="field">
                <label for="phone_href">Phone Href</label>
                <input id="phone_href" type="text" name="phone_href" value="{{ old('phone_href', $settings['phone_href']) }}" required>
            </div>

            <div class="field">
                <label for="whatsapp_url">WhatsApp URL</label>
                <input id="whatsapp_url" type="url" name="whatsapp_url" value="{{ old('whatsapp_url', $settings['whatsapp_url']) }}" required>
            </div>

            <div class="field">
                <label for="linkedin_url">LinkedIn URL</label>
                <input id="linkedin_url" type="url" name="linkedin_url" value="{{ old('linkedin_url', $settings['linkedin_url']) }}">
            </div>

            <div class="field">
                <label for="x_url">X URL</label>
                <input id="x_url" type="url" name="x_url" value="{{ old('x_url', $settings['x_url']) }}">
            </div>

            <div class="field">
                <label for="facebook_url">Facebook URL</label>
                <input id="facebook_url" type="url" name="facebook_url" value="{{ old('facebook_url', $settings['facebook_url']) }}">
            </div>

            <div class="field">
                <label for="instagram_url">Instagram URL</label>
                <input id="instagram_url" type="url" name="instagram_url" value="{{ old('instagram_url', $settings['instagram_url']) }}">
            </div>

            <div class="field">
                <label for="location_text">Location Text</label>
                <input id="location_text" type="text" name="location_text" value="{{ old('location_text', $settings['location_text']) }}" required>
            </div>
        </div>

        <div class="field">
            <label for="footer_description">Footer Description</label>
            <textarea id="footer_description" name="footer_description" required>{{ old('footer_description', $settings['footer_description']) }}</textarea>
        </div>

        <div class="actions">
            <button type="submit" class="button">Save Settings</button>
        </div>
    </form>
@endsection
