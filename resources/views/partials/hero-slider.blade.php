{{-- resources/views/partials/hero-slider.blade.php --}}
<div class="heroSwiper swiper relative">
    <div class="swiper-wrapper">
        @foreach($banners as $banner)
        <div class="swiper-slide relative h-[450px] md:h-[600px] lg:h-[650px]">
            <!-- Link wrapper untuk gambar -->
            <a href="{{ $banner->link ?? '#' }}" 
               class="block w-full h-full"
               @if($banner->link && (str_starts_with($banner->link, 'http://') || str_starts_with($banner->link, 'https://')))
                   target="_blank" 
                   rel="noopener noreferrer"
               @endif>
                <img src="{{ asset('storage/' . $banner->image) }}" 
                     alt="{{ $banner->title }}"
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </a>
            
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent pointer-events-none"></div>
            
            <div class="absolute bottom-0 left-0 right-0 p-8 text-white pointer-events-none">
                <!-- Link untuk judul -->
                <a href="{{ $banner->link ?? '#' }}" 
                   class="pointer-events-auto inline-block group"
                   @if($banner->link && (str_starts_with($banner->link, 'http://') || str_starts_with($banner->link, 'https://')))
                       target="_blank" 
                       rel="noopener noreferrer"
                   @endif>
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 group-hover:text-amber-300 transition-colors duration-300">
                        {{ $banner->title }}
                    </h2>
                </a>
                <p class="text-lg md:text-xl mb-6">{{ $banner->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Navigation -->
    <div class="swiper-button-prev !w-12 !h-12 !bg-white/90 backdrop-blur-sm !rounded-full shadow-lg hover:!bg-white transition-all duration-300 after:!text-gray-700 after:!text-xl !left-4"></div>
    <div class="swiper-button-next !w-12 !h-12 !bg-white/90 backdrop-blur-sm !rounded-full shadow-lg hover:!bg-white transition-all duration-300 after:!text-gray-700 after:!text-xl !right-4"></div>
    
    <!-- Pagination -->
    <div class="swiper-pagination !bottom-6"></div>
</div>

<style>
/* Custom Pagination Styling */
.swiper-pagination-bullet {
    width: 14px !important;
    height: 14px !important;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.5)) !important;
    opacity: 1 !important;
    border: 2px solid rgba(255, 255, 255, 0.7) !important;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15), inset 0 1px 2px rgba(255, 255, 255, 0.3) !important;
    transition: all 0.3s ease !important;
    position: relative !important;
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
    width: 40px !important;
    border-radius: 7px !important;
    background: linear-gradient(135deg, #ffffff, #f0f0f0) !important;
    border-color: rgba(255, 255, 255, 0.9) !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2), inset 0 1px 3px rgba(255, 255, 255, 0.5) !important;
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