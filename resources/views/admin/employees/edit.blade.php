@extends('layouts.admin')

@section('content')
<div class="p-6 lg:p-10">
  <div class="mb-8">
    <h1 class="text-3xl font-extrabold text-gray-900">Edit Karyawan</h1>
    <p class="text-gray-600 mt-1">Perbarui data karyawan</p>
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

  @php
    $photo = $employee->photo ? asset('storage/'.$employee->photo) : asset('images/pimpinan.jpg');
  @endphp

  <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6 lg:p-8 space-y-6">
    @csrf
    @method('PUT')

    <div class="flex items-center gap-4">
      <img src="{{ $photo }}" class="w-16 h-16 rounded-2xl object-cover border border-gray-200" alt="{{ $employee->name }}">
      <div>
        <div class="font-bold text-gray-900">{{ $employee->name }}</div>
        <div class="text-sm text-gray-500">Foto saat ini</div>
      </div>
    </div>

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Nama <span class="text-red-500">*</span></label>
      <input name="name" value="{{ old('name', $employee->name) }}"
             class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
             required>
    </div>

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Jabatan</label>
      <input name="position" value="{{ old('position', $employee->position) }}"
             class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block font-semibold text-gray-900 mb-2">Unit</label>
        <input name="unit" value="{{ old('unit', $employee->unit) }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block font-semibold text-gray-900 mb-2">NIP</label>
        <input name="nip" value="{{ old('nip', $employee->nip) }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      <div>
        <label class="block font-semibold text-gray-900 mb-2">Email</label>
        <input type="email" name="email" value="{{ old('email', $employee->email) }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label class="block font-semibold text-gray-900 mb-2">Telepon</label>
        <input name="phone" value="{{ old('phone', $employee->phone) }}"
               class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
    </div>

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Bio</label>
      <textarea name="bio" rows="5"
                class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('bio', $employee->bio) }}</textarea>
    </div>

    <div>
      <label class="block font-semibold text-gray-900 mb-2">Ganti Foto (opsional)</label>

      <label class="block w-full rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 transition cursor-pointer">
        <div class="px-6 py-10 text-center">
          <div class="mx-auto w-12 h-12 rounded-xl bg-white border border-gray-200 flex items-center justify-center text-gray-500">
            <i class="fa-regular fa-image text-xl"></i>
          </div>
          <div class="mt-3">
            <span class="text-blue-600 font-semibold">Upload foto baru</span>
            <span class="text-gray-600"> atau drag and drop</span>
          </div>
          <div class="text-xs text-gray-500 mt-1">PNG, JPG, WEBP hingga 2MB</div>
        </div>
        <input type="file" name="photo" class="hidden" accept="image/*">
      </label>
    </div>

    <div class="flex items-center gap-3 pt-2">
      <button class="rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700 shadow-sm">
        Update Karyawan
      </button>
      <a href="{{ route('admin.employees.index') }}"
         class="rounded-xl bg-gray-200 px-5 py-3 text-gray-800 font-semibold hover:bg-gray-300">
        Batal
      </a>
    </div>
  </form>
</div>
@endsection
