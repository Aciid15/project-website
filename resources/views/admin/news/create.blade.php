@extends('layouts.admin')

@section('page-title', 'Tambah Berita')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.news.index') }}" 
               class="text-gray-600 hover:text-gray-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
            </a>
            <h1 class="text-2xl font-bold text-gray-800">Tambah Berita Baru</h1>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Judul -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Judul Berita <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="title" 
                       id="title" 
                       value="{{ old('title') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                       placeholder="Masukkan judul berita"
                       required>
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kategori -->
            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">
                    Kategori
                </label>
                <select name="category_id" 
                        id="category_id" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('category_id') border-red-500 @enderror">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>  

            <!-- Konten -->
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                    Konten Berita <span class="text-red-500">*</span>
                </label>
                <textarea name="content" 
                          id="content" 
                          rows="10"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror"
                          placeholder="Tulis konten berita..."
                          required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Gambar -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                    Gambar Berita
                </label>
                <input type="file" 
                       name="image" 
                       id="image" 
                       accept="image/*"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('image') border-red-500 @enderror"
                       onchange="previewImage(event)">
                @error('image')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
                
                <!-- Preview Image -->
                <div id="imagePreview" class="mt-3 hidden">
                    <img src="" alt="Preview" class="h-48 w-auto object-cover rounded-lg border border-gray-300">
                </div>
            </div>

            <!-- Status -->
            <div class="mb-6">
                <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                    Status <span class="text-red-500">*</span>
                </label>
                <select name="status" 
                        id="status" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('status') border-red-500 @enderror"
                        required>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex gap-3">
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-200">
                    Simpan Berita
                </button>
                <a href="{{ route('admin.news.index') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded-lg transition duration-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function previewImage(event) {
    const preview = document.getElementById('imagePreview');
    const img = preview.querySelector('img');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            img.src = e.target.result;
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    } else {
        preview.classList.add('hidden');
    }
}
</script>
@endsection