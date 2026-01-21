@extends('layouts.app')
@section('content')
@section('title', 'Visi & Misi')


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

    <section class="">
    <section class="w-full bg-white">

        {{-- Judul --}}
        <div class="flex items-center gap-4 mb-6">
          <h2 class="text-3xl font-bold text-gray-900">Visi dan Misi</h2>
          <span class="h-1 w-16 bg-amber-400 rounded-full mt-2"></span>
        </div>

        {{-- Card --}}
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 min-h-[300px]">
          <h2  class="text-2xl font-bold text-gray-900">Visi</h2>
          <p class="gap-4 mb-6">"Terwujudnya ekosistem pendidikan Kepulauan Riau yang unggul, berintegritas, dan berdaya saing global melalui penguatan kapasitas guru dan tenaga kependidikan yang Fleksibel, Adaptif. dan Responsif (FAR)"</p>
          
          <h2 class="text-2xl font-bold text-gray-900">Misi</h2>
          <p class="">
            <ol>
                <li>1. Meningkatkan kualitas dan kompetensi guru serta tenaga kependidikan melalui pelatihan dan pengembangan berkelanjutan.</li>
                <li>2. Mendorong inovasi dan kreativitas dalam proses pembelajaran serta pengelolaan pendidikan.</li>
                <li>3. Membangun lingkungan pendidikan yang inklusif, berkelanjutan, dan berbasis teknologi.</li>
                <li>4. Meningkatkan aksesibilitas dan kualitas pendidikan di seluruh wilayah kepulauan riau.</li>
                <li>5. Membangun kemitraan dan kolaborasi strategis dengan pemerintah daerah, lembaga pendidikan, dunia usaha dan industri, organisasi profesi, dan pemangku kepentingan lainnya.</li>
                <li>6. Melaksanakan pemetaan kebutuhan pengembangan GTK berbasis data dan teknologi digital guna memastikan intervensi program yang tepat sasaran.</li>
                <li>7. Menguatkan supervisi, pemantauan, dan evaluasi program pengembangan GTK untuk menjamin mutu, relevansi, dan keberlanjutan program di daerah.</li>
            </ol>
          </p>
        </div>
    </section>
</section>
@endsection
