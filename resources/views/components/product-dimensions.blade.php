@props([
    'width' => '6 cm',
    'height' => '11 cm',
    'depth' => '4.5 cm',
])

<!-- Ürün Ölçüleri -->
<div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 sm:p-4 border border-gray-200">
    <h3 class="text-black text-base sm:text-lg font-semibold mb-3 flex items-center">
        <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
        </svg>
        Ürün Ölçüleri
    </h3>

    <div class="flex flex-col space-y-2 sm:grid sm:grid-cols-3 sm:gap-3 sm:space-y-0 text-xs sm:text-sm">
        <div class="bg-blue-50 p-2 sm:p-3 rounded-lg flex justify-between items-center sm:block sm:text-center">
            <div class="text-blue-600 font-semibold">Genişlik</div>
            <div class="text-gray-700 font-medium text-sm sm:text-base">{{ $width }}</div>
        </div>
        <div class="bg-green-50 p-2 sm:p-3 rounded-lg flex justify-between items-center sm:block sm:text-center">
            <div class="text-green-600 font-semibold">Yükseklik</div>
            <div class="text-gray-700 font-medium text-sm sm:text-base">{{ $height }}</div>
        </div>
        <div class="bg-purple-50 p-2 sm:p-3 rounded-lg flex justify-between items-center sm:block sm:text-center">
            <div class="text-purple-600 font-semibold">Derinlik</div>
            <div class="text-gray-700 font-medium text-sm sm:text-base">{{ $depth }}</div>
        </div>
    </div>
</div>
