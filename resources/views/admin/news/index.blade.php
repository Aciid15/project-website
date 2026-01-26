@extends('layouts.admin')

@section('page-title', 'Manajemen Berita')

@section('content')


<div class="p-6">
    <nav class="flex items-center gap-2 text-sm text-gray-600 mb-4">
    <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a>
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
    </svg>
    <span class="text-gray-800 font-medium">Berita</span>
</nav>
    <div class="flex justify-between items-center mb-6">
        <h1></h1>
        <a href="{{ route('admin.news.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg inline-flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            </svg>
            Tambah Berita
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($news as $item)
                <tr>
                    <td class="px-6 py-4 text-sm">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">
                        @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" 
                             alt="{{ $item->title }}" 
                             class="h-16 w-24 object-cover rounded">
                        @else
                        <div class="h-16 w-24 bg-gray-200 rounded flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm">{{ Str::limit($item->title, 50) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $item->category->name ?? '-' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500">{{ $item->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4">
                    <form action="{{ route('admin.news.toggle', $item) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" 
                                class="px-2 py-1 text-xs rounded-full {{ $item->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $item->status == 'published' ? 'Published' : 'Draft' }}
                        </button>
                    </form>
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.news.edit', $item) }}" 
                               class="text-blue-600 hover:text-blue-900">Edit</a>
                            <form action="{{ route('admin.news.destroy', $item) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Yakin hapus berita ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                        Belum ada berita. <a href="{{ route('admin.news.create') }}" class="text-blue-600">Tambah berita</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if($news->hasPages())
    <div class="mt-4">
        {{ $news->links() }}
    </div>
    @endif
</div>
@endsection
