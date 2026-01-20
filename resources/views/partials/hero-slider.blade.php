{{-- resources/views/partials/hero-slider.blade.php --}}
<div class="heroSwiper swiper relative">
    <div class="swiper-wrapper">
        @foreach($banners as $banner)
        <div class="swiper-slide relative h-[450px] md:h-[600px] lg:h-[650px]"> 
            <img src="{{ asset('storage/' . $banner->image) }}" 
                 alt="{{ $banner->title }}"
                 class="w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">{{ $banner->title }}</h2>
                <p class="text-lg md:text-xl mb-6">{{ $banner->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
</div> 