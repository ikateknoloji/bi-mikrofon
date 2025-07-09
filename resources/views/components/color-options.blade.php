@php
    $colors = [
        ['name' => 'Siyah', 'code' => '#000000', 'value' => 'black'],
        ['name' => 'Beyaz', 'code' => '#FFFFFF', 'value' => 'white'],
        ['name' => 'Kırmızı', 'code' => '#DC2626', 'value' => 'red'],
        ['name' => 'Mavi', 'code' => '#2563EB', 'value' => 'blue'],
        ['name' => 'Yeşil', 'code' => '#16A34A', 'value' => 'green'],
        ['name' => 'Sarı', 'code' => '#EAB308', 'value' => 'yellow'],
        ['name' => 'Turuncu', 'code' => '#EA580C', 'value' => 'orange'],
        ['name' => 'Mor', 'code' => '#9333EA', 'value' => 'purple'],
        ['name' => 'Pembe', 'code' => '#EC4899', 'value' => 'pink'],
        ['name' => 'Gri', 'code' => '#6B7280', 'value' => 'gray'],
        ['name' => 'Lacivert', 'code' => '#1E40AF', 'value' => 'navy'],
        ['name' => 'Bordo', 'code' => '#991B1B', 'value' => 'maroon'],
    ];
@endphp

<div class="bg-white/90 backdrop-blur-sm rounded-lg p-3 sm:p-4 border border-gray-200">
    <h3 class="text-black text-base sm:text-lg font-semibold mb-3 flex items-center">
        Renk Seçenekleri
    </h3>

    <div class="grid grid-cols-4 sm:grid-cols-6 gap-2 mb-3">
        @foreach ($colors as $color)
            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg border-2 border-gray-300 shadow-md"
                style="background-color: {{ $color['code'] }}" title="{{ $color['name'] }}">
            </div>
        @endforeach
    </div>
</div>
