@extends('layouts.app')

@section('title', 'Küçük Mikrofon Süngeri Modelleri – Minimal Tasarım, Maksimum Etki | Bi Mikrofon Süngeri')

@section('meta_description',
    'Küçük ebatlı mikrofonlar için özel mikrofon süngeri üretimi. Yaka mikrofonları, mini
    mikrofonlar ve podcast ekipmanları için kompakt süngerler. ₺10-₺900 fiyat aralığı.')

    @push('meta')
        <!-- Open Graph -->
        <meta property="og:title"
            content="Küçük Mikrofon Süngeri Modelleri – Minimal Tasarım, Maksimum Etki | Bi Mikrofon Süngeri" />
        <meta property="og:description"
            content="Yaka mikrofonları ve mini mikrofonlar için özel küçük sünger üretimi. Kompakt yapı, güçlü ses filtreleme, hızlı kargo." />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:image" content="{{ asset('products/damla/damla-mikrofon-sungeri-5.png') }}" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Küçük Mikrofon Süngeri Modelleri" />
        <meta name="twitter:description"
            content="Podcast, röportaj ve mobil yayınlar için hafif, taşınabilir mikrofon süngerleri. İstanbul’dan Türkiye’ye gönderim." />
        <meta name="twitter:image" content="{{ asset('products/damla/damla-mikrofon-sungeri-5.png') }}" />

        <!-- JSON-LD Schema -->
        <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "headline": "Küçük Mikrofon Süngeri Modelleri – Minimal Tasarım, Maksimum Etki",
        "image": [
            "{{ asset('products/damla/damla-mikrofon-sungeri-5.png') }}"
        ],
        "datePublished": "2025-07-09",
        "dateModified": "2025-07-09",
        "author": {
            "@type": "Organization",
            "name": "Bi Mikrofon Süngeri",
            "url": "https://bimikrofonsungeri.com"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Bi Mikrofon Süngeri",
            "logo": {
                "@type": "ImageObject",
                "url": "https://bimikrofonsungeri.com/logo.png"
            }
        },
        "description": "Küçük ebatlı mikrofon süngerleri, podcast, yaka mikrofonu ve mobil yayınlar için idealdir. Hafif, estetik ve kaliteli baskı imkanıyla İstanbul’dan Türkiye’ye hızlı teslimat."
    }
    </script>
    @endpush


@section('content')
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 text-sm">
            <ol class="flex items-center space-x-2 text-gray-500">
                <li><a href="/" class="hover:text-blue-600">Ana Sayfa</a></li>
                <li class="before:content-['/'] before:mx-2">Blog</li>
                <li class="before:content-['/'] before:mx-2 text-gray-900">Küçük Mikrofon Süngeri Modelleri</li>
            </ol>
        </nav>

        <!-- Article -->
        <article class="bg-white rounded-lg shadow-sm p-8">
            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                    Küçük Mikrofon Süngeri Modelleri – Minimal Tasarım, Maksimum Etki
                </h1>
                <div class="flex items-center text-gray-500 text-sm mb-6">
                    <time datetime="2025-07-09">09.07.2025</time>
                    <span class="mx-2">•</span>
                    <span>4 dakika okuma</span>
                    <span class="mx-2">•</span>
                    <span>Ürün Rehberi</span>
                </div>
                <div class="w-full h-64 md:h-[600px] rounded-lg mb-8 flex items-center justify-center bg-center bg-cover bg-no-repeat"
                    style="background-image: url('/products/damla/damla-mikrofon-sungeri-5.png');">
                </div>
            </header>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                <!-- Introduction -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-purple-50 to-blue-50 border-l-4 border-purple-500 p-6 rounded-r-lg">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            <strong>Küçük ebatlı mikrofonlar</strong> için özel olarak üretilen mikrofon süngerleri, hem ses
                            kalitesini artırır hem de estetik bir görünüm sunar. Firmamız, <strong>küçük boy mikrofon
                                süngeri ihtiyaçlarına özel üretim ve logo baskı hizmeti</strong> vermektedir.
                        </p>
                    </div>
                </section>

                <!-- Minimal Design Philosophy -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Minimal Tasarım Felsefesi</h2>

                    <div class="bg-gradient-to-r from-gray-50 to-blue-50 p-8 rounded-lg border border-gray-200">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-4 rounded-full mr-6 flex-shrink-0">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Küçük Ama Güçlü</h3>
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Modern yayıncılık dünyasında <strong>"daha az, daha iyi"</strong> anlayışı hakimdir.
                                    Küçük mikrofon süngerleri de bu felsefenin bir yansımasıdır.
                                </p>
                                <div class="bg-white p-4 rounded-lg border-l-4 border-blue-500">
                                    <p class="text-blue-800 font-medium">
                                        Kompakt boyutlarda maksimum performans ve görsel etki sağlar.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Usage Areas -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Nerelerde Kullanılır?</h2>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-green-50 border border-green-200 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-green-900">Yaka Mikrofonları</h3>
                            </div>
                            <p class="text-green-800 text-sm">Televizyon sunumları, konferanslar ve canlı yayınlarda
                                kullanılan küçük mikrofonlar için ideal.</p>
                        </div>

                        <div class="bg-blue-50 border border-blue-200 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-blue-900">El Tipi Mini Mikrofonlar</h3>
                            </div>
                            <p class="text-blue-800 text-sm">Röportajlar, sokak röportajları ve mobil yayıncılık için
                                kompakt çözümler.</p>
                        </div>

                        <div class="bg-purple-50 border border-purple-200 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-purple-900">Podcast Ekipmanları</h3>
                            </div>
                            <p class="text-purple-800 text-sm">Masaüstü podcast mikrofonları ve ev stüdyosu kurulumları için
                                mükemmel.</p>
                        </div>

                        <div class="bg-orange-50 border border-orange-200 p-6 rounded-lg">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-orange-900">Taşınabilir Yayın Sistemleri</h3>
                            </div>
                            <p class="text-orange-800 text-sm">Mobil yayıncılık, vlog çekimleri ve saha röportajları için
                                hafif çözümler.</p>
                        </div>
                    </div>
                </section>

                <!-- Product Features -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Küçük Mikrofon Süngeri Özellikleri</h2>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Teknik Özellikler</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-gray-700"><strong>Kompakt ve hafif yapı</strong> - Taşınabilirlik
                                            için optimize edilmiş</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-gray-700"><strong>Yoğun gözenekli kaliteli sünger</strong> -
                                            Maksimum ses filtreleme</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Tasarım Seçenekleri</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2">
                                            </path>
                                        </svg>
                                        <span class="text-gray-700"><strong>Logo baskılı ya da sade seçenekler</strong> -
                                            İhtiyaca göre özelleştirme</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5v12a2 2 0 002 2h2V3z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-700"><strong>Siyah, kırmızı, mavi gibi renk
                                                alternatifleri</strong> - Görsel uyum</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Size Comparison -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Boyut Karşılaştırması</h3>
                    <div class="bg-white border border-gray-200 p-6 rounded-lg">
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Mini Sünger</h4>
                                <p class="text-gray-600 text-sm">Yaka mikrofonları için</p>
                                <p class="text-xs text-gray-500 mt-1">Ø 8-12mm</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <div class="w-10 h-10 bg-gray-400 rounded-full"></div>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Küçük Sünger</h4>
                                <p class="text-gray-600 text-sm">El tipi mini mikrofonlar</p>
                                <p class="text-xs text-gray-500 mt-1">Ø 15-20mm</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <div class="w-12 h-12 bg-gray-400 rounded-full"></div>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Standart Sünger</h4>
                                <p class="text-gray-600 text-sm">Karşılaştırma için</p>
                                <p class="text-xs text-gray-500 mt-1">Ø 25-30mm</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Pricing 2025 -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Fiyat Bilgisi (2025)</h2>

                    <div class="">
                        <!-- Logo Printed Small Foams -->
                        <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-2 border-blue-300 rounded-xl p-6">
                            <div class="text-center">
                                <h3 class="text-lg font-semibold text-blue-900 mb-3">Logo Baskılı Küçük Süngerler</h3>
                                <div class="text-3xl font-bold text-blue-600 mb-2">
                                    ₺900
                                </div>
                                <div class="text-sm text-blue-700 mb-4">/ adet</div>
                                <div class="bg-white bg-opacity-70 rounded-lg p-3">
                                    <p class="text-xs text-blue-800">₺750 + ₺150 KDV</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-lg">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-yellow-600 mr-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-yellow-800">
                                <strong>Küçük boyutlarda da aynı kaliteli baskı teknolojisi</strong> kullanılmaktadır.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Color Options -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Renk Seçenekleri</h3>
                    <div class="bg-white border border-gray-200 p-6 rounded-lg">
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="w-12 h-12 bg-black rounded-full mx-auto mb-2"></div>
                                <h4 class="font-semibold text-gray-900">Siyah</h4>
                                <p class="text-xs text-gray-600">Klasik ve profesyonel</p>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="w-12 h-12 bg-red-500 rounded-full mx-auto mb-2"></div>
                                <h4 class="font-semibold text-gray-900">Kırmızı</h4>
                                <p class="text-xs text-gray-600">Dikkat çekici</p>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div class="w-12 h-12 bg-blue-500 rounded-full mx-auto mb-2"></div>
                                <h4 class="font-semibold text-gray-900">Mavi</h4>
                                <p class="text-xs text-gray-600">Kurumsal görünüm</p>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-lg">
                                <div
                                    class="w-12 h-12 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full mx-auto mb-2">
                                </div>
                                <h4 class="font-semibold text-gray-900">Özel Renkler</h4>
                                <p class="text-xs text-gray-600">Talep üzerine</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Turkey-wide Delivery -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Türkiye Geneline Teslimat</h2>

                    <div class="bg-gradient-to-r from-orange-50 to-red-50 p-8 rounded-lg border border-orange-200">
                        <div class="flex items-start">
                            <div class="bg-orange-100 p-4 rounded-full mr-6 flex-shrink-0">
                                <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-orange-800 leading-relaxed text-lg mb-4">
                                    <strong>İstanbul Fatih'teki atölyemizden</strong> üretilen süngerler, İzmir, Ankara,
                                    Bursa ve diğer illere kargo ile ulaştırılır.
                                </p>
                                <div class="bg-white p-4 rounded-lg border-l-4 border-orange-500">
                                    <p class="text-orange-700 font-medium">
                                        Küçük boyutları sayesinde kargo maliyeti düşük, teslimat hızlıdır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Cities -->
                    <div class="mt-6 bg-white border border-gray-200 rounded-lg p-6">
                        <h4 class="font-semibold text-gray-900 mb-4">Hızlı Teslimat Şehirleri</h4>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="font-semibold text-blue-600">İzmir</div>
                                <div class="text-sm text-gray-600">1-2 iş günü</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="font-semibold text-red-600">Ankara</div>
                                <div class="text-sm text-gray-600">1-2 iş günü</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="font-semibold text-green-600">Bursa</div>
                                <div class="text-sm text-gray-600">1 iş günü</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-lg">
                                <div class="font-semibold text-purple-600">Diğer İller</div>
                                <div class="text-sm text-gray-600">2-3 iş günü</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Advantages of Small Foams -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Küçük Sünger Avantajları</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-3">Pratik Avantajlar</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li>• Hafif ve taşınabilir</li>
                                <li>• Düşük kargo maliyeti</li>
                                <li>• Hızlı montaj ve sökme</li>
                                <li>• Minimal depolama alanı</li>
                            </ul>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-3">Teknik Avantajlar</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li>• Etkili ses filtreleme</li>
                                <li>• Minimal görsel müdahale</li>
                                <li>• Yüksek dayanıklılık</li>
                                <li>• Kolay temizlik</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Target Audience -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Kimler İçin İdeal?</h3>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">Podcast Üreticileri</h4>
                                <p class="text-gray-600 text-sm">Ev stüdyosu kurulumları için</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">Mobil Yayıncılar</h4>
                                <p class="text-gray-600 text-sm">Saha çekimleri ve vloglar için</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">Konferans Sunucuları</h4>
                                <p class="text-gray-600 text-sm">Yaka mikrofonları için</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Call to Action -->
            <div class="bg-gradient-to-r from-purple-600 to-blue-900 text-white p-8 rounded-lg mt-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Küçük Ama Etkili Çözümler</h3>
                    <p class="mb-6">
                        Minimal tasarım, maksimum etki için küçük mikrofon süngeri siparişinizi hemen verin!
                    </p>
                    <div class="flex items-center justify-center">
                        <x-contact-buttons />
                    </div>
                </div>
            </div>

        </article>
    </main>
@endsection
