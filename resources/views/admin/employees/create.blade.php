@extends('layouts.admin')

@section('content')
<div class="p-6 lg:p-10">
  <div class="mb-8">
    <h1 class="text-3xl font-extrabold text-gray-900">Tambah Karyawan Baru</h1>
    <p class="text-gray-600 mt-1">Isi data karyawan untuk ditampilkan di halaman Struktur Organisasi</p>
  </div>

  @if($errors->any())
    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-red-800">
      <div class="font-semibold mb-1">Ada input yang belum benar:</div>
      <ul class="list-disc pl-5">
        @foreach($errors->all() as $err)
          <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6 lg:p-8 space-y-6">
    @csrf

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Nama <span class="text-red-500">*</span></label>
      <input name="name" value="{{ old('name') }}"
             class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
             placeholder="Masukkan nama karyawan" required>
    </div>

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Jabatan</label>
      <input name="position" value="{{ old('position') }}"
             class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
             placeholder="Contoh: Staf / Kepala Seksi">
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block font-semibold text-gray-900 mb-2">Unit</label>
        <input name="unit" value="{{ old('unit') }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="Contoh: Sekretariat">
      </div>

      <div>
        <label class="block font-semibold text-gray-900 mb-2">NIP</label>
        <input name="nip" value="{{ old('nip') }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="Masukkan NIP (jika ada)">
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block font-semibold text-gray-900 mb-2">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="nama@email.com">
      </div>

      <div>
        <label class="block font-semibold text-gray-900 mb-2">Telepon</label>
        <input name="phone" value="{{ old('phone') }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
               placeholder="08xxxxxxxxxx">
      </div>
    </div>

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Bio</label>
      <textarea name="bio" rows="5"
                class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Masukkan bio singkat karyawan (opsional)">{{ old('bio') }}</textarea>
    </div>

    {{-- Upload Foto: gaya dropzone seperti banner --}}
    <!-- Image Upload -->
            <div class="mb-6" x-data="{ preview: null }">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                    Gambar Karyawan <span class="text-red-500">*</span>
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

    <div class="flex items-center gap-3 pt-2">
      <button class="rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700 shadow-sm">
        Simpan Karyawan
      </button>
      <a href="{{ route('admin.employees.index') }}"
         class="rounded-xl bg-gray-200 px-5 py-3 text-gray-800 font-semibold hover:bg-gray-300">
        Batal
      </a>
    </div>
  </form>
</div>
@endsection
