@extends('layouts.app')

@section('title', $news->title)

@section('content')
  <div class="max-w-[980px] mx-auto px-4 py-12">
    {{-- Judul --}}
    <h1 class="text-[clamp(32px,4vw,56px)] font-bold leading-[1.05] tracking-tight mb-4">
      {{ $news->title }}
    </h1>

    {{-- Meta --}}
    <div class="flex flex-wrap items-center gap-3 text-sm text-gray-500 mb-6">
      <div class="flex items-center gap-2">
        <i class="fa-regular fa-calendar"></i>
        <span>{{ optional($news->published_at)->translatedFormat('d F Y') ?? '-' }}</span>
      </div>
    </div>

    {{-- Hero Image --}}
    @if($news->image)
      <div class="mb-7 flex justify-center">
        <div class="w-full max-w-[720px] rounded-2xl overflow-hidden bg-gray-100 shadow-lg">
          <img
            src="{{ asset('storage/'.$news->image) }}"
            class="w-full h-[220px] sm:h-[280px] md:h-[340px] object-cover block"
            alt="{{ $news->title }}"
            loading="lazy"
          >
        </div>
      </div>
    @endif

    {{-- Isi --}}
    <article class="prose max-w-none prose-p:leading-8 break-words [overflow-wrap:anywhere]
               prose-img:max-w-full prose-img:h-auto
               prose-iframe:max-w-full
               prose-table:block prose-table:overflow-x-auto">
      {!! $news->content !!}
    </article>

    <!-- Social Share Section - CENTERED -->
    <div class="mt-12 pt-8 border-t border-gray-300">
      <div class="flex flex-col items-center">
        <h3 class="text-lg font-semibold text-gray-800 mb-6">Bagikan ke Media Sosial</h3>
        
        @php
          $shareUrl = url()->current();
          $shareTitle = $news->title;
          $shareImage = asset('storage/' . $news->image);
          $shareDescription = Str::limit(strip_tags($news->content), 100);
          
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

        <div class="flex flex-wrap gap-4 justify-center">
          <!-- Facebook -->
          <a href="{{ $facebookUrl }}" 
             target="_blank" 
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-blue-600 text-white hover:bg-blue-700 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan ke Facebook">
            <i class="fa-brands fa-facebook-f text-xl"></i>
          </a>

          <!-- X (Twitter) -->
          <a href="{{ $xUrl }}" 
             target="_blank" 
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-black text-white hover:bg-gray-800 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan ke X">
            <i class="fa-brands fa-x-twitter text-xl"></i>
          </a>

          <!-- LinkedIn -->
          <a href="{{ $linkedinUrl }}" 
             target="_blank" 
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-blue-500 text-white hover:bg-blue-600 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan ke LinkedIn">
            <i class="fa-brands fa-linkedin-in text-xl"></i>
          </a>

          <!-- WhatsApp -->
          <a href="{{ $whatsappUrl }}" 
             target="_blank" 
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-green-500 text-white hover:bg-green-600 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan ke WhatsApp">
            <i class="fa-brands fa-whatsapp text-xl"></i>
          </a>

          <!-- Email -->
          <a href="mailto:?subject={{ $emailSubject }}&body={{ $emailBody }}" 
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-red-500 text-white hover:bg-red-600 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan melalui Email">
            <i class="fa-solid fa-envelope text-xl"></i>
          </a>

          <!-- Pinterest -->
          <a href="{{ $pinterestUrl }}" 
             target="_blank" 
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-red-600 text-white hover:bg-red-700 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan ke Pinterest">
            <i class="fa-brands fa-pinterest-p text-xl"></i>
          </a>

          <!-- Telegram -->
          <a href="{{ $telegramUrl }}" 
             target="_blank" 
             rel="noopener noreferrer"
             class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-blue-400 text-white hover:bg-blue-500 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
             title="Bagikan ke Telegram">
            <i class="fa-brands fa-telegram text-xl"></i>
          </a>

          <!-- Copy Link -->
          <button id="copyLinkBtn"
                  onclick="copyToClipboard('{{ $shareUrl }}')"
                  class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-gray-500 text-white hover:bg-gray-600 hover:scale-110 transition-all duration-300 shadow-md hover:shadow-lg"
                  title="Salin Tautan">
            <i class="fa-solid fa-link text-xl"></i>
          </button>
        </div>

        <!-- Notification untuk Copy -->
        <div id="copyNotification" 
             class="mt-6 p-3 bg-green-100 border border-green-400 text-green-700 rounded-lg hidden"
             role="alert">
          <i class="fa-solid fa-check mr-2"></i>Tautan berhasil disalin ke clipboard!
        </div>
      </div>
    </div>

    {{-- Back --}}
    <div class="mt-10 pt-6 border-t">
      <a href="{{ route('news.index') }}" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-800 transition-colors">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Kembali ke Berita
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