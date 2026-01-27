@extends('layouts.admin')

@section('page-title', 'Manajemen Karyawan')

@section('content')

<div class="p-6 lg:p-10">
  <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-sm text-gray-600 mb-4">
        <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-800 font-medium">Karyawan</span>
    </nav>

  @if(session('success'))
    <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-800">
      {{ session('success') }}
    </div>
  @endif

  <div class="flex items-center justify-between mb-5">
    <div class="text-sm text-gray-500">
      Total: <span class="font-semibold text-gray-900">{{ $employees->total() }}</span>
    </div>

    <a href="{{ route('admin.employees.create') }}"
       class="inline-flex items-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-white font-semibold shadow-sm hover:bg-blue-700">
      <span class="text-xl leading-none">＋</span> Tambah Karyawan
    </a>
  </div>

  <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
      <table class="min-w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
          <tr>
            <th class="px-5 py-4 text-left font-semibold">FOTO</th>
            <th class="px-5 py-4 text-left font-semibold">NAMA</th>
            <th class="px-5 py-4 text-left font-semibold">JABATAN</th>
            <th class="px-5 py-4 text-left font-semibold">UNIT</th>
            <th class="px-5 py-4 text-left font-semibold">AKSI</th>
          </tr>
        </thead>
<tbody class="divide-y divide-gray-100">
  @forelse($employees as $emp)
    <tr class="hover:bg-gray-50">
      <td class="px-5 py-4 text-sm text-gray-700">
        {{ $loop->iteration }}
      </td>

      <td class="px-5 py-4">
        @php
          $photo = $emp->photo ? asset('storage/'.$emp->photo) : asset('images/pimpinan.jpg');
        @endphp
        <div class="flex items-center gap-3">
          <img src="{{ $photo }}" class="w-12 h-12 rounded-lg object-cover border" alt="{{ $emp->name }}">
          <div>
            <div class="font-semibold text-gray-900">{{ $emp->name }}</div>
            <div class="text-sm text-gray-500">{{ $emp->position ?? '-' }}</div>
          </div>
        </div>
      </td>

      <td class="px-5 py-4 text-sm text-gray-700">
        {{ $emp->unit ?? '-' }}
      </td>

      <td class="px-5 py-4 text-sm text-gray-700">
        {{ $emp->nip ?? '-' }}
      </td>

      <td class="px-5 py-4 text-sm text-gray-700">
        <div class="flex items-center gap-3">
          <a href="{{ route('admin.employees.edit', $emp->id) }}" class="text-blue-600 hover:underline">Edit</a>

          <form action="{{ route('admin.employees.destroy', $emp->id) }}" method="POST"
                onsubmit="return confirm('Hapus karyawan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
          </form>
        </div>
      </td>
    </tr>
  @empty
    <tr>
      <td colspan="5" class="px-5 py-10 text-center text-gray-500">
        Belum ada data karyawan.
      </td>
    </tr>
  @endforelse
</tbody>

      </table>
    </div>
  </div>

  <div class="mt-6">
    {{ $employees->links() }}
  </div>
</div>
@endsection
