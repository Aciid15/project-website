<!DOCTYPE html>
<html lang="id" class="h-full bg-white">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title', 'GTK')</title>

  {{-- Tailwind CDN (sementara) --}}
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- Alpine --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  {{-- Swiper CSS --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  {{-- x-cloak biar dropdown tidak kedip --}}
  <style>
  [x-cloak]{display:none!important}
  
  .line-clamp-2{
    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    overflow:hidden;
  }
.high-contrast {
  background-color: #000 !important;
  color: #fff !important;
}

.high-contrast a {
  color: #ffd700 !important;
}

.grayscale {
  filter: grayscale(100%);
}

  </style>

  @stack('styles')

</head>

<body class="h-full">
  <div class="min-h-full">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten halaman --}}
    <main>
      @yield('content')
    </main>

    
    {{-- Footer --}}
    @include('layouts.footer')

    {{-- accessibility --}}
    @include('partials.accessibility-widget')
    <script src="{{ asset('js/accessibility.js') }}"></script>

    


  </div>


  {{-- Tailwind Plus Elements (kalau kamu memang pakai el-dropdown / el-disclosure) --}}
  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

  {{-- Swiper JS --}}
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  @stack('scripts')
  
</body>
</html>
