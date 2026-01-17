@extends('layouts.app')

@section('title', 'Beranda - GTK')

@section('content')
  @include('partials.hero-slider')
  @include('partials.section-pimpinan')
   @include('partials.section-statistik')

  <div class="mx-auto max-w-7xl px-4 py-6">
    <!-- content -->
  </div>
@endsection

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".heroSwiper", {
      loop: true,
      speed: 700,
      autoplay: { delay: 4500, disableOnInteraction: false },
      pagination: { el: ".heroSwiper .swiper-pagination", clickable: true },
      navigation: {
        nextEl: ".heroSwiper .swiper-button-next",
        prevEl: ".heroSwiper .swiper-button-prev",
      },
    });
  });

  document.addEventListener('DOMContentLoaded', () => {
    const els = document.querySelectorAll('.js-reveal');

    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.remove('opacity-0', 'translate-y-8', 'blur-[2px]');
          entry.target.classList.add('opacity-100', 'translate-y-0', 'blur-0');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    els.forEach(el => io.observe(el));
  });
</script>
@endpush
