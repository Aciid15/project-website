@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
<section class="">
  <section class="w-full bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">

      {{-- Breadcrumb --}}
      <nav class="mb-6">
        <ol class="flex items-center gap-2 text-sm text-gray-500">
          <li>
            <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Beranda</a>
          </li>
          <li class="text-gray-400">›</li>
          <li class="text-gray-700 font-medium">@yield('title')</li>
        </ol>
      </nav>

      {{-- Judul --}}
      <div class="flex items-center gap-4 mb-6">
        <h2 class="text-3xl font-bold text-gray-900">Struktur Organisasi</h2>
        <span class="h-1 w-16 bg-amber-400 rounded-full mt-2"></span>
      </div>

      {{-- Card Utama --}}
      <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-8">

        {{-- Struktur Organisasi --}}
        <h2 class="text-2xl font-bold text-gray-900 text-center mb-6">Struktur Organisasi</h2>

       <div class="flex justify-center mb-4">
  <div class="w-full max-w-5xl">
    <div class="flex items-center justify-center min-h-[420px]">
      <img
        src="{{ asset('images/sejarah.png') }}"
        alt="Struktur Organisasi"
        class="max-w-[760px] w-full h-auto object-contain"
        onerror="this.src='{{ asset('images/struktur.jpg') }}';"
      />
    </div>
  </div>
</div>



        {{-- Karyawan --}}
        <h2 class="text-2xl font-bold text-gray-900 text-center mt-4">Karyawan KGTK</h2>

        <div class="mt-8"
             x-data="{
                open:false,
                selected:null,
                show(emp){
                  this.selected = emp;
                  this.open = true;
                  document.body.classList.add('overflow-hidden');
                },
                close(){
                  this.open = false;
                  this.selected = null;
                  document.body.classList.remove('overflow-hidden');
                }
             }">

          {{-- GRID KARYAWAN --}}
          <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-8 mt-6">
            @forelse($employees as $emp)
              @php
                $photo = $emp->photo ? asset('storage/'.$emp->photo) : asset('images/pimpinan.jpg');
              @endphp

 @php
  $photo = $emp->photo ? asset('storage/'.$emp->photo) : asset('images/pimpinan.jpg');

  $payload = [
    'id'       => $emp->id,
    'name'     => $emp->name,
    'position' => $emp->position,
    'nip'      => $emp->nip,
    'unit'     => $emp->unit,
    'email'    => $emp->email,
    'phone'    => $emp->phone,
    'bio'      => $emp->bio,
    'photo'    => $photo,
  ];
@endphp

<button type="button"
        class="group text-left"
        data-employee='@json($payload)'
        @click="show(JSON.parse($el.dataset.employee))">


                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition w-[170px] sm:w-[190px] mx-auto">
  <div class="h-[180px] sm:h-[200px] bg-gray-50 overflow-hidden flex items-center justify-center">
    <img src="{{ $photo }}"
         alt="{{ $emp->name }}"
         class="w-full h-full object-cover group-hover:scale-[1.03] transition duration-300">
  </div>

  <div class="p-2">
    <div class="text-xs font-semibold text-gray-900 leading-snug line-clamp-2">
      {{ $emp->name }}
    </div>
    <div class="text-[11px] text-gray-500 mt-1 line-clamp-1">
      {{ $emp->position ?? '—' }}
    </div>
  </div>
</div>


              </button>
            @empty
              <div class="col-span-full text-center text-gray-500 py-10">
                Belum ada data karyawan.
              </div>
            @endforelse
          </div>

          {{-- MODAL DETAIL --}}
          <div x-show="open"
               x-transition.opacity
               class="fixed inset-0 z-50 flex items-center justify-center p-4"
               x-cloak
               @keydown.escape.window="close()">

            <div class="absolute inset-0 bg-black/50" @click="close()"></div>

            <div class="relative w-full max-w-2xl bg-white rounded-2xl shadow-xl border border-gray-200 overflow-hidden"
                 x-transition.scale>

              <div class="flex items-start justify-between gap-4 px-5 py-4 border-b">
                <div>
                  <h2 class="text-xl font-bold text-gray-900" x-text="selected?.name"></h2>
                  <p class="text-sm text-gray-500" x-text="selected?.position ?? '-'"></p>
                </div>

                <button type="button"
                        class="w-9 h-9 rounded-full hover:bg-gray-100 flex items-center justify-center"
                        @click="close()"
                        aria-label="Tutup">✕</button>
              </div>

              <div class="p-5 grid sm:grid-cols-[200px_1fr] gap-5">
                <div class="bg-gray-50 rounded-xl overflow-hidden flex items-center justify-center">
                  <img :src="selected?.photo" :alt="selected?.name" class="w-full h-full object-contain">
                </div>

                <div class="space-y-3 text-sm">
                  <div class="flex gap-3">
                    <div class="w-28 text-gray-500">Unit</div>
                    <div class="font-medium text-gray-900" x-text="selected?.unit ?? '-'"></div>
                  </div>

                  <div class="flex gap-3">
                    <div class="w-28 text-gray-500">NIP</div>
                    <div class="font-medium text-gray-900" x-text="selected?.nip ?? '-'"></div>
                  </div>

                  <div class="flex gap-3">
                    <div class="w-28 text-gray-500">Email</div>
                    <div class="font-medium text-gray-900 break-all" x-text="selected?.email ?? '-'"></div>
                  </div>

                  <div class="flex gap-3">
                    <div class="w-28 text-gray-500">Telepon</div>
                    <div class="font-medium text-gray-900" x-text="selected?.phone ?? '-'"></div>
                  </div>

                  <div class="pt-3 border-t">
                    <div class="text-gray-500 mb-1">Bio</div>
                    <div class="text-gray-900 leading-7 whitespace-pre-line" x-text="selected?.bio ?? '-'"></div>
                  </div>
                </div>
              </div>

              <div class="px-5 pb-5">
                <button class="w-full py-2.5 rounded-xl bg-gray-900 text-white hover:bg-gray-800"
                        @click="close()">Tutup</button>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
</section>
@endsection
