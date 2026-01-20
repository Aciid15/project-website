@extends('layouts.admin')

@section('content')
<div class="p-6">

    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Tambah Banner Baru</h1>
        <p class="text-gray-600 mt-1">Upload banner untuk ditampilkan di homepage</p>
    </div>

     <!-- TAMBAHKAN ERROR MESSAGE DI SINI ← ← ← -->
    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- SAMPAI SINI -->

    <!-- Form -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Judul Banner <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       id="title" 
                       name="title" 
                       value="{{ old('title') }}"
                       required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Masukkan judul banner">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    Deskripsi
                </label>
                <textarea id="description" 
                          name="description" 
                          rows="4"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                          placeholder="Masukkan deskripsi banner (opsional)">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-6" x-data="{ preview: null }">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                    Gambar Banner <span class="text-red-500">*</span>
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-blue-400 transition">
                    <div class="space-y-1 text-center">
                        <div x-show="!preview" class="flex flex-col items-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500">
                                    <span>Upload gambar</span>
                                    <input id="image" 
                                           name="image" 
                                           type="file" 
                                           class="sr-only" 
                                           accept="image/*"
                                           required
                                           @change="preview = URL.createObjectURL($event.target.files[0])">
                                </label>
                                <p class="pl-1">atau drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 2MB</p>
                        </div>
                        
                        <div x-show="preview" class="relative">
                            <img :src="preview" class="mx-auto max-h-64 rounded-lg">
                            <button type="button" 
                                    @click="preview = null; document.getElementById('image').value = ''"
                                    class="mt-2 text-sm text-red-600 hover:text-red-800">
                                Hapus gambar
                            </button>
                        </div>
                    </div>
                </div>
                @error('image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Link (Optional) -->
            <div class="mb-6">
                <label for="link" class="block text-sm font-medium text-gray-700 mb-2">
                    Link URL (Opsional)
                </label>
                <input type="url" 
                       id="link" 
                       name="link" 
                       value="{{ old('link') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="https://example.com">
                @error('link')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Order -->
            <div class="mb-6">
                <label for="order" class="block text-sm font-medium text-gray-700 mb-2">
                    Urutan Tampil
                </label>
                <input type="number" 
                       id="order" 
                       name="order" 
                       value="{{ old('order', 0) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="0">
                <p class="mt-1 text-sm text-gray-500">Semakin kecil angka, semakin awal ditampilkan</p>
                @error('order')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Is Active -->
            <div class="mb-6">
                <div class="flex items-center">
                    <input type="checkbox" 
                           id="is_active" 
                           name="is_active" 
                           checked
                           class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="is_active" class="ml-2 block text-sm text-gray-700">
                        Aktifkan banner
                    </label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex gap-3">
                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-200">
                    Simpan Banner
                </button>
                <a href="{{ route('admin.banners.index') }}" 
                   class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-6 py-2 rounded-lg transition duration-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection