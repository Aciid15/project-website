{{-- resources/views/admin/banners/edit.blade.php --}}
@extends('layouts.admin')

@section('page-title', 'Edit Banner')

@section('content')
<div class="p-6">
    <div class="mb-6">
        <a href="{{ route('admin.banners.index') }}" 
           class="text-blue-600 hover:text-blue-800 inline-flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Banner</h1>

        <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Judul Banner</label>
                <input type="text" 
                       name="title" 
                       value="{{ old('title', $banner->title) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror"
                       placeholder="Masukkan judul banner">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" 
                          rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror"
                          placeholder="Masukkan deskripsi banner">{{ old('description', $banner->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Link (Opsional) -->
            {{-- <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Link (Opsional)</label>
                <input type="url" 
                       name="link" 
                       value="{{ old('link', $banner->link) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('link') border-red-500 @enderror"
                       placeholder="https://contoh.com">
                @error('link')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div> --}}

            <!-- Gambar Banner -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Banner</label>
                
                <!-- Preview Gambar Lama -->
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $banner->image) }}" 
                         alt="Preview" 
                         class="h-32 w-48 object-cover rounded-lg border"
                         id="oldImagePreview">
                </div>

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

            <!-- Urutan -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Urutan Tampil</label>
                <input type="number" 
                       name="order" 
                       value="{{ old('order', $banner->order) }}"
                       min="1"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('order') border-red-500 @enderror"
                       placeholder="1">
                <p class="text-sm text-gray-500 mt-1">Semakin kecil angka, semakin awal ditampilkan</p>
                @error('order')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status Aktif -->
            <div class="mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" 
                           name="is_active" 
                           value="1"
                           {{ old('is_active', $banner->is_active) ? 'checked' : '' }}
                           class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                    <span class="ml-2 text-sm font-medium text-gray-700">Banner Aktif</span>
                </label>
            </div>

            <!-- Tombol Submit -->
            <div class="flex gap-3">
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium">
                    Update Banner
                </button>
                <a href="{{ route('admin.banners.index') }}" 
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
            oldPreview.classList.add('hidden');
        }
        reader.readAsDataURL(file);
    } else {
        newPreview.classList.add('hidden');
        oldPreview.classList.remove('hidden');
    }
}
</script>
@endsection