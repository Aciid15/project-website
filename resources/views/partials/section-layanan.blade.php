<section class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">

    {{-- Header --}}
    <div class="flex items-center gap-6">
      <h2 class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 text-4xl font-extrabold text-gray-900">Layanan Kami</h2>
      <span class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 h-1 w-20 bg-amber-400 rounded-full mt-4"></span>
    </div>

        <div class="js-reveal opacity-0 translate-y-6 transition-all duration-700 ease-out delay-300 mt-10 grid grid-cols-1 md:grid-cols-6 gap-6">
            {{-- Card 1 --}}
            <a href="{{ url('/pelayanan1') }}"
            class="group bg-white border border-sky-400 rounded-xl shadow-sm
                    flex flex-col items-center justify-center
                    w-full aspect-square px-6 text-center
                    transition-all duration-300
                    hover:shadow-lg hover:-translate-y-1">

            <!-- Icon -->
            <div class="mb-6">
              <svg class="w-10 h-10 text-sky-500 group-hover:text-sky-600"
                  fill="none" stroke="currentColor" stroke-width="1"
                  viewBox="0 0 24 24">
  <path strokeLinecap="round" strokeLinejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
</svg>

            </div>

            <!-- Text -->
            <p class="font-bold text-gray-900 uppercase text-sm line-clamp-3">
              PELAYANAN PENGADUAN
            </p>
          </a>

            {{-- Card 2 --}}
            <a href="{{ url('/pelayanan2') }}"
                        class="group bg-white border border-sky-400 rounded-xl shadow-sm
                    flex flex-col items-center justify-center
                    w-full aspect-square px-6 text-center
                    transition-all duration-300
                    hover:shadow-lg hover:-translate-y-1">

            <!-- Icon -->
            <div class="mb-6">
              <svg class="w-10 h-10 text-sky-500 group-hover:text-sky-600"
                  fill="none" stroke="currentColor" stroke-width="1"
                  viewBox="0 0 24 24">
  <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
</svg>

            </div>

            <!-- Text -->
            <p class="font-bold text-gray-900 uppercase text-sm line-clamp-3">
              pelayanan kerja sama antar instansi
            </p>
          </a>

          {{-- Card 3 --}}
            <a href="{{ url('/pelayanan3') }}"
                        class="group bg-white border border-sky-400 rounded-xl shadow-sm
                    flex flex-col items-center justify-center
                    w-full aspect-square px-6 text-center
                    transition-all duration-300
                    hover:shadow-lg hover:-translate-y-1">

            <!-- Icon -->
            <div class="mb-6">
              <svg class="w-10 h-10 text-sky-500 group-hover:text-sky-600"
                  fill="none" stroke="currentColor" stroke-width="1"
                  viewBox="0 0 24 24">
  <path strokeLinecap="round" strokeLinejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
</svg>

            </div>

            <!-- Text -->
            <p class="font-bold text-gray-900 uppercase text-sm line-clamp-3">
              Pelayanan Permohonan informasi
            </p>
          </a>

          {{-- Card 4 --}}
            <a href="{{ url('/pelayanan4') }}"
                        class="group bg-white border border-sky-400 rounded-xl shadow-sm
                    flex flex-col items-center justify-center
                    w-full aspect-square px-6 text-center
                    transition-all duration-300
                    hover:shadow-lg hover:-translate-y-1">

            <!-- Icon -->
            <div class="mb-6">
              <svg class="w-10 h-10 text-sky-500 group-hover:text-sky-600"
                  fill="none" stroke="currentColor" stroke-width="1"
                  viewBox="0 0 24 24">
  <path strokeLinecap="round" strokeLinejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
</svg>

            </div>

            <!-- Text -->
            <p class="font-bold text-gray-900 uppercase text-sm line-clamp-3">
              Pelayanan Permohonan narasumber
            </p>
          </a>

          {{-- Card 5 --}}
            <a href="{{ url('/pelayanan5') }}"
                        class="group bg-white border border-sky-400 rounded-xl shadow-sm
                    flex flex-col items-center justify-center
                    w-full aspect-square px-6 text-center
                    transition-all duration-300
                    hover:shadow-lg hover:-translate-y-1">

            <!-- Icon -->
            <div class="mb-6">
              <svg class="w-10 h-10 text-sky-500 group-hover:text-sky-600"
                  fill="none" stroke="currentColor" stroke-width="1"
                  viewBox="0 0 24 24">
  <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
</svg>

            </div>

            <!-- Text -->
            <p class="font-bold text-gray-900 uppercase text-sm line-clamp-3">
              Pelayanan peminjaman sarana prasarana
            </p>
          </a>
          {{-- Card 6 --}}
            <a href="{{ url('/pelayanan6') }}"
            class="group bg-white border border-sky-400 rounded-xl shadow-sm
                    flex flex-col items-center justify-center
                    w-full aspect-square px-6 text-center
                    transition-all duration-300
                    hover:shadow-lg hover:-translate-y-1">

            <!-- Icon -->
            <div class="mb-6">
              <svg class="w-10 h-10 text-sky-500 group-hover:text-sky-600"
                  fill="none" stroke="currentColor" stroke-width="1"
                  viewBox="0 0 24 24">
                <path strokeLinecap="round" strokeLinejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
</svg>
  

            </div>

            <!-- Text -->
            <p class="font-bold text-gray-900 uppercase text-sm line-clamp-3">
              Pelayanan fasilitasi peningkatan kompetensi pendidik dan tenaga kependidikan
            </p>
          </a>
        </div>
    </div>
</section>