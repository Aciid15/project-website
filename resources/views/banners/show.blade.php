@extends('layouts.app')

@section('title', $banner->title)

@section('content')
  <div class="max-w-[980px] mx-auto px-4 py-12">
    <h1 class="text-[clamp(32px,4vw,56px)] font-bold leading-[1.05] tracking-tight mb-4">
      {{ $banner->title }}
    </h1>

    <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-6">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-calendar"></i>
        <span>{{ optional($banner->created_at)->translatedFormat('d F Y') ?? '-' }}</span>
      </div>      
    </div>

    @if($banner->image)
      <div class="mb-7 flex justify-center">
        <div class="w-full max-w-[720px] rounded-2xl overflow-hidden bg-gray-100 shadow-lg">
          <img src="{{ asset('storage/'.$banner->image) }}"
               class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover block"
               alt="{{ $banner->title }}">
        </div>
      </div>
    @endif

    <article class="prose prose-lg max-w-none">
      <div class="text-gray-800 leading-relaxed space-y-5">
        @foreach(explode("\n\n", $banner->description) as $paragraph)
          @if(trim($paragraph))
            <p class="text-[17px] md:text-[18px] leading-[1.8] text-justify first-letter:text-5xl first-letter:font-bold first-letter:text-gray-900 first-letter:mr-1 first-letter:float-left">
              {{ trim($paragraph) }}
            </p>
          @endif
        @endforeach
      </div>
    </article>

    <!-- Social Share Section -->
    <div class="mt-12 pt-8 border-t border-gray-300">
      <div class="flex flex-col items-center">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Bagikan ke Media Sosial</h3>
      
      @php
        $shareUrl = url()->current();
        $shareTitle = $banner->title;
        $shareImage = asset('storage/' . $banner->image);
        $shareDescription = Str::limit(strip_tags($banner->description), 100);
        
        // URL encode untuk berbagai platform
        $whatsappText = urlencode($shareTitle . ' ' . $shareUrl);
        $twitterText = urlencode($shareTitle . ' ' . $shareUrl);
        $facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($shareUrl);
        $linkedinUrl = 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($shareUrl);
        $emailSubject = urlencode($shareTitle);
        $emailBody = urlencode($shareTitle . "\n\n" . $shareDescription . "\n\n" . $shareUrl);
        $pinterestUrl = 'https://pinterest.com/pin/create/button/?url=' . urlencode($shareUrl) . '&media=' . urlencode($shareImage) . '&description=' . urlencode($shareTitle);
        $xUrl = 'https://x.com/intent/post?text=' . $twitterText;
        $whatsappUrl = 'https://wa.me/?text=' . $whatsappText;
        $telegramUrl = 'https://t.me/share/url?url=' . urlencode($shareUrl) . '&text=' . urlencode($shareTitle);
      @endphp

      <div class="flex flex-wrap gap-3">
        <!-- Facebook -->
        <a href="{{ $facebookUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors"
           title="Bagikan ke Facebook">
          <i class="fa-brands fa-facebook-f text-lg"></i>
        </a>

        <!-- X (Twitter) -->
        <a href="{{ $xUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black text-white hover:bg-gray-800 transition-colors"
           title="Bagikan ke X">
          <i class="fa-brands fa-x-twitter text-lg"></i>
        </a>

        <!-- LinkedIn -->
        <a href="{{ $linkedinUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 text-white hover:bg-blue-600 transition-colors"
           title="Bagikan ke LinkedIn">
          <i class="fa-brands fa-linkedin-in text-lg"></i>
        </a>

        <!-- WhatsApp -->
        <a href="{{ $whatsappUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-green-500 text-white hover:bg-green-600 transition-colors"
           title="Bagikan ke WhatsApp">
          <i class="fa-brands fa-whatsapp text-lg"></i>
        </a>

        <!-- Email -->
        <a href="mailto:?subject={{ $emailSubject }}&body={{ $emailBody }}" 
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-red-500 text-white hover:bg-red-600 transition-colors"
           title="Bagikan melalui Email">
          <i class="fa-solid fa-envelope text-lg"></i>
        </a>

        <!-- Pinterest -->
        <a href="{{ $pinterestUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-red-600 text-white hover:bg-red-700 transition-colors"
           title="Bagikan ke Pinterest">
          <i class="fa-brands fa-pinterest-p text-lg"></i>
        </a>

        <!-- Telegram -->
        <a href="{{ $telegramUrl }}" 
           target="_blank" 
           rel="noopener noreferrer"
           class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-blue-400 text-white hover:bg-blue-500 transition-colors"
           title="Bagikan ke Telegram">
          <i class="fa-brands fa-telegram text-lg"></i>
        </a>

        <!-- Copy Link -->
        <button id="copyLinkBtn"
                onclick="copyToClipboard('{{ $shareUrl }}')"
                class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gray-500 text-white hover:bg-gray-600 transition-colors"
                title="Salin Tautan">
          <i class="fa-solid fa-link text-lg"></i>
        </button>
      </div>

      <!-- Notification untuk Copy -->
      <div id="copyNotification" 
           class="mt-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded hidden"
           role="alert">
        ✓ Tautan berhasil disalin ke clipboard!
      </div>
    </div>

    <div class="mt-10 pt-6 border-t">
      <a href="{{ url()->previous() }}" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-800 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Kembali
      </a>
    </div>
  </div>

  <script>
    function copyToClipboard(text) {
      navigator.clipboard.writeText(text).then(function() {
        // Tampilkan notifikasi
        const notification = document.getElementById('copyNotification');
        notification.classList.remove('hidden');
        
        // Sembunyikan notifikasi setelah 3 detik
        setTimeout(function() {
          notification.classList.add('hidden');
        }, 3000);
      }).catch(function(err) {
        alert('Gagal menyalin tautan');
      });
    }
  </script>
@endsection