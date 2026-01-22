<!-- Accessibility Widget -->
<div id="accessibility-widget" class="fixed right-4 bottom-6 z-50">
    <!-- Toggle Button -->
    <button id="accessibility-toggle"
        class="w-14 h-14 rounded-full bg-sky-500 text-white shadow-lg flex items-center justify-center text-xl">
        <i class="fa-solid fa-universal-access"></i>
    </button>

    <!-- Panel -->
    <div id="accessibility-panel"
        class="hidden mt-3 w-48 bg-white rounded-xl shadow-lg border p-4 space-y-2 text-sm">

        <button onclick="toggleContrast()"
            class="w-full px-3 py-2 bg-gray-100 rounded hover:bg-gray-200">
            Kontras Tinggi
        </button>

        <button onclick="toggleGrayscale()"
            class="w-full px-3 py-2 bg-gray-100 rounded hover:bg-gray-200">
            Grayscale
        </button>

        <button onclick="fontIncrease()"
            class="w-full px-3 py-2 bg-gray-100 rounded hover:bg-gray-200">
            Perbesar Teks
        </button>

        <button onclick="fontReset()"
            class="w-full px-3 py-2 bg-gray-100 rounded hover:bg-gray-200">
            Reset Teks
        </button>
    </div>
</div>
