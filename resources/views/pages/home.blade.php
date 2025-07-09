@extends('layouts.app')

@section('title', 'Logo Baskılı Mikrofon Süngeri | Bi mikrofon Süngeri')


@push('head')
    <!-- Open Graph -->
    <meta property="og:title" content="Logo Baskılı Mikrofon Süngerleri | Bi Mikrofon Süngeri">
    <meta property="og:description"
        content="Silindir, kare, üçgen ve özel kesim logo baskılı mikrofon süngerleri ₺900 fiyatla. Hızlı üretim ve Türkiye geneline teslimat.">
    <meta property="og:image" content="{{ asset('products/ucgen.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bi Mikrofon Süngeri">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Logo Baskılı Mikrofon Süngerleri | Bi Mikrofon Süngeri">
    <meta name="twitter:description" content="Markanıza özel, baskılı ve şekilli mikrofon süngerleri. Hemen sipariş verin!">
    <meta name="twitter:image" content="{{ asset('products/ucgen.jpg') }}">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProductCollection",
        "name": "Logo Baskılı Mikrofon Süngerleri",
        "description": "Logo baskılı mikrofon süngerleri; silindir, kare, üçgen gibi özel şekillerde ₺900 fiyatla. Hızlı üretim, profesyonel baskı.",
        "image": "{{ asset('products/ucgen.jpg') }}",
        "url": "{{ url()->current() }}",
        "brand": {
            "@type": "Organization",
            "name": "Bi Mikrofon Süngeri"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Bi Mikrofon Süngeri",
            "logo": {
                "@type": "ImageObject",
                "url": "https://bimikrofonsungeri.com/logo.png"
            }
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        }
    }
    </script>
@endpush

@section('content')

    @php
        $products = [
            [
                'image' => '/products/silindir.jpg',
                'secondImage' => '/second/silindir.jpg',
                'altText' => 'Silindir Süngeri',
                'title' => 'Silindir Mikrofon Süngeri',
                'price' => '₺900,00',
                'oldPrice' => '₺1200,00',
                'productSlug' => 'silindir-mikrofon-sungeri',
            ],
            [
                'image' => '/products/kare.jpg',
                'secondImage' => '/second/kare.jpg',
                'altText' => 'Kare Sünger',
                'title' => 'Kare Mikrofon Süngeri',
                'price' => '₺900,00',
                'oldPrice' => '₺1200,00',
                'productSlug' => 'kare-mikrofon-sungeri',
            ],
            [
                'image' => '/products/ucgen.jpg',
                'secondImage' => '/second/ucgen.jpg',
                'altText' => 'Üçgen Sünger',
                'title' => 'Üçgen Mikrofon Süngeri',
                'price' => '₺900,00',
                'oldPrice' => '₺1200,00',
                'productSlug' => 'ucgen-mikrofon-sungeri',
            ],
            [
                'image' => '/products/top.jpg',
                'secondImage' => '/second/top.jpg',
                'altText' => 'Top Sünger',
                'title' => 'Top Mikrofon Süngeri',
                'price' => '₺900,00',
                'oldPrice' => '₺1200,00',
                'productSlug' => 'top-mikrofon-sungeri',
            ],
            [
                'image' => '/products/damla.jpg',
                'secondImage' => '/second/damla.jpg',
                'altText' => 'Damla Sünger',
                'title' => 'Damla Mikrofon Süngeri',
                'price' => '₺900,00',
                'oldPrice' => '₺1200,00',
                'productSlug' => 'damla-mikrofon-sungeri',
            ],
            [
                'image' => '/products/reklam-kupu.jpg',
                'secondImage' => '/second/reklam-kupu.jpg',
                'altText' => 'Reklam Küpü',
                'title' => 'Reklam Küpü Mikrofon Süngeri',
                'price' => '₺900,00',
                'oldPrice' => '₺1200,00',
                'productSlug' => 'reklam-kupu-mikrofon-sungeri',
            ],
        ];
        $initial = $products[0]['secondImage'];
    @endphp

    <div x-data="{ selectedImage: '{{ $initial }}' }" class="grid grid-cols-12 max-h-[calc(100vh-100px)] overflow-hidden">

        <x-product.left-content>
            <x-hero-banner />

            @foreach ($products as $prod)
                <x-product.card :product="$prod" x-on:mouseenter="selectedImage='{{ $prod['secondImage'] }}'"
                    x-on:focus="selectedImage='{{ $prod['secondImage'] }}'" tabindex="0" />
            @endforeach

        </x-product.left-content>

        <x-product.right-content>
            <template x-for="img in [selectedImage]" :key="img">
                <img :src="img" :alt="'Seçilen ürün: ' + img"
                    x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" class="max-w-full max-h-full object-contain" />
            </template>
        </x-product.right-content>


    </div>

@endsection
