@extends('layouts.admin')

@section('title', 'FAQs')
@section('heading', 'FAQ Management')
@section('subheading', 'Add, reorder, edit, or hide frequently asked questions shown on the homepage.')

@section('content')
    <div class="card" style="margin-bottom: 1.5rem;">
        <h2>Add New FAQ</h2>

        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf

            <div class="field">
                <label for="new_question">Question</label>
                <input id="new_question" type="text" name="question" value="{{ old('question') }}" required>
            </div>

            <div class="field">
                <label for="new_answer">Answer</label>
                <textarea id="new_answer" name="answer" required>{{ old('answer') }}</textarea>
            </div>

            <div class="form-grid">
                <div class="field">
                    <label for="new_sort_order">Sort Order</label>
                    <input id="new_sort_order" type="number" min="0" name="sort_order" value="{{ old('sort_order', 0) }}">
                </div>

                <div class="field">
                    <label>&nbsp;</label>
                    <label class="checkbox">
                        <input type="checkbox" name="is_active" value="1" @checked(old('is_active', true))>
                        <span>Visible on the website</span>
                    </label>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="button">Add FAQ</button>
            </div>
        </form>
    </div>

    <div class="faq-stack">
        @foreach ($faqs as $faq)
            <div class="card">
                <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="field">
                        <label for="question_{{ $faq->id }}">Question</label>
                        <input id="question_{{ $faq->id }}" type="text" name="question" value="{{ old('question', $faq->question) }}" required>
                    </div>

                    <div class="field">
                        <label for="answer_{{ $faq->id }}">Answer</label>
                        <textarea id="answer_{{ $faq->id }}" name="answer" required>{{ old('answer', $faq->answer) }}</textarea>
                    </div>

                    <div class="form-grid">
                        <div class="field">
                            <label for="sort_{{ $faq->id }}">Sort Order</label>
                            <input id="sort_{{ $faq->id }}" type="number" min="0" name="sort_order" value="{{ old('sort_order', $faq->sort_order) }}">
                        </div>

                        <div class="field">
                            <label>&nbsp;</label>
                            <label class="checkbox">
                                <input type="checkbox" name="is_active" value="1" @checked($faq->is_active)>
                                <span>Visible on the website</span>
                            </label>
                        </div>
                    </div>

                    <div class="actions">
                        <button type="submit" class="button">Save Changes</button>
                    </div>
                </form>

                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" onsubmit="return confirm('Delete this FAQ?');" style="margin-top: 0.75rem;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
