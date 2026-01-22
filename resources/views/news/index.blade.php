@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<section class="bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
        {{-- Breadcrumb --}}
        <nav class="mb-6">
            <ol class="flex items-center gap-2 text-sm text-gray-500">
                <li>
                    <a href="{{ url('/') }}" class="text-blue-500 hover:underline">
                        Beranda
                    </a>
                </li>
                <li class="text-gray-400">›</li>
                <li class="text-gray-700 font-medium">
                    Berita
                </li>
            </ol>
        </nav>

        {{-- Header --}}
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-4">
                <h2 class="text-3xl font-bold text-gray-900">Berita Terkini</h2>
                <span class="h-1 w-16 bg-amber-400 rounded-full mt-2"></span>
            </div>
            
            {{-- Filter Kategori (Optional) --}}
            @if($categories ?? false)
            <div class="hidden md:block">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500" 
                        onchange="window.location.href=this.value">
                    <option value="{{ route('news.index') }}">Semua Kategori</option>
                    @foreach($categories as $cat)
                    <option value="{{ route('news.index', ['category' => $cat->id]) }}" 
                            {{ request('category') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            @endif
        </div>

        {{-- Grid Berita --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($news as $item)
            <article class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden hover:shadow-lg transition-all duration-300 group">
                <a href="{{ route('news.show', $item->id) }}" class="block">
                    {{-- Gambar --}}
                    <div class="aspect-video overflow-hidden bg-gray-100">
                        @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" 
                             alt="{{ $item->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                             onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=No+Image';">
                        @else
                        <img src="https://dummyimage.com/800x500/e5e7eb/111827&text=No+Image" 
                             alt="No Image"
                             class="w-full h-full object-cover">
                        @endif
                    </div>

                    {{-- Content --}}
                    <div class="p-5">
                        {{-- Meta Info --}}
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-3">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $item->created_at->format('d M Y') }}
                            </span>
                            
                            @if($item->category)
                            <span class="px-2 py-1 bg-sky-100 text-sky-700 rounded-full font-medium">
                                {{ is_object($item->category) ? $item->category->name : $item->category }}
                            </span>
                            @endif
                        </div>

                        {{-- Judul --}}
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-sky-600 transition mb-2 line-clamp-2">
                            {{ $item->title }}
                        </h3>

                        {{-- Excerpt --}}
                        @if($item->excerpt)
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            {{ $item->excerpt }}
                        </p>
                        @else
                        <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                            {{ Str::limit(strip_tags($item->content), 120) }}
                        </p>
                        @endif

                        {{-- Read More --}}
                        <span class="inline-flex items-center text-sky-600 font-semibold text-sm group-hover:gap-2 transition-all">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                </a>
            </article>
            @empty
            {{-- Empty State --}}
            <div class="col-span-full">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-12 text-center">
                    <svg class="w-20 h-20 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Berita</h3>
                    <p class="text-gray-600">Berita akan ditampilkan di sini setelah dipublikasikan.</p>
                </div>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($news->hasPages())
        <div class="mt-12">
            <div class="flex justify-center">
                {{ $news->links() }}
            </div>
        </div>
        @endif
    </div>
</section>
@endsection