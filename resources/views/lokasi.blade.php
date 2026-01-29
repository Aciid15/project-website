@extends('layouts.app')

@section('title', 'Lokasi')

@section('content')
<section class="w-full bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">

    {{-- Breadcrumb --}}
    <nav class="mb-6">
      <ol class="flex items-center gap-2 text-sm text-gray-500">
        <li>
          <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Beranda</a>
        </li>
        <li class="text-gray-400">›</li>
        <li class="text-gray-700 font-medium">@yield('title')</li>
      </ol>
    </nav>

    {{-- Judul --}}
    <div class="flex items-center gap-4 mb-6">
      <h2 class="text-3xl font-bold text-gray-900">Lokasi</h2>
      <span class="h-1 w-16 bg-amber-400 rounded-full mt-2"></span>
    </div>

    {{-- Card --}}
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 lg:p-8">
      <div class="grid lg:grid-cols-2 gap-8">

        {{-- MAP --}}
        <div class="rounded-2xl overflow-hidden border bg-gray-50">
          <div class="aspect-[16/10]">
            {{-- GANTI src iframe ini dari Google Maps -> Share -> Embed a map --}}
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.6058356179472!2d104.51244030933937!3d0.9991607252461854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d96f0011ece63b%3A0xbc651c87976d810c!2sKantor%20Guru%20dan%20Tenaga%20Kependidikan%20Provinsi%20Kepri!5e0!3m2!1sid!2sid!4v1769653761354!5m2!1sid!2sid"
              class="w-full h-full"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>

        {{-- INFO --}}
        <div class="space-y-5">
          <div>
            <h3 class="text-xl font-bold text-gray-900">Kantor Guru & Tenaga Kependidikan</h3>
            <p class="text-gray-600 mt-1">
              {{-- GANTI ALAMAT --}}
              Jalan Tata Bumi Km 20 Ceruk Ijuk, Toapaya, Bintan, Kepulauan Riau 29151
            </p>
          </div>

          <div class="grid sm:grid-cols-2 gap-4">
            <div class="rounded-xl border bg-gray-50 p-4">
              <div class="text-sm text-gray-500">Jam Operasional</div>
              <div class="font-semibold text-gray-900 mt-1">Senin–Jumat</div>
              <div class="text-gray-700">08:00 – 16:00</div>
            </div>

            <div class="rounded-xl border bg-gray-50 p-4">
              <div class="text-sm text-gray-500">Kontak</div>
              <div class="text-gray-700 mt-1">
                <div><span class="font-semibold">Tel:</span> 08xxxxxxxxxx</div>
                <div><span class="font-semibold">Email:</span> bgpkepri@kemdikbud.go.id</div>
              </div>
            </div>
          </div>

          <div class="rounded-xl border p-4">
            <div class="text-sm text-gray-500">Petunjuk</div>
            <p class="text-gray-700 mt-1 leading-7">
              Sebelah kantor BPMP (gedung bewarna biru)
            </p>
          </div>

          <div class="flex flex-wrap gap-3 pt-2">
            {{-- GANTI LINK GOOGLE MAPS (Share -> Copy link) --}}
            <a href="https://maps.app.goo.gl/VbzF29ZZ9avcZGdS7"
               target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-white font-semibold hover:bg-blue-700">
              Buka di Google Maps
            </a>

            <a href="{{ url()->previous() }}"
               class="inline-flex items-center justify-center rounded-xl bg-gray-100 px-5 py-3 text-gray-800 font-semibold hover:bg-gray-200">
              ← Kembali
            </a>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
@endsection
