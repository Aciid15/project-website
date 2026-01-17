{{-- HERO SLIDER --}}
<section class="bg-white">
  <div class="swiper heroSwiper relative">
    <div class="swiper-wrapper">

      {{-- Slide 1 --}}
      <div class="swiper-slide">
        <div class="relative h-[420px] sm:h-[520px] lg:h-[640px]">
          <div class="absolute inset-0 bg-center bg-cover"
               style="background-image:url('{{ asset('images/slmt.jpg') }}');"></div>

          <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent"></div>

          <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="max-w-3xl">
              <h2 class="text-white font-extrabold tracking-wide text-4xl sm:text-5xl lg:text-6xl drop-shadow">
                SELAMAT DATANG
              </h2>

              <p class="mt-4 text-sky-300 font-extrabold text-3xl sm:text-4xl lg:text-5xl leading-[1.08] drop-shadow">
                Di Kantor Guru dan Tenaga Kependidikan<br/>
                Kepulauan Riau
              </p>

              <div class="mt-8">
                <a href="#"
                   class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 font-semibold text-sky-600 hover:bg-gray-50 shadow">
                  Lihat Program
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Slide 2 --}}
      <div class="swiper-slide">
        <div class="relative h-[420px] sm:h-[520px] lg:h-[640px]">
          <div class="absolute inset-0 bg-center bg-cover"
               style="background-image:url('{{ asset('images/slmt.jpg') }}');"></div>

          <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent"></div>

          <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="max-w-3xl">
              <h2 class="text-white font-extrabold tracking-wide text-4xl sm:text-5xl lg:text-6xl drop-shadow">
                INFORMASI & PROGRAM
              </h2>

              <p class="mt-4 text-sky-300 font-extrabold text-3xl sm:text-4xl lg:text-5xl leading-[1.08] drop-shadow">
                Update layanan GTK<br/>
                dan kegiatan terbaru
              </p>

              <div class="mt-8">
                <a href="#"
                   class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 font-semibold text-sky-600 hover:bg-gray-50 shadow">
                  Lihat Program
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Slide 3 --}}
      <div class="swiper-slide">
        <div class="relative h-[420px] sm:h-[520px] lg:h-[640px]">
          <div class="absolute inset-0 bg-center bg-cover"
               style="background-image:url('{{ asset('images/slmt.jpg') }}');"></div>

          <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent"></div>

          <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="max-w-3xl">
              <h2 class="text-white font-extrabold tracking-wide text-4xl sm:text-5xl lg:text-6xl drop-shadow">
                PUBLIKASI
              </h2>

              <p class="mt-4 text-sky-300 font-extrabold text-3xl sm:text-4xl lg:text-5xl leading-[1.08] drop-shadow">
                Dokumen, berita,<br/>
                dan pengumuman
              </p>

              <div class="mt-8">
                <a href="#"
                   class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 font-semibold text-sky-600 hover:bg-gray-50 shadow">
                  Lihat Publikasi
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    {{-- PENTING: nav & dots cukup 1x saja, jangan taruh di setiap slide --}}
    <div class="swiper-button-prev !text-white/90"></div>
    <div class="swiper-button-next !text-white/90"></div>
    <div class="swiper-pagination !bottom-6"></div>
  </div>
</section>