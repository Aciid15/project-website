{{-- resources/views/partials/section-berita.blade.php --}}
<section class="bg-sky-100 js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-1.5 lg:py-2">

    {{-- Header --}}
    <div class="flex items-center justify-between gap-3">
      <div class="flex items-center gap-3">
        <h2 class="text-xl sm:text-4xl font-extrabold text-gray-900">Berita Terbaru</h2>
        <span class="h-[3px] w-20 bg-amber-400 rounded-full mt-2"></span>
      </div>

      <a href="#"
         class=" mt-6 inline-flex items-center rounded-full border border-sky-500 px-3 py-1 text-xs sm:text-sm font-semibold text-gray-900
                hover:bg-sky-200 transition">
        Lihat Semua Berita
      </a>
    </div>

    {{-- Slider --}}
    <div class="mt-6 relative">
      <div class="swiper beritaSwiper">
        <div class="swiper-wrapper">

          {{-- Slide 1 --}}
            <div class="swiper-slide">
            <a href="#" class="block w-full max-w-[240px] mx-auto h-full">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col">
                
                {{-- gambar fixed --}}
                <div class="h-24 bg-gray-200 overflow-hidden shrink-0">
                    <img src="{{ asset('images/berita1.png') }}"
                        alt="Berita 1"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Berita+1';">
                </div>

                {{-- isi dibuat flex-1 supaya rapi --}}
                <div class="p-3 flex-1">
                    <div class="text-[11px] text-gray-500 flex items-center gap-2">
                    <span>📅</span>
                    <span>14 Januari 2025</span>
                    </div>

                    {{-- judul dibatasi baris --}}
                    <h3 class="mt-1 text-xs font-extrabold text-gray-900 leading-snug line-clamp-2">
            KGTK Kepri Dorong Program Kepemimpinan Sekolah untuk Perkuat Mutu Pendidikan
            </h3>

                </div>

                </div>
            </a>
            </div>



          {{-- Slide 2 --}}
         <div class="swiper-slide">
            <a href="#" class="block w-full max-w-[240px] mx-auto h-full">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col">
                
                {{-- gambar fixed --}}
                <div class="h-24 bg-gray-200 overflow-hidden shrink-0">
                    <img src="{{ asset('images/berita1.png') }}"
                        alt="Berita 1"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Berita+1';">
                </div>

                {{-- isi dibuat flex-1 supaya rapi --}}
                <div class="p-3 flex-1">
                    <div class="text-[11px] text-gray-500 flex items-center gap-2">
                    <span>📅</span>
                    <span>14 Januari 2025</span>
                    </div>

                    {{-- judul dibatasi baris --}}
                    <h3 class="mt-1 text-xs font-extrabold text-gray-900 leading-snug line-clamp-2">
             Kegiatan Pembinaan GTK dan Sosialisasi Program Tahun 2025
            </h3>

                </div>

                </div>
            </a>
            </div>

          {{-- Slide 3 --}}
          <div class="swiper-slide">
            <a href="#" class="block w-full max-w-[240px] mx-auto h-full">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col">
                
                {{-- gambar fixed --}}
                <div class="h-24 bg-gray-200 overflow-hidden shrink-0">
                    <img src="{{ asset('images/berita1.png') }}"
                        alt="Berita 1"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Berita+1';">
                </div>

                {{-- isi dibuat flex-1 supaya rapi --}}
                <div class="p-3 flex-1">
                    <div class="text-[11px] text-gray-500 flex items-center gap-2">
                    <span>📅</span>
                    <span>14 Januari 2025</span>
                    </div>

                    {{-- judul dibatasi baris --}}
                    <h3 class="mt-1 text-xs font-extrabold text-gray-900 leading-snug line-clamp-2">
            Rapat Koordinasi dan Evaluasi Program GTK Kepulauan Riau
            </h3>

                </div>

                </div>
            </a>
            </div>

          {{-- Slide 4 --}}
          <div class="swiper-slide">
            <a href="#" class="block w-full max-w-[240px] mx-auto h-full">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col">
                
                {{-- gambar fixed --}}
                <div class="h-24 bg-gray-200 overflow-hidden shrink-0">
                    <img src="{{ asset('images/berita1.png') }}"
                        alt="Berita 1"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Berita+1';">
                </div>

                {{-- isi dibuat flex-1 supaya rapi --}}
                <div class="p-3 flex-1">
                    <div class="text-[11px] text-gray-500 flex items-center gap-2">
                    <span>📅</span>
                    <span>14 Januari 2025</span>
                    </div>

                    {{-- judul dibatasi baris --}}
                    <h3 class="mt-1 text-xs font-extrabold text-gray-900 leading-snug line-clamp-2">
            Workshop Peningkatan Kompetensi Guru dan Tenaga Kependidikan
            </h3>

                </div>

                </div>
            </a>
            </div>

 {{-- Slide 3 --}}
          <div class="swiper-slide">
            <a href="#" class="block w-full max-w-[240px] mx-auto h-full">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col">
                
                {{-- gambar fixed --}}
                <div class="h-24 bg-gray-200 overflow-hidden shrink-0">
                    <img src="{{ asset('images/berita1.png') }}"
                        alt="Berita 1"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Berita+1';">
                </div>

                {{-- isi dibuat flex-1 supaya rapi --}}
                <div class="p-3 flex-1">
                    <div class="text-[11px] text-gray-500 flex items-center gap-2">
                    <span>📅</span>
                    <span>14 Januari 2025</span>
                    </div>

                    {{-- judul dibatasi baris --}}
                    <h3 class="mt-1 text-xs font-extrabold text-gray-900 leading-snug line-clamp-2">
            Rapat Koordinasi dan Evaluasi Program GTK Kepulauan Riau
            </h3>

                </div>

                </div>
            </a>
            </div>

        </div>
      </div>

      {{-- Panah kiri/kanan (desktop) --}}
      <button class="berita-prev absolute -left-8 top-1/2 -translate-y-1/2 text-sky-800 hover:text-white hidden lg:block">
        <span class="text-4xl leading-none">‹</span>
      </button>
      <button class="berita-next absolute -right-8 top-1/2 -translate-y-1/2 text-sky-800 hover:text-white hidden lg:block">
        <span class="text-4xl leading-none">›</span>
      </button>
    </div>

  </div>
</section>
