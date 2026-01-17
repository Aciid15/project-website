@extends('layouts.app')

@section('title', 'Beranda - GTK')

@section('content')
  @include('partials.hero-slider')

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
</script>
@endpush
