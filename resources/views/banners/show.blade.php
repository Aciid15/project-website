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


    <article class="max-w-none text-gray-800 leading-8 text-[18px] space-y-4">
      {!! nl2br(e($banner->description)) !!}
    </article>

    <div class="mt-10 pt-6 border-t">
      <a href="{{ url()->previous() }}" class="font-semibold hover:underline">
        ← Kembali
      </a>
    </div>
  </div>
@endsection
