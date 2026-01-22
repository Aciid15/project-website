  @extends('layouts.app')
  @section('content')
  @section('title', 'Sejarah')


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
            <h2 class="text-3xl font-bold text-gray-900">Sejarah</h2>
            <span class="h-1 w-16 bg-amber-400 rounded-full mt-2"></span>
          </div>

          {{-- Card --}}
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 min-h-[300px]">
            {{-- Atas: teks kiri + foto kanan --}}
              <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
              {{-- Kiri --}}
              <div class="text-grey-900">
                  <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight">
                  Kantor Guru dan Tenaga kependidikan<br class="hidden sm:block"/>
                  </h2>

                  <p class="mt-6 max-w-xl text-grey-900 leading-relaxed text-sm sm:text-base">
                  Kantor Guru dan Tenaga Kependidikan (GTK) Provinsi Kepulauan Riau merupakan unit kerja yang bertugas mendukung pembinaan, pengembangan, dan peningkatan kualitas guru serta tenaga kependidikan. Kantor GTK Kepri berperan dalam penguatan kompetensi, fasilitasi kebijakan pendidikan, dan peningkatan tata kelola layanan pendidikan yang profesional, akuntabel, dan adaptif terhadap transformasi digital.
                  </p>
              </div>

              {{-- Kanan --}}
              <div class="lg:flex lg:justify-end">
                  <div class="w-full max-w-sm sm:max-sm-lg bg-white rounded-2xl shadow-xl">
                  <div class="aspect-square rounded-xl bg-gray-50 overflow-hidden flex items-center justify-center">
                      {{-- GANTI src sesuai file kamu --}}
                      <img class="h-full w-full object-cover"
                      src="{{ asset('images/sejarah.png') }}"
                      alt="Foto Pimpinan"
                      class="h-full w-full object-contain"
                      onerror="this.src='images/pimpinan.jpg';"
                      />
                  </div>
                  </div>
              </div>
              </div>
          </div>

      </section>
  </section>
  @endsection
