<section class="bg-sky-500">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-14 lg:py-20">

    {{-- Atas: teks kiri + foto kanan --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
      {{-- Kiri --}}
      <div class="text-white">
        <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight">
          Dr. Hos Arie Rhamadhan<br class="hidden sm:block"/>
          Sibarani, S.H. M.H.
        </h2>

        <p class="mt-6 max-w-xl text-white/90 leading-relaxed text-sm sm:text-base">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
          a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged.
        </p>
      </div>

      {{-- Kanan --}}
      <div class="lg:flex lg:justify-end">
        <div class="w-full max-w-sm sm:max-sm-lg bg-white rounded-2xl shadow-xl">
          <div class="aspect-square rounded-xl bg-gray-50 overflow-hidden flex items-center justify-center">
            {{-- GANTI src sesuai file kamu --}}
            <img class="h-full w-full object-cover"
              src="{{ asset('images/pimpinan.png') }}"
              alt="Foto Pimpinan"
              class="h-full w-full object-contain"
              onerror="this.src='images/pimpinan.jpg';"
            />
          </div>
        </div>
      </div>
    </div>

    {{-- Bawah: 4 tombol --}}
    <div class="mt-12 lg:mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      {{-- Button 1 --}}
      <a href="#"
         class="group bg-white rounded-xl shadow-md px-6 py-4 flex items-center gap-4
          transition-all duration-200 ease-out
          hover:bg-sky-400 hover:shadow-lg hover:scale-[1.02]
          hover:ring-2 hover:ring-white/60 hover:ring-offset-2 hover:ring-offset-sky-400 hover:bg-gradient-to-r hover:from-sky-400 hover:to-sky-600">
        <span class="h-12 w-12 rounded-xl bg-amber-50 flex items-center justify-center">
          {{-- icon: gedung --}}
          <svg class="h-7 w-7 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 21h18"/>
            <path d="M5 21V7l7-4 7 4v14"/>
            <path d="M9 21v-8h6v8"/>
          </svg>
        </span>
        <span class="font-semibold text-sky-600 group-hover:text-white">Sejarah</span>
      </a>

      {{-- Button 2 --}}
      <a href="#"
         class="group bg-white rounded-xl shadow-md px-6 py-4 flex items-center gap-4
          transition-all duration-200 ease-out
          hover:bg-sky-400 hover:shadow-lg hover:scale-[1.02]
          hover:ring-2 hover:ring-white/60 hover:ring-offset-2 hover:ring-offset-sky-400 hover:bg-gradient-to-r hover:from-sky-400 hover:to-sky-600">
        <span class="h-12 w-12 rounded-xl bg-amber-50 flex items-center justify-center">
          {{-- icon: dokumen --}}
          <svg class="h-7 w-7 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <path d="M14 2v6h6"/>
            <path d="M8 13h8"/>
            <path d="M8 17h8"/>
          </svg>
        </span>
        <span class="font-semibold text-sky-600 group-hover:text-white">Visi &amp; Misi</span>
      </a>

      {{-- Button 3 --}}
      <a href="#"
         class="group bg-white rounded-xl shadow-md px-6 py-4 flex items-center gap-4
          transition-all duration-200 ease-out
          hover:bg-sky-400 hover:shadow-lg hover:scale-[1.02]
          hover:ring-2 hover:ring-white/60 hover:ring-offset-2 hover:ring-offset-sky-400 hover:bg-gradient-to-r hover:from-sky-400 hover:to-sky-600">
        <span class="h-12 w-12 rounded-xl bg-amber-50 flex items-center justify-center">
          {{-- icon: tas --}}
          <svg class="h-7 w-7 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M10 3h4a2 2 0 0 1 2 2v2H8V5a2 2 0 0 1 2-2z"/>
            <path d="M6 7h12l1 14H5L6 7z"/>
            <path d="M9 11v2"/>
            <path d="M15 11v2"/>
          </svg>
        </span>
        <span class="font-semibold text-sky-600 group-hover:text-white">Tugas &amp; Fungsi</span>
      </a>

      {{-- Button 4 --}}
      <a href="#"
         class="group bg-white rounded-xl shadow-md px-6 py-4 flex items-center gap-4
          transition-all duration-200 ease-out
          hover:bg-sky-400 hover:shadow-lg hover:scale-[1.02]
          hover:ring-2 hover:ring-white/60 hover:ring-offset-2 hover:ring-offset-sky-400 hover:bg-gradient-to-r hover:from-sky-400 hover:to-sky-600">
        <span class="h-12 w-12 rounded-xl bg-amber-50 flex items-center justify-center">
          {{-- icon: struktur --}}
          <svg class="h-7 w-7 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path d="M12 7v4"/>
            <path d="M6 21a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path d="M18 21a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
            <path d="M6 17v-2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2"/>
          </svg>
        </span>
        <span class="font-semibold text-sky-600 group-hover:text-white">Struktur Organisasi</span>
      </a>
    </div>

  </div>
</section>
