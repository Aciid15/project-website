@extends('layouts.admin')

@section('page-title', 'Manajemen Banner')

@section('content')
<div class="p-6">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-sm text-gray-600 mb-4">
        <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-800 font-medium">Banner</span>
    </nav>

    <div class="flex justify-between items-center mb-6">
        <h1></h1>
        <a href="{{ route('admin.banners.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Tambah Banner
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($banners as $banner)
                <tr>
                    <td class="px-6 py-4 text-sm">{{ $banner->order }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $banner->image) }}" 
                             alt="{{ $banner->title }}" 
                             class="h-16 w-24 object-cover rounded">
                    </td>
                    <td class="px-6 py-4 text-sm">{{ $banner->title }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ Str::limit($banner->description, 50) }}</td>
                    <td class="px-6 py-4">
                    <form action="{{ route('admin.banners.toggle', $banner) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" 
                                class="px-2 py-1 text-xs rounded-full {{ $banner->is_active ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $banner->is_active ? 'Published' : 'Draft' }}
                        </button>
                    </form>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.banners.edit', $banner) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                            <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" onsubmit="return confirm('Yakin hapus banner ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                        Belum ada banner. <a href="{{ route('admin.banners.create') }}" class="text-blue-600">Tambah banner</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection