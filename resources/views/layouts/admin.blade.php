<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Kemen Dikdasmen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside 
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-blue-900 text-white transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0"
        >
             <!-- Logo -->
            <div class="flex items-center h-20 px-4 bg-blue-950">
                <div class="flex items-center gap-3 w-full">
                    <div class="flex-shrink-0">
                        <img src="/images/KGTK.png" alt="Logo" class="h-12 w-12 object-contain">
                    </div>
                    <div class="flex-1 min-w-0">
                        <span class="font-bold text-base block truncate">Admin Panel</span>
                    </div>
                </div>
                <!-- Close button (mobile only) -->
                <button 
                    @click="sidebarOpen = false"
                    class="lg:hidden text-white hover:text-gray-300"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-2">
                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}" 
                   class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>

                <!-- Beranda -->
                <a href="{{ route('home') }}" 
                   class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                    Beranda Website
                </a>

                <!-- Banner Management -->
                <a href="{{ route('admin.banners.index') }}" 
                   class="flex items-center px-4 py-3 text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200 {{ request()->routeIs('admin.banners.*') ? 'bg-blue-800 text-white' : '' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Kelola Banner
                </a>

                <!-- Berita & Publikasi -->
                <div x-data="{ open: false }">
                    <button 
                        @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                            Berita & Publikasi
                        </div>
                        <svg 
                            :class="open ? 'rotate-180' : ''"
                            class="w-4 h-4 transition-transform duration-200" 
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <div 
                        x-show="open"
                        x-collapse
                        class="ml-8 mt-2 space-y-2"
                    >
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                            Semua Berita
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                            Tambah Berita
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                            Kategori
                        </a>
                    </div>
                </div>

                <!-- Layanan -->
                <div x-data="{ open: false }">
                    <button 
                        @click="open = !open"
                        class="w-full flex items-center justify-between px-4 py-3 text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Layanan
                        </div>
                        <svg 
                            :class="open ? 'rotate-180' : ''"
                            class="w-4 h-4 transition-transform duration-200" 
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    
                    <div 
                        x-show="open"
                        x-collapse
                        class="ml-8 mt-2 space-y-2"
                    >
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                            Semua Layanan
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-300 rounded-lg hover:bg-blue-800 hover:text-white transition duration-200">
                            Tambah Layanan
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Logout Button -->
            <div class="px-4 py-4 border-t border-blue-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-3 text-gray-300 rounded-lg hover:bg-red-600 hover:text-white transition duration-200">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <!-- Top Navbar -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <!-- Mobile menu button -->
                    <button 
                        @click="sidebarOpen = true"
                        class="lg:hidden text-gray-500 hover:text-gray-700"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>

                    <h1 class="text-2xl font-bold text-gray-800">@yield('page-title', 'Dashboard')</h1>

                    <!-- User Profile -->
                    <div class="flex items-center space-x-4">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->role }}</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=1e40af&color=fff" 
                             alt="Profile" 
                             class="w-10 h-10 rounded-full">
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Overlay untuk mobile -->
    <div 
        x-show="sidebarOpen"
        @click="sidebarOpen = false"
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-40 bg-black bg-opacity-50 lg:hidden"
        style="display: none;"
    ></div>
</body>
</html>