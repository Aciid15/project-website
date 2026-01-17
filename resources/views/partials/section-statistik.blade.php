<section class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 bg-gray-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">

    {{-- Header --}}
    <div class="flex items-center gap-6">
      <h2 class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 text-4xl font-extrabold text-gray-900">Statistik Live</h2>
      <span class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 h-1 w-36 bg-amber-400 rounded-full mt-4"></span>
    </div>

    {{-- Kartu angka --}}
    <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      {{-- Card 1 --}}
      <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 rounded-2xl bg-sky-600 text-white p-6 shadow-md">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-semibold opacity-90">Total Guru Aktif</p>
            <p class="mt-2 text-4xl font-extrabold tracking-tight">2.200</p>
          </div>
          <div class="h-12 w-12 rounded-xl bg-white/15 flex items-center justify-center">
            {{-- icon users --}}
            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
              <path d="M16 11c1.66 0 3-1.79 3-4s-1.34-4-3-4-3 1.79-3 4 1.34 4 3 4zM8 11c1.66 0 3-1.79 3-4S9.66 3 8 3 5 4.79 5 7s1.34 4 3 4z"/>
              <path d="M16 13c-2.33 0-7 1.17-7 3.5V20h14v-3.5c0-2.33-4.67-3.5-7-3.5zM8 13c-.29 0-.62.02-.97.05C4.61 13.3 2 14.41 2 16.5V20h6v-3.5c0-1.21.56-2.21 1.5-2.97C8.98 13.18 8.41 13 8 13z"/>
            </svg>
          </div>
        </div>
      </div>

      {{-- Card 2 --}}
      <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 rounded-2xl bg-emerald-500 text-white p-6 shadow-md ring-2 ring-sky-600/40">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-semibold opacity-90">Guru Tersertifikasi</p>
            <p class="mt-2 text-4xl font-extrabold tracking-tight">1.350</p>
          </div>
          <div class="h-12 w-12 rounded-xl bg-white/15 flex items-center justify-center">
            {{-- icon badge --}}
            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2l3 5 6 1-4 4 1 6-6-3-6 3 1-6-4-4 6-1 3-5z"/>
            </svg>
          </div>
        </div>
      </div>

      {{-- Card 3 --}}
      <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 rounded-2xl bg-amber-500 text-white p-6 shadow-md">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-semibold opacity-90">Sekolah Terdaftar</p>
            <p class="mt-2 text-4xl font-extrabold tracking-tight">482</p>
          </div>
          <div class="h-12 w-12 rounded-xl bg-white/15 flex items-center justify-center">
            {{-- icon building --}}
            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
              <path d="M3 21h18v-2H3v2zm2-4h14V3H5v14zm2-2V5h10v10H7z"/>
            </svg>
          </div>
        </div>
      </div>

      {{-- Card 4 --}}
      <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 rounded-2xl bg-rose-500 text-white p-6 shadow-md">
        <div class="flex items-start justify-between">
          <div>
            <p class="text-sm font-semibold opacity-90">Tenaga Kependidikan</p>
            <p class="mt-2 text-4xl font-extrabold tracking-tight">869</p>
          </div>
          <div class="h-12 w-12 rounded-xl bg-white/15 flex items-center justify-center">
            {{-- icon clipboard --}}
            <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor">
              <path d="M16 4h-1.18C14.4 2.84 13.3 2 12 2s-2.4.84-2.82 2H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-4-1c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>

    {{-- Panel chart/map --}}
    <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 mt-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
      {{-- Pie --}}
      <div class="bg-white rounded-2xl shadow-md p-6">
        <h3 class="font-semibold text-gray-800">Status Kepegawaian Guru</h3>
        <div class="mt-4 rounded-xl bg-gray-50 overflow-hidden">
          <img
            src="{{ asset('images/stat-pie.png') }}"
            alt="Pie chart"
            class="w-full h-64 object-contain"
            onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Pie+Chart';"
          />
        </div>
      </div>

      {{-- Bar --}}
      <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 bg-white rounded-2xl shadow-md p-6">
        <h3 class="font-semibold text-gray-800">Sebaran Jenjang Pendidikan</h3>
        <div class="mt-4 rounded-xl bg-gray-50 overflow-hidden">
          <img
            src="{{ asset('images/stat-bar.png') }}"
            alt="Bar chart"
            class="w-full h-64 object-contain"
            onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Bar+Chart';"
          />
        </div>
      </div>

      {{-- Map --}}
      <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 bg-white rounded-2xl shadow-md p-6">
        <h3 class="font-semibold text-gray-800">Sebaran Guru per Wilayah</h3>
        <div class="mt-4 rounded-xl bg-gray-50 overflow-hidden">
          <img
            src="{{ asset('images/stat-map.png') }}"
            alt="Map"
            class="w-full h-64 object-cover"
            onerror="this.src='https://dummyimage.com/800x500/e5e7eb/111827&text=Map';"
          />
        </div>
      </div>
    </div>

  </div>
</section>
