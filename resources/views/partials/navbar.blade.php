<nav class="bg-white-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">

        <!-- Left -->
        <div class="flex items-center"> 
          <div class="shrink-0">
            <!-- Lebar tetap (jika logo landscape) -->
            <a href="{{ route('home') }}" class="shrink-0">
                <img src="{{ asset('images/KGTK.png') }}"
                    class="w-24 h-auto object-contain sm:w-32 cursor-pointer"
                    alt="Logo">
            </a>

        </div>
          <div class="hidden md:block ml-24 items-center">
          <div class="flex items-baseline space-x-7">
    
              <div x-data="{ open: false }"
                  @mouseenter="open = true"
                  @mouseleave="open = false"
                  class="relative">
                
                <button class="rounded-md px-3 py-2 text-sm font-medium text-white-800  
                transition-transform duration-200 ease-out
                hover:bg-sky-400 hover:text-white inline-flex items-center gap-1 hover:scale-[1.02]">
                Profile
                <svg class="w-4 h-4 text-current transition-transform duration-200 ease-out group-hover:rotate-180"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                        clip-rule="evenodd"/>
                </svg>
                </button>



                <div x-show="open"
                    x-cloak
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="transform opacity-0 translate-y-1"
                    x-transition:enter-end="transform opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-300"
                    x-transition:leave-start="transform opacity-100 translate-y-0"
                    x-transition:leave-end="transform opacity-0 translate-y-1"
                    class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 py-1">
                  
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Sejarah</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Visi & Misi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Struktur Organisasi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Tugas & Fungsi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Profil Pimpinan</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Bidang & UPT</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Kontak</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Lokasi</a>
                </div>
              </div>


              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white-800  
                transition-transform duration-200 ease-out
                hover:bg-sky-400 hover:text-white inline-flex items-center gap-1 hover:scale-[1.02]">Program</a>

              <!-- PUBLIKASI DROPDOWN -->
              <div x-data="{ open: false }"
                  @mouseenter="open = true"
                  @mouseleave="open = false"
                  class="relative">
                
                <button class="rounded-md px-3 py-2 text-sm font-medium text-white-800  
                transition-transform duration-200 ease-out
                hover:bg-sky-400 hover:text-white inline-flex items-center gap-1 hover:scale-[1.02]">
                  Publikasi
                  <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd"/>
                  </svg>
                </button>
                <div x-show="open" 
                     @click="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="transform opacity-0 translate-y-1"
                    x-transition:enter-end="transform opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-300"
                    x-transition:leave-start="transform opacity-100 translate-y-0"
                    x-transition:leave-end="transform opacity-0 translate-y-1"
                     class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Berita</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Artikel</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Galeri Foto</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Galeri Video</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Pengumuman</a>
                </div>
              </div>

              <!-- PPID DROPDOWN -->
              <div x-data="{ open: false }"
                  @mouseenter="open = true"
                  @mouseleave="open = false"
                  class="relative">
                
                <button class="rounded-md px-3 py-2 text-sm font-medium text-white-800  
                transition-transform duration-200 ease-out
                hover:bg-sky-400 hover:text-white inline-flex items-center gap-1 hover:scale-[1.02]">
                  PPID
                  <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z" clip-rule="evenodd"/>
                  </svg>
                </button>
                <div x-show="open" 
                     @click="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="transform opacity-0 translate-y-1"
                    x-transition:enter-end="transform opacity-100 translate-y-0"
                    x-transition:leave="transition ease-out duration-300"
                    x-transition:leave-start="transform opacity-100 translate-y-0"
                    x-transition:leave-end="transform opacity-0 translate-y-1"
                     class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100" >Profil PPID</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Informasi Berkala</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Informasi Serta Merta</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Informasi Setiap Saat</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Permohonan Informasi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">Laporan PPID</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 transition-transform duration-200 ease-out hover:scale-[1.02] hover:bg-gray-100">SOP & Maklumat</a>
                </div>
              </div>

              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white-800  
                transition-transform duration-200 ease-out
                hover:bg-sky-400 hover:text-white inline-flex items-center gap-1 hover:scale-[1.02]">FAQ</a>
            </div>
          </div>
        </div>

        <!-- Right -->
        <div class="hidden md:flex items-center space-x-4">
          <button class="rounded-full p-1 text-gray-400 hover:text-white">
            🔔
          </button>

          <div class="relative">
            <el-dropdown>
              <button class="flex items-center rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop"
                     class="size-8 rounded-full" alt="Profile">
              </button>

              <el-menu anchor="bottom end" popover
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>

        <!-- Mobile button -->
        <div class="md:hidden">
          <button command="--toggle" commandfor="mobile-menu"
                  class="rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white">
            ☰
          </button>
        </div>

      </div>
    </div>

      <!-- Mobile menu -->
      <el-disclosure id="mobile-menu" hidden class="md:hidden [&:not([hidden])]:block">
        <div class="space-y-1 px-2 pb-3 pt-2">
          
          <!-- Profile with Dropdown -->
          <div x-data="{ open: false }">
            <button @click="open = !open" class="w-full text-left block rounded-md bg-gray-900 px-3 py-2 text-white">
              Profile
            </button>
            <div x-show="open" x-transition class="ml-4 mt-1 space-y-1">
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Sejarah</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Visi & Misi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Struktur Organisasi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Tugas & Fungsi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Profil Pimpinan</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Bidang & UPT</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Kontak</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Lokasi</a>
            </div>
          </div>
          
          <div x-data="{ open: false }">
            <button @click="open = !open" class="w-full text-left block rounded-md px-3 py-2 text-gray-300 hover:bg-white/5 hover:text-white">
              Program
            </button>
            <div x-show="open" x-transition class="ml-4 mt-1 space-y-1">
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Sejarah</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Visi & Misi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Struktur Organisasi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Tugas & Fungsi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Profil Pimpinan</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Bidang & UPT</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Kontak</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Lokasi</a>
            </div>
          </div>
          
          <!-- Publikasi with Dropdown -->
          <div x-data="{ open: false }">
            <button @click="open = !open" class="w-full text-left block rounded-md px-3 py-2 text-gray-300 hover:bg-white/5 hover:text-white">
              Publikasi
            </button>
            <div x-show="open" x-transition class="ml-4 mt-1 space-y-1">
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Berita</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Artikel</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Galeri Foto</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Galeri Video</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Pengumuman</a>
            </div>
          </div>
          
          <!-- PPID with Dropdown -->
          <div x-data="{ open: false }">
            <button @click="open = !open" class="w-full text-left block rounded-md px-3 py-2 text-gray-300 hover:bg-white/5 hover:text-white">
              PPID
            </button>
            <div x-show="open" x-transition class="ml-4 mt-1 space-y-1">
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Profil PPID</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Informasi Berkala</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Informasi Serta Merta</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Informasi Setiap Saat</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Permohonan Informasi</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">Laporan PPID</a>
              <a href="#" class="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white">SOP & Maklumat</a>
            </div>
          </div>
          
          <a href="#" class="block rounded-md px-3 py-2 text-gray-300 hover:bg-white/5 hover:text-white">FAQ</a>
          
        </div>
      </el-disclosure>
  </nav>