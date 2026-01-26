@extends('layouts.app')

@section('title', $banner->title)

@section('content')
  <div class="max-w-[980px] mx-auto px-4 py-12">
    <h1 class="text-[clamp(32px,4vw,56px)] font-bold leading-[1.05] tracking-tight mb-4">
      {{ $banner->title }}
    </h1>

    <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-6">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-calendar"></i>
        <span>{{ optional($banner->created_at)->translatedFormat('d F Y') ?? '-' }}</span>
      </div>      
    </div>

    @if($banner->image)
      <div class="mb-7 flex justify-center">
        <div class="w-full max-w-[720px] rounded-2xl overflow-hidden bg-gray-100 shadow-lg">
          <img src="{{ asset('storage/'.$banner->image) }}"
               class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover block"
               alt="{{ $banner->title }}">
        </div>
      </div>
    @endif

    <article class="prose prose-lg max-w-none">
      <div class="text-gray-800 leading-relaxed space-y-5">
        @foreach(explode("\n\n", $banner->description) as $paragraph)
          @if(trim($paragraph))
            <p class="text-[17px] md:text-[18px] leading-[1.8] text-justify first-letter:text-5xl first-letter:font-bold first-letter:text-gray-900 first-letter:mr-1 first-letter:float-left">
              {{ trim($paragraph) }}
            </p>
          @endif
        @endforeach
      </div>
    </article>

    <div class="mt-10 pt-6 border-t">
      <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-800 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Kembali
      </a>
    </div>
  </div>
@endsection