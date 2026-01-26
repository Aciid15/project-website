<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<footer class="bg-sky-500 text-white">
    <!-- Garis pembatas -->
    <div class="border-t border-white/30 py-4 text-center text-sm"></div>
    
    <div class="max-w-7xl mx-auto px-6 pt-10 pb-5 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Logo & Identitas -->
        <div>
            <h4 class="font-semibold mb-4">Mitra Kami</h4>
            <div class="flex flex-wrap gap-4 items-center">
                <!-- Logo 1 -->
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/KGTK.png') }}" alt="Logo KGTK" class="h-12 object-contain">
                </div>
                <!-- Logo 2 -->
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/pbus.png') }}" alt="Logo 2" class="h-12 object-contain">
                </div>
                <!-- Logo 3 -->
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/ramah.png') }}" alt="Logo 3" class="h-12 object-contain">
                </div>
            </div>
        </div>

        <!-- Tentang Kami -->
        <div>
            <h4 class="font-semibold mb-1">Tentang Kami</h4>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:underline">Sejarah</a></li>
                <li><a href="#" class="hover:underline">Visi & Misi</a></li>
                <li><a href="#" class="hover:underline">Tugas & Fungsi</a></li>
                <li><a href="#" class="hover:underline">Struktur & Organisasi</a></li>
            </ul>
        </div>

        <!-- Kontak -->
        <div>
            <h4 class="font-semibold mb-1">Kontak Kami</h4>
            <p class="text-sm leading-relaxed">
                Kantor Guru dan Tenaga Kependidikan,<br>
                Kemendikdasmen<br><br>
                Kompleks BPMP Provinsi Kepulauan Riau, Jalan Tata Bumi KM 20, Ceruk Ijuk, Kecamatan Toapaya, Kabupaten Bintan, Kepulauan Riau 29125
            </p>
            <p class="mt-2 text-sm">
                Kontak CS: +62 892 345 678
            </p>
        </div>
    </div>

    <!-- Sosial Media -->
    <div class="flex justify-center gap-6 py-2">
        <a href="https://www.instagram.com/kgtkkepri/" class="hover:opacity-80 transition-opacity">
            <i class="fa-brands fa-instagram text-xl"></i>
        </a>
        <a href="https://www.facebook.com/kgtkkepri/" class="hover:opacity-80 transition-opacity">
            <i class="fa-brands fa-facebook text-xl"></i>
        </a>
        <a href="https://www.youtube.com/@kgtkkepri" class="hover:opacity-80 transition-opacity">
            <i class="fa-brands fa-youtube text-xl"></i>
        </a>
    </div>

    <!-- Copyright -->
    <div class="border-t border-white/30 py-4 text-center text-sm">
        Copyright © 2026 Kantor Guru dan Tenaga Kependidikan Kepulauan Riau
    </div>
</footer>