<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>GTK</title>
</head>

<body class="h-full">

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">

        <!-- Left -->
        <div class="flex items-center">
          <div class="shrink-0">
            <!-- Lebar tetap (jika logo landscape) -->
          <img src="/images/KGTK.png" class="w-24 h-auto object-contain sm:w-32" alt="Logo">
        </div>
          <div class="hidden md:block ml-10">
          <div class="flex items-baseline space-x-4">
    
     <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white hover:bg-gray-700 inline-flex items-center gap-1">
                  Profile
                </button>
                <div x-show="open" 
                     @click="open = false"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Struktur Organisasi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tugas & Fungsi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil Pimpinan</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bidang & UPT</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kontak</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lokasi</a>
                </div>
      </div>

              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Program</a>

              <!-- PUBLIKASI DROPDOWN -->
              <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white inline-flex items-center gap-1">
                  Publikasi
                </button>
                <div x-show="open" 
                     @click="open = false"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Berita</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Artikel</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Galeri Foto</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Galeri Video</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengumuman</a>
                </div>
              </div>

              <!-- PPID DROPDOWN -->
              <div x-data="{ open: false }" @click.away="open = false" class="relative">
                <button @click="open = !open" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white inline-flex items-center gap-1">
                  PPID
                </button>
                <div x-show="open" 
                     @click="open = false"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute left-0 mt-2 w-56 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil PPID</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informasi Berkala</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informasi Serta Merta</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informasi Setiap Saat</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Permohonan Informasi</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Laporan PPID</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SOP & Maklumat</a>
                </div>
              </div>

              <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">FAQ</a>
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
        <a class="block rounded-md bg-gray-900 px-3 py-2 text-white">Dashboard</a>
        <a class="block rounded-md px-3 py-2 text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
        <a class="block rounded-md px-3 py-2 text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
      </div>
    </el-disclosure>
  </nav>

  <!-- <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6">
      <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
    </div>
  </header> -->

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6">
      <!-- content -->
    </div>
  </main>
</div>

<!-- WAJIB: Tailwind Plus Elements -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>
</html>
