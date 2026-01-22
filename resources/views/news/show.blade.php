@extends('layouts.app')

@section('title', $news->title)

@section('content')
  <div class="max-w-[980px] mx-auto px-4 py-12">
    {{-- Judul --}}
    <h1 class="text-[clamp(32px,4vw,56px)] font-bold leading-[1.05] tracking-tight mb-4">
      {{ $news->title }}
    </h1>

    {{-- Meta --}}
    <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-6">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-calendar"></i>
        <span>{{ optional($news->published_at)->translatedFormat('d F Y') ?? '-' }}</span>
      </div>
    </div>

{{-- Hero Image --}}
@if($news->image)
  <div class="mb-7 flex justify-center">
    <div class="w-full max-w-[720px] rounded-2xl overflow-hidden bg-gray-100 shadow-lg">
      <img
        src="{{ asset('storage/'.$news->image) }}"
        class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover block"
        alt="{{ $news->title }}"
        loading="lazy"
      >
    </div>
  </div>
@endif


    {{-- Isi --}}
    <article class="prose max-w-none prose-p:leading-8">
      {!! $news->content !!}
    </article>

    {{-- Back --}}
    <div class="mt-10 pt-6 border-t">
      <a href="{{ route('news.index') }}" class="font-semibold hover:underline">
        ← Kembali ke Berita
      </a>
    </div>
  </div>
@endsection
