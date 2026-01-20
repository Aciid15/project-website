{{-- resources/views/partials/section-berita.blade.php --}}
<section class="bg-sky-100 js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-1.5 lg:py-2">

    {{-- Header --}}
    <div class="flex items-center justify-between gap-3">
      <div class="flex items-center gap-3">
        <h2 class="text-xl sm:text-4xl font-extrabold text-gray-900">Berita Terbaru</h2>
        <span class="h-[3px] w-20 bg-amber-400 rounded-full mt-2"></span>
      </div>

      <a href="{{ route('news.index') }}"
         class="mt-6 inline-flex items-center rounded-full border border-sky-500 px-3 py-1 text-xs sm:text-sm font-semibold text-gray-900
                hover:bg-sky-200 transition">
        Lihat Semua Berita
      </a>
    </div>

    {{-- Slider --}}
    <div class="mt-6 relative">
      <div class="swiper beritaSwiper">
        <div class="swiper-wrapper">

          @forelse($news as $item)
            {{-- Slide Berita --}}
            <div class="swiper-slide">
              <a href="{{ route('news.show', $item->id) }}" class="block w-full max-w-[240px] mx-auto h-full">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col">
                  
                  {{-- Gambar --}}
                  <div class="h-24 bg-gray-200 overflow-hidden shrink-0">
                    @if($item->image)
                      <img src="{{ asset('storage/' . $item->image) }}"
                           alt="{{ $item->title }}"
                           class="w-full h-full object-cover"
                           onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=No+Image';">
                    @else
                      <img src="https://dummyimage.com/800x500/e5e7eb/111827&text=No+Image"
                           alt="No Image"
                           class="w-full h-full object-cover">
                    @endif
                  </div>

                  {{-- Konten --}}
                  <div class="p-3 flex-1">
                    <div class="text-[11px] text-gray-500 flex items-center gap-2">
                      <span>📅</span>
                      <span>{{ $item->created_at->format('d F Y') }}</span>
                    </div>

                    {{-- Judul dibatasi 2 baris --}}
                    <h3 class="mt-1 text-xs font-extrabold text-gray-900 leading-snug line-clamp-2">
                      {{ $item->title }}
                    </h3>

                    {{-- Kategori (opsional) --}}
                    @if($item->category)
                      <div class="mt-2">
                        <span class="text-[10px] bg-sky-100 text-sky-800 px-2 py-0.5 rounded-full">
                          {{ $item->category }}
                        </span>
                      </div>
                    @endif
                  </div>

                </div>
              </a>
            </div>
          @empty
            {{-- Jika tidak ada berita --}}
            <div class="swiper-slide">
              <div class="w-full max-w-[240px] mx-auto h-full">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden h-full flex flex-col items-center justify-center p-6">
                  <svg class="w-16 h-16 text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                  </svg>
                  <p class="text-sm text-gray-500 text-center">Belum ada berita</p>
                </div>
              </div>
            </div>
          @endforelse

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