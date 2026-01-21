@extends('layouts.app')
@section('content')
@section('title', 'Struktur & Organisasi')

<section class="">
    <section class="w-full bg-white">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
<nav class="mb-6">
  <ol class="flex items-center gap-2 text-sm text-gray-500">
    <li>
      <a href="{{ url('/') }}" class="text-blue-500 hover:underline">
        Beranda
      </a>
    </li>
    <li class="text-gray-400">›</li>
    <li class="text-gray-700 font-medium">
      @yield('title')
    </li>
  </ol>
</nav>

        {{-- Judul --}}
        <div class="flex items-center gap-4 mb-6">
          <h2 class="text-3xl font-bold text-gray-900">Struktur & Organisasi</h2>
          <span class="h-1 w-16 bg-amber-400 rounded-full mt-2"></span>
        </div>

        {{-- Card --}}
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 min-h-[300px]">
        </div>
      
    </div>
    </section>
</section>

@endsection
