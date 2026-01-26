{{-- resources/views/partials/hero-slider.blade.php --}}
<div class="heroSwiper swiper relative">
  <div class="swiper-wrapper">
    @foreach($banners as $banner)
      @php
        $href = $banner->link ?: route('banner.show', $banner->id);
        $isExternal = $banner->link && (str_starts_with($banner->link, 'http://') || str_starts_with($banner->link, 'https://'));
      @endphp

      <div class="swiper-slide relative h-[400px] sm:h-[500px] md:h-[600px] lg:h-[650px]">
        <!-- Link wrapper untuk gambar -->
        <a href="{{ $href }}"
           class="block w-full h-full"
           @if($isExternal) target="_blank" rel="noopener noreferrer" @endif>
          <img src="{{ asset('storage/' . $banner->image) }}"
               alt="{{ $banner->title }}"
               class="w-full h-full object-cover object-center transition-transform duration-500 hover:scale-105">
        </a>

        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent pointer-events-none"></div>

        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-10 lg:p-12 text-white pointer-events-none">
          <div class="max-w-4xl flex flex-col h-full">
            <!-- Link untuk judul -->
            <a href="{{ $href }}"
               class="pointer-events-auto inline-block group"
               @if($isExternal) target="_blank" rel="noopener noreferrer" @endif>
              <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 group-hover:text-amber-300 transition-colors duration-300 line-clamp-2">
                {{ $banner->title }}
              </h2>
            </a>
            
            <!-- Deskripsi dengan batasan baris -->
            {{-- @if($banner->description)
              <p class="text-base sm:text-lg md:text-xl mb-4 md:mb-6 line-clamp-2 md:line-clamp-3 text-gray-100">
                {{ $banner->description }}
              </p>
            @endif --}}

            <!-- Tombol Selengkapnya (Opsional) -->
            <div class="flex items-end gap-4 mt-auto">
              <a href="{{ $href }}"
                 class="pointer-events-auto inline-flex items-center gap-2 bg-white/90 hover:bg-white text-gray-900 px-4 md:px-6 py-2 md:py-3 rounded-full font-semibold transition-all duration-300 hover:shadow-lg hover:scale-105 flex-shrink-0"
                 @if($isExternal) target="_blank" rel="noopener noreferrer" @endif>
                Selengkapnya
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Navigation -->
  <button type="button"
    class="swiper-button-prev !w-10 !h-10 md:!w-12 md:!h-12 !bg-white/90 backdrop-blur-sm !rounded-full shadow-lg hover:!bg-white transition-all duration-300 !left-2 md:!left-4 flex items-center justify-center">
    <i class="fa-solid fa-chevron-left text-gray-700 text-lg md:text-xl"></i>
  </button>

  <button type="button"
    class="swiper-button-next !w-10 !h-10 md:!w-12 md:!h-12 !bg-white/90 backdrop-blur-sm !rounded-full shadow-lg hover:!bg-white transition-all duration-300 !right-2 md:!right-4 flex items-center justify-center">
    <i class="fa-solid fa-chevron-right text-gray-700 text-lg md:text-xl"></i>
  </button>

  <!-- Pagination -->
  <div class="swiper-pagination !bottom-4 md:!bottom-6"></div>
</div>

<style>
/* Matikan ikon default Swiper */
.heroSwiper .swiper-button-prev::after,
.heroSwiper .swiper-button-next::after {
  display: none !important;
}

/* Posisi tombol panah di tengah vertikal */
.heroSwiper .swiper-button-prev,
.heroSwiper .swiper-button-next {
  position: absolute !important;
  top: 50% !important;
  transform: translateY(-50%) !important;
  z-index: 50 !important;
}

/* Container slider */
.heroSwiper {
  overflow: hidden;
  width: 100%;
}

/* PERBAIKAN: Pastikan img tag fill container dengan baik */
.heroSwiper img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

/* Line clamp untuk batasi teks */
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

/* Custom Pagination Styling */
.swiper-pagination-bullet {
    width: 12px !important;
    height: 12px !important;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.5)) !important;
    opacity: 1 !important;
    border: 2px solid rgba(255, 255, 255, 0.7) !important;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15), inset 0 1px 2px rgba(255, 255, 255, 0.3) !important;
    transition: all 0.3s ease !important;
    position: relative !important;
}

@media (min-width: 768px) {
  .swiper-pagination-bullet {
    width: 14px !important;
    height: 14px !important;
  }
}

.swiper-pagination-bullet::before {
    content: '' !important;
    position: absolute !important;
    inset: -4px !important;
    border-radius: 50% !important;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.2) 0%, transparent 70%) !important;
    opacity: 0 !important;
    transition: opacity 0.3s ease !important;
}

.swiper-pagination-bullet-active {
    width: 32px !important;
    border-radius: 7px !important;
    background: linear-gradient(135deg, #ffffff, #f0f0f0) !important;
    border-color: rgba(255, 255, 255, 0.9) !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2), inset 0 1px 3px rgba(255, 255, 255, 0.5) !important;
}

@media (min-width: 768px) {
  .swiper-pagination-bullet-active {
    width: 40px !important;
  }
}

.swiper-pagination-bullet-active::before {
    opacity: 1 !important;
    border-radius: 7px !important;
}

.swiper-pagination-bullet:hover {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.7)) !important;
    transform: scale(1.15);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 1px 2px rgba(255, 255, 255, 0.4) !important;
}

.swiper-pagination-bullet:hover::before {
    opacity: 0.6 !important;
}
</style>