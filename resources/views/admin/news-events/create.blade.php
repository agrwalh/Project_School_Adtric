@extends('layouts.admin')

@section('title', 'Add New Event or News')

@section('content')

<div class="max-w-4xl mx-auto">
    
    <!-- Top Bar -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <a href="{{ route('admin.news-events.index') }}" class="text-xs font-bold text-slate-500 hover:text-brand-pink transition flex items-center mb-1">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Back to News & Events
            </a>
            <h1 class="text-2xl font-extrabold font-heading text-brand-navy">Create News or Event</h1>
        </div>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-3xl border border-slate-200 shadow-sm p-6 sm:p-10">
        
        <form method="POST" action="{{ route('admin.news-events.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Title -->
            <div>
                <label for="title" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                    Event / News Title <span class="text-rose-500">*</span>
                </label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{ old('title') }}" 
                       required 
                       placeholder="e.g. Annual Sports Day Celebrations 2026" 
                       class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('title') ? 'border-rose-500 bg-rose-50/20' : 'border-slate-200' }} text-sm focus:border-brand-pink focus:ring-1 focus:ring-brand-pink">
                @error('title')
                    <p class="text-xs text-rose-600 font-semibold mt-1">{{ $message }}</p>
                @enderror
                <p class="text-[11px] text-slate-400 mt-1">A unique SEO slug will be generated automatically from this title.</p>
            </div>

            <!-- Two Columns: Category & Date -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Category -->
                <div>
                    <label for="category" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                        Category <span class="text-rose-500">*</span>
                    </label>
                    <select id="category" 
                            name="category" 
                            required 
                            class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('category') ? 'border-rose-500' : 'border-slate-200' }} text-sm focus:border-brand-pink focus:ring-1 focus:ring-brand-pink text-slate-700">
                        <option value="" disabled {{ old('category') ? '' : 'selected' }}>Select Category</option>
                        <option value="Event" {{ old('category') === 'Event' ? 'selected' : '' }}>Event</option>
                        <option value="News" {{ old('category') === 'News' ? 'selected' : '' }}>News</option>
                        <option value="Achievement" {{ old('category') === 'Achievement' ? 'selected' : '' }}>Achievement</option>
                    </select>
                    @error('category')
                        <p class="text-xs text-rose-600 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Event Date -->
                <div>
                    <label for="event_date" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                        Event / Publishing Date <span class="text-rose-500">*</span>
                    </label>
                    <input type="date" 
                           id="event_date" 
                           name="event_date" 
                           value="{{ old('event_date', date('Y-m-d')) }}" 
                           required 
                           class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('event_date') ? 'border-rose-500' : 'border-slate-200' }} text-sm focus:border-brand-pink focus:ring-1 focus:ring-brand-pink text-slate-700">
                    @error('event_date')
                        <p class="text-xs text-rose-600 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Image Upload (Max 2MB, JPG/PNG/WebP) -->
            <div>
                <label for="image" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                    Featured Image <span class="text-slate-400 lowercase text-[10px]">(JPG, PNG, WebP up to 2 MB)</span>
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-200 border-dashed rounded-2xl hover:border-brand-pink transition">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-10 w-10 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-xs text-slate-600">
                            <label for="image" class="relative cursor-pointer bg-white rounded-md font-bold text-brand-pink hover:text-pink-700">
                                <span>Upload an image</span>
                                <input id="image" name="image" type="file" accept=".jpg,.jpeg,.png,.webp" class="sr-only" onchange="previewImage(this)">
                            </label>
                            <p class="pl-1 text-slate-500">or drag and drop</p>
                        </div>
                        <p class="text-[11px] text-slate-400">PNG, JPG, WebP up to 2MB</p>
                    </div>
                </div>
                <div id="image-preview-container" class="mt-3 hidden">
                    <p class="text-xs text-slate-500 font-semibold mb-1">Selected Preview:</p>
                    <img id="image-preview" src="#" alt="Preview" class="h-32 w-auto rounded-xl object-cover border border-slate-200">
                </div>
                @error('image')
                    <p class="text-xs text-rose-600 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Short Description -->
            <div>
                <label for="short_description" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                    Short Description <span class="text-rose-500">*</span>
                </label>
                <textarea id="short_description" 
                          name="short_description" 
                          rows="3" 
                          required 
                          placeholder="Brief 1-2 sentence teaser shown on the card listings and search previews..." 
                          class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('short_description') ? 'border-rose-500' : 'border-slate-200' }} text-sm focus:border-brand-pink focus:ring-1 focus:ring-brand-pink">{{ old('short_description') }}</textarea>
                @error('short_description')
                    <p class="text-xs text-rose-600 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Full Content -->
            <div>
                <label for="content" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                    Full Content & Narrative <span class="text-rose-500">*</span>
                </label>
                <textarea id="content" 
                          name="content" 
                          rows="8" 
                          required 
                          placeholder="Detailed story, paragraphs, quotes, and descriptions (HTML or plain text)..." 
                          class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('content') ? 'border-rose-500' : 'border-slate-200' }} text-sm focus:border-brand-pink focus:ring-1 focus:ring-brand-pink font-sans">{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-xs text-rose-600 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Published Checkbox Toggle -->
            <div class="flex items-center space-x-3 p-4 bg-slate-50 rounded-2xl border border-slate-200">
                <input type="checkbox" 
                       id="is_published" 
                       name="is_published" 
                       value="1" 
                       {{ old('is_published', '1') ? 'checked' : '' }} 
                       class="w-4 h-4 text-brand-pink rounded border-slate-300 focus:ring-brand-pink">
                <label for="is_published" class="text-xs font-bold text-slate-700">
                    Publish this item immediately on the website
                    <span class="block font-normal text-slate-500 text-[11px]">If unchecked, this item will be saved as an unpublished draft visible only to administrators.</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="pt-4 flex items-center justify-end space-x-3 border-t border-slate-100">
                <a href="{{ route('admin.news-events.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold text-xs uppercase tracking-wider transition">
                    Cancel
                </a>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-brand-pink hover:bg-brand-pink-hover text-white font-extrabold text-xs uppercase tracking-wider shadow-lg shadow-pink-500/25 transition">
                    Save and Publish
                </button>
            </div>

        </form>

    </div>

</div>

@push('scripts')
<script>
function previewImage(input) {
    const container = document.getElementById('image-preview-container');
    const preview = document.getElementById('image-preview');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            container.classList.remove('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush

@endsection
