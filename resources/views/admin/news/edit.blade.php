{{-- resources/views/admin/news/edit.blade.php --}}
@extends('layouts.admin')

@section('page-title', 'Edit Berita')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <a href="{{ route('admin.news.index') }}" 
           class="text-blue-600 hover:text-blue-800 inline-flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Berita</h1>

        <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Judul Berita</label>
                <input type="text" 
                       name="title" 
                       value="{{ old('title', $news->title) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror"
                       placeholder="Masukkan judul berita">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Excerpt -->
            {{-- <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Excerpt (Ringkasan)</label>
                <textarea name="excerpt" 
                          rows="3"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('excerpt') border-red-500 @enderror"
                          placeholder="Masukkan ringkasan berita">{{ old('excerpt', $news->excerpt) }}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div> --}}

            <!-- Konten -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Konten Berita</label>
                <textarea name="content" 
                          rows="10"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('content') border-red-500 @enderror"
                          placeholder="Masukkan konten berita">{{ old('content', $news->content) }}</textarea>
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                <select name="category_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('category_id') border-red-500 @enderror">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                                {{ old('category_id', $news->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gambar Berita -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Berita</label>
                
                <!-- Preview Gambar Lama -->
                @if($news->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $news->image) }}" 
                         alt="Preview" 
                         class="h-32 w-48 object-cover rounded-lg border"
                         id="oldImagePreview">
                </div>
                @endif

                <input type="file" 
                       name="image" 
                       accept="image/*"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('image') border-red-500 @enderror"
                       onchange="previewNewImage(event)">
                
                <!-- Preview Gambar Baru -->
                <img id="newImagePreview" 
                     class="mt-3 h-32 w-48 object-cover rounded-lg border hidden">
                
                <p class="text-sm text-gray-500 mt-2">Kosongkan jika tidak ingin mengganti gambar. Format: JPG, PNG, max 2MB</p>
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="status" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('status') border-red-500 @enderror">
                    <option value="draft" {{ old('status', $news->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status', $news->status) == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="flex gap-3">
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                    Update Berita
                </button>
                <a href="{{ route('admin.news.index') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg font-medium">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function previewNewImage(event) {
    const file = event.target.files[0];
    const newPreview = document.getElementById('newImagePreview');
    const oldPreview = document.getElementById('oldImagePreview');
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            newPreview.src = e.target.result;
            newPreview.classList.remove('hidden');
            if(oldPreview) oldPreview.classList.add('hidden');
        }
        reader.readAsDataURL(file);
    } else {
        newPreview.classList.add('hidden');
        if(oldPreview) oldPreview.classList.remove('hidden');
    }
}
</script>
@endsection