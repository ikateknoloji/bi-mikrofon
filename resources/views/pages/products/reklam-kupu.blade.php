@extends('layouts.app')

@section('title', 'Reklam Küpü | Bi Mikrofon Süngeri')
@section('content')
    @php
        use Jenssegers\Agent\Agent;

        // SEO uyumlu dosya adlarıyla 6 adet Mikrofon Reklam Küpü
        $images = [];
        for ($i = 1; $i <= 6; $i++) {
            $images[] = [
                'src' => "/products/reklam-kupu/mikrofon-reklam-kupu-{$i}.jpg",
                'hover' => "/second/reklam-kupu/mikrofon-reklam-kupu-{$i}.jpg",
                'alt' => 'Mikrofon Reklam Küpü',
            ];
        }
        $initial = $images[0]['hover'];
        $agent = new Agent();

    @endphp

    <div x-data="{
        selectedImage: '{{ $initial }}',
        selectedColor: 'black'
    }" class="grid grid-cols-12 max-h-[calc(100vh-100px)] overflow-hidden">

        <x-product.left-content class="space-y-4 p-4">

            <section
                class="col-span-1 md:col-span-3 lg:mx-16 relative flex md:flex-row flex-col-reverse font-outfit text-[#121990] bg-contain bg-center rounded-md overflow-hidden"
                style="background-image: url('/assets/images/bg/bg-banner.png')">

                <div class="space-y-7 lg:p-8 w-full">
                    <h2 class="text-black text-2xl sm:text-3xl font-semibold pt-3">
                        Reklam Küpü Baskı
                    </h2>

                    <p class="text-black text-sm sm:text-base font-normal max-w-xl leading-6">
                        Logonuzla özelleştirilmiş reklam küpleriyle yayınlarınızı, tanıtımlarınızı ve sosyal medya
                        içeriklerinizi profesyonel hale getirin. Hızlı üretim, uygun fiyat ve 6 farklı renk seçeneğiyle
                        hizmetinizdeyiz.
                    </p>


                    <x-product-dimensions width="7.5 cm" height="6 cm" depth="3.5 cm" />

                    <!-- Renk Seçenekleri -->
                    <x-color-options />

                    <!-- İletişim Butonları -->
                    <x-contact-buttons />

                    <!-- Ek Bilgiler -->
                    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3">
                        <div class="flex items-start">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-600 mt-0.5 mr-2 flex-shrink-0" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-xs sm:text-sm text-yellow-800">
                                <strong>Özel Avantaj:</strong> Reklam küpleri 4 farklı yüzeyde logo baskısı imkanı sunar.
                                Maksimum marka görünürlüğü için idealdir.
                            </div>
                        </div>
                    </div>
                </div>

                <img src="/products/reklam-kupu/mikrofon-reklam-kupu-6.jpg"
                    alt="Logo baskılı reklam küpü - özelleştirilmiş reklam küpü modelleri"
                    class="w-64 sm:w-64 object-contain rounded-r-md" loading="lazy" width="300" height="350">
            </section>

            @foreach ($images as $img)
                <img src="{{ $img['src'] }}" alt="{{ $img['alt'] }}"
                    class="w-full h-60 sm:h-72 object-cover cursor-pointer rounded-lg hover:shadow-lg transition-all duration-300 border-2 hover:border-blue-300"
                    x-on:click="selectedImage='{{ $img['hover'] }}'" />
            @endforeach

        </x-product.left-content>

        @if (!$agent->isMobile())
            <x-product.right-content class="flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100">
                <template x-for="src in [selectedImage]" :key="src">
                    <img :src="src" :alt="'Seçilen ürün: ' + src"
                        x-transition:enter="transition-all duration-500" x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" />
                </template>
            </x-product.right-content>
        @endif

    </div>

    <!-- Custom Styles -->
    <style>
        @media (max-width: 640px) {
            .grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 641px) {
            .sm\:grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr));
            }

            .sm\:grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        /* Smooth color transition */
        button[style*="background-color"] {
            transition: all 0.2s ease-in-out;
        }

        /* Hover effect for color buttons */
        button[style*="background-color"]:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Cube-like rounded corners */
        .rounded-md {
            border-radius: 0.375rem;
        }
    </style>

@endsection
