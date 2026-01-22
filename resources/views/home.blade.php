@extends('layouts.app')

@section('title', 'Beranda - GTK')

  @section('content')
  @include('partials.hero-slider')
  @include('partials.section-layanan')
  @include('partials.section-berita')
  {{-- @include('partials.section-statistik') --}}
  @include('partials.section-pimpinan')
@endsection

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", () => {
    // 1. Hero Swiper
    const heroSwiper = new Swiper(".heroSwiper", {
      loop: true,
      speed: 700,
      autoplay: { 
        delay: 4500, 
        disableOnInteraction: false 
      },
      pagination: { 
        el: ".heroSwiper .swiper-pagination", 
        clickable: true 
      },
      navigation: {
        nextEl: ".heroSwiper .swiper-button-next",
        prevEl: ".heroSwiper .swiper-button-prev",
      },
    });

    // 2. Berita Swiper
    const beritaSwiper = new Swiper(".beritaSwiper", {
      loop: true,
      speed: 700,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
      spaceBetween: 16,
      slidesPerView: 1.15,
      breakpoints: {
        640: { slidesPerView: 2, spaceBetween: 18 },
        1024: { slidesPerView: 4, spaceBetween: 22 },
      },
      navigation: {
        nextEl: ".berita-next",
        prevEl: ".berita-prev",
      },
    });

    // 3. Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.js-reveal');
    
    if (revealElements.length > 0) {
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.remove('opacity-0', 'translate-y-8', 'blur-[2px]');
            entry.target.classList.add('opacity-100', 'translate-y-0', 'blur-0');
            observer.unobserve(entry.target);
          }
        });
      }, { 
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px' // trigger sedikit lebih awal
      });

      revealElements.forEach(el => observer.observe(el));
    }
  });
</script>
@endpush