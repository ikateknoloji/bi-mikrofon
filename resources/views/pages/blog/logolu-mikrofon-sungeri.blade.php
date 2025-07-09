@extends('layouts.app')

@section('title', 'Logolu Mikrofon Süngeri ile Her Yayında Markanızı Gösterin | Bi Mikrofon Süngeri')

@section('meta_description',
    'Logolu mikrofon süngeri ile markanızı her karede görünür kılın. ₺900 fiyatla profesyonel
    logo baskılı süngerler. İstanbul üretimi, Türkiye geneline teslimat.')

    @push('meta')
        <!-- Open Graph -->
        <meta property="og:title" content="Logolu Mikrofon Süngeri ile Her Yayında Markanızı Gösterin | Bi Mikrofon Süngeri" />
        <meta property="og:description"
            content="Logolu mikrofon süngeri ile markanızı her karede görünür kılın. ₺900 fiyatla profesyonel logo baskılı süngerler. İstanbul üretimi, Türkiye geneline teslimat." />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{ url()->current() }}" />
        <meta property="og:image" content="{{ asset('products/kare.jpg') }}" />

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Logolu Mikrofon Süngeri ile Her Yayında Markanızı Gösterin" />
        <meta name="twitter:description"
            content="Yayınlarda markanızı ön plana çıkarın. İstanbul üretimi logolu süngerler Türkiye geneline hızlı teslimat." />
        <meta name="twitter:image" content="{{ asset('products/kare.jpg') }}" />

        <!-- JSON-LD Schema -->
        <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "headline": "Logolu Mikrofon Süngeri ile Her Yayında Markanızı Gösterin",
        "image": [
            "{{ asset('products/kare.jpg') }}"
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
        "description": "Logolu mikrofon süngeri ile yayınlarınızda markanızı görünür kılın. İstanbul'da üretilen süngerler, Türkiye geneline hızlı teslimat ile sunulmaktadır."
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
                <li class="before:content-['/'] before:mx-2 text-gray-900">Logolu Mikrofon Süngeri</li>
            </ol>
        </nav>

        <!-- Article -->
        <article class="bg-white rounded-lg shadow-sm p-8">
            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                    Logolu Mikrofon Süngeri ile Her Yayında Markanızı Gösterin
                </h1>
                <div class="flex items-center text-gray-500 text-sm mb-6">
                    <time datetime="2025-07-09">09.07.2025</time>
                    <span class="mx-2">•</span>
                    <span>5 dakika okuma</span>
                    <span class="mx-2">•</span>
                    <span>Marka Tanıtımı</span>
                </div>
                <div class="w-full h-64 rounded-lg mb-8 flex items-center justify-center bg-center bg-cover bg-no-repeat"
                    style="background-image: url('/products/kare.jpg');">
                </div>
            </header>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                <!-- Introduction -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 border-l-4 border-blue-500 p-6 rounded-r-lg">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            <strong>Logolu mikrofon süngeri</strong>, sadece ses koruması sağlamakla kalmaz, aynı zamanda
                            markanızı her karede görünür kılar. Firmamız, <strong>İstanbul Fatih'te kendi üretimini yaptığı
                                logolu mikrofon süngerlerini Türkiye geneline ulaştırmaktadır</strong>.
                        </p>
                    </div>
                </section>

                <!-- Brand Visibility Hero -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-8 rounded-lg text-center">
                        <h2 class="text-3xl font-bold mb-4">Her Karede Markanız Görünsün!</h2>
                        <p class="text-xl mb-6">Logolu mikrofon süngeri ile yayınlarınızda sürekli marka bilinirliği</p>
                        <div class="flex items-center justify-center space-x-8">
                            <div class="text-center">
                                <div class="text-4xl font-bold">∞</div>
                                <div class="text-sm">Görünüm Sayısı</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold">%100</div>
                                <div class="text-sm">Marka Bilinirliği</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold">₺0</div>
                                <div class="text-sm">Reklam Maliyeti</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Why Logo Microphone Foam -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Neden Logolu Mikrofon Süngeri?</h2>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-green-50 border border-green-200 p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-green-100 p-3 rounded-full mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-green-900 mb-2">Sürekli Görünürlük</h3>
                                    <p class="text-green-800 text-sm">Röportaj, sahne ve video içeriklerinde logonuz dikkat
                                        çeker</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-blue-50 border border-blue-200 p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-900 mb-2">Profesyonel Görünüm</h3>
                                    <p class="text-blue-800 text-sm">Kurumsal ve profesyonel görünüm sağlar</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-purple-50 border border-purple-200 p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-purple-100 p-3 rounded-full mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-purple-900 mb-2">Ücretsiz Reklam</h3>
                                    <p class="text-purple-800 text-sm">Her yayında ücretsiz reklam etkisi yaratır</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-orange-50 border border-orange-200 p-6 rounded-lg">
                            <div class="flex items-start">
                                <div class="bg-orange-100 p-3 rounded-full mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-orange-900 mb-2">Uzun Ömürlü Yatırım</h3>
                                    <p class="text-orange-800 text-sm">Tek seferlik yatırım, uzun ömürlü kullanım</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Before/After Comparison -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Logosuz vs Logolu Karşılaştırması</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 border border-gray-200 p-6 rounded-lg">
                            <div class="text-center mb-4">
                                <div
                                    class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-3 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900">Logosuz Sünger</h4>
                            </div>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li>• Sadece ses koruması</li>
                                <li>• Sıradan görünüm</li>
                                <li>• Marka tanıtımı yok</li>
                                <li>• Kaçırılan fırsatlar</li>
                            </ul>
                        </div>

                        <div class="bg-gradient-to-r from-blue-50 to-purple-50 border-2 border-blue-300 p-6 rounded-lg">
                            <div class="text-center mb-4">
                                <div
                                    class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-3 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-blue-900">Logolu Sünger</h4>
                            </div>
                            <ul class="space-y-2 text-blue-800 text-sm">
                                <li>• Ses koruması + Marka tanıtımı</li>
                                <li>• Profesyonel görünüm</li>
                                <li>• Sürekli marka bilinirliği</li>
                                <li>• Maksimum değer</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Product Features -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Ürün Özellikleri</h2>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Şekil Seçenekleri</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-500 mr-4"></div>
                                        <span class="text-gray-700">Özel kesim kare formlar</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-500 rounded-full mr-4"></div>
                                        <span class="text-gray-700">Yuvarlak formlar</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div
                                            class="w-0 h-0 border-l-4 border-r-4 border-b-8 border-l-transparent border-r-transparent border-b-blue-500 mr-4 ml-2">
                                        </div>
                                        <span class="text-gray-700 ml-2">Üçgen formlar</span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Renk Seçenekleri</h3>
                                <div class="grid grid-cols-4 gap-3">
                                    <div class="text-center">
                                        <div class="w-8 h-8 bg-black rounded-full mx-auto mb-1"></div>
                                        <span class="text-xs text-gray-600">Siyah</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-8 h-8 bg-red-500 rounded-full mx-auto mb-1"></div>
                                        <span class="text-xs text-gray-600">Kırmızı</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-8 h-8 bg-blue-500 rounded-full mx-auto mb-1"></div>
                                        <span class="text-xs text-gray-600">Mavi</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-8 h-8 bg-green-500 rounded-full mx-auto mb-1"></div>
                                        <span class="text-xs text-gray-600">Yeşil</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 mt-3">Siyah başta olmak üzere birçok renk seçeneği</p>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Baskı Teknolojileri</h3>
                            <div class="grid md:grid-cols-3 gap-4">
                                <div class="bg-white p-4 rounded-lg border border-gray-200">
                                    <h4 class="font-semibold text-gray-900 mb-2">UV Baskı</h4>
                                    <p class="text-gray-600 text-sm">Dayanıklı ve canlı renkler</p>
                                </div>
                                <div class="bg-white p-4 rounded-lg border border-gray-200">
                                    <h4 class="font-semibold text-gray-900 mb-2">Serigrafi</h4>
                                    <p class="text-gray-600 text-sm">Klasik ve kaliteli baskı</p>
                                </div>
                                <div class="bg-white p-4 rounded-lg border border-gray-200">
                                    <h4 class="font-semibold text-gray-900 mb-2">Transfer Baskı</h4>
                                    <p class="text-gray-600 text-sm">Detaylı logo uygulamaları</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-lg">
                            <p class="text-blue-800 font-medium">
                                <strong>Yoğun gözenekli kaliteli sünger yapısı</strong> ile hem ses koruması hem de uzun
                                ömürlü kullanım garantisi
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Pricing 2025 -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Fiyat Bilgisi (2025)</h2>

                    <div class="bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-300 rounded-xl p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Logo baskılı mikrofon süngeri fiyatı:</h3>
                            <div class="text-5xl md:text-6xl font-bold text-green-600 mb-2">
                                ₺900
                            </div>
                            <div class="text-lg text-gray-600 mb-4">/ adet</div>
                            <div class="bg-white bg-opacity-70 rounded-lg p-4 inline-block">
                                <div class="text-sm text-gray-700">
                                    <span class="font-semibold">₺750</span> + <span class="font-semibold">₺150 KDV</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-orange-100 p-6 rounded-lg">
                            <div class="flex items-center justify-center">
                                <svg class="w-6 h-6 text-orange-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                    </path>
                                </svg>
                                <p class="text-orange-800 font-semibold">Toplu siparişlerde özel indirim uygulanır</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk Order Pricing -->
                    <div class="mt-6 bg-white border border-gray-200 rounded-lg overflow-hidden">
                        <div class="bg-gray-50 px-6 py-3">
                            <h4 class="font-semibold text-gray-900">Toplu Sipariş İndirim Tablosu</h4>
                        </div>
                        <div class="p-6">
                            <div class="grid md:grid-cols-4 gap-4">
                                <div class="text-center p-4 bg-gray-50 rounded-lg">
                                    <div class="text-lg font-bold text-gray-900">1-4 Adet</div>
                                    <div class="text-sm text-gray-600">Normal Fiyat</div>
                                    <div class="text-xl font-bold text-blue-600 mt-2">₺900</div>
                                </div>
                                <div class="text-center p-4 bg-green-50 rounded-lg">
                                    <div class="text-lg font-bold text-green-900">5-10 Adet</div>
                                    <div class="text-sm text-green-600">%5 İndirim</div>
                                    <div class="text-xl font-bold text-green-600 mt-2">₺855</div>
                                </div>
                                <div class="text-center p-4 bg-orange-50 rounded-lg">
                                    <div class="text-lg font-bold text-orange-900">11-25 Adet</div>
                                    <div class="text-sm text-orange-600">%10 İndirim</div>
                                    <div class="text-xl font-bold text-orange-600 mt-2">₺810</div>
                                </div>
                                <div class="text-center p-4 bg-purple-50 rounded-lg">
                                    <div class="text-lg font-bold text-purple-900">25+ Adet</div>
                                    <div class="text-sm text-purple-600">Özel Teklif</div>
                                    <div class="text-xl font-bold text-purple-600 mt-2">İletişim</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Who Uses It -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kimler Kullanıyor?</h2>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-red-50 border border-red-200 p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-red-900 mb-3">TV ve Radyo Kanalları</h3>
                            <p class="text-red-700 text-sm">Haber bültenleri, canlı yayınlar ve röportajlarda marka
                                görünürlüğü</p>
                        </div>

                        <div class="bg-blue-50 border border-blue-200 p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-blue-900 mb-3">YouTuber'lar, Podcast Yayıncıları</h3>
                            <p class="text-blue-700 text-sm">İçerik üreticileri ve dijital yayıncılar için kişisel marka
                                tanıtımı</p>
                        </div>

                        <div class="bg-green-50 border border-green-200 p-6 rounded-lg text-center">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-green-900 mb-3">Belediyeler, Ajanslar, Kurumsal Markalar
                            </h3>
                            <p class="text-green-700 text-sm">Resmi açıklamalar ve kurumsal etkinliklerde profesyonel
                                görünüm</p>
                        </div>
                    </div>

                    <!-- Success Stories -->
                    <div class="mt-8 bg-gray-50 p-6 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-4">Müşteri Deneyimleri</h4>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white p-4 rounded-lg border-l-4 border-blue-500">
                                <p class="text-gray-700 text-sm mb-2">"Basın toplantılarımızda logomuz her karede
                                    görünüyor. Vatandaşlar artık bizi daha profesyonel buluyor."</p>
                                <div class="text-xs text-gray-500">- Belediye Halkla İlişkiler Müdürü</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg border-l-4 border-green-500">
                                <p class="text-gray-700 text-sm mb-2">"YouTube kanalımda marka bilinirliğim arttı.
                                    Sponsorlar da bu detayı çok beğeniyor."</p>
                                <div class="text-xs text-gray-500">- İçerik Üreticisi</div>
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
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-orange-800 leading-relaxed text-lg mb-4">
                                    <strong>İstanbul'daki üretim atölyemizden</strong> tüm Türkiye'ye gönderim yapıyoruz.
                                    Ankara, İzmir, Bursa ve diğer illere <strong>1-2 iş gününde teslimat</strong> mümkündür.
                                </p>
                                <div class="bg-white p-4 rounded-lg border-l-4 border-orange-500">
                                    <p class="text-orange-700 font-medium">
                                        Profesyonel paketleme ile ürünleriniz güvenle elinize ulaşır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delivery Map -->
                    <div class="mt-6 bg-white border border-gray-200 rounded-lg p-6">
                        <h4 class="font-semibold text-gray-900 mb-4">Teslimat Süreleri</h4>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="text-center p-3 bg-green-50 rounded-lg">
                                <div class="font-semibold text-green-600">İstanbul</div>
                                <div class="text-sm text-gray-600">Aynı gün</div>
                            </div>
                            <div class="text-center p-3 bg-blue-50 rounded-lg">
                                <div class="font-semibold text-blue-600">Ankara, İzmir</div>
                                <div class="text-sm text-gray-600">1-2 iş günü</div>
                            </div>
                            <div class="text-center p-3 bg-purple-50 rounded-lg">
                                <div class="font-semibold text-purple-600">Büyük Şehirler</div>
                                <div class="text-sm text-gray-600">2-3 iş günü</div>
                            </div>
                            <div class="text-center p-3 bg-orange-50 rounded-lg">
                                <div class="font-semibold text-orange-600">Diğer İller</div>
                                <div class="text-sm text-gray-600">3-4 iş günü</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ROI Calculator -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Yatırım Geri Dönüş Hesabı</h3>
                    <div class="bg-gradient-to-r from-purple-50 to-blue-50 p-6 rounded-lg">
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-purple-600 mb-2">₺900</div>
                                <div class="text-sm text-gray-600">Tek seferlik maliyet</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600 mb-2">∞</div>
                                <div class="text-sm text-gray-600">Kullanım sayısı</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600 mb-2">%100</div>
                                <div class="text-sm text-gray-600">Görünürlük oranı</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-orange-600 mb-2">₺0</div>
                                <div class="text-sm text-gray-600">Ek reklam maliyeti</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Final Call -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-8 rounded-lg text-center">
                        <h3 class="text-2xl font-bold mb-4">Logolu mikrofon süngeri ile yayınlarınıza kurumsal bir kimlik
                            kazandırın!</h3>
                        <p class="text-lg mb-6">Her karede markanızı gösterin, profesyonel görünümünüzü artırın.</p>
                        <div class="text-xl font-semibold">
                            Hemen sipariş verin!
                        </div>
                    </div>
                </section>
            </div>

            <!-- Call to Action -->
            <div class="bg-gradient-to-r from-green-600 to-blue-900 text-white p-8 rounded-lg mt-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Markanızı Her Yayında Gösterin!</h3>
                    <p class="mb-6">
                        Logo dosyanızı gönderin, profesyonel mikrofon süngeri üretimi için hemen bizimle iletişime geçin!
                    </p>
                    <div class="flex items-center justify-center">
                        <x-contact-buttons />
                    </div>
                </div>
            </div>

            <!-- Order Form -->
            <div class="mt-8 bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Hızlı Sipariş Formu</h3>
                <div class="bg-white p-6 rounded-lg">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Sipariş Adedi</label>
                            <select
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>1-4 adet (₺900/adet)</option>
                                <option>5-10 adet (₺855/adet - %5 indirim)</option>
                                <option>11-25 adet (₺810/adet - %10 indirim)</option>
                                <option>25+ adet (Özel teklif)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Sünger Şekli</label>
                            <select
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>Kare</option>
                                <option>Yuvarlak</option>
                                <option>Üçgen</option>
                                <option>Özel kesim</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6 grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Renk Seçimi</label>
                            <select
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>Siyah (Önerilen)</option>
                                <option>Kırmızı</option>
                                <option>Mavi</option>
                                <option>Yeşil</option>
                                <option>Özel renk</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Baskı Türü</label>
                            <select
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option>UV Baskı (Önerilen)</option>
                                <option>Serigrafi</option>
                                <option>Transfer Baskı</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button
                            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-colors">
                            Teklif Al ve Sipariş Ver
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Gallery -->
            <div class="mt-8 bg-white border border-gray-200 p-6 rounded-lg">
                <h4 class="font-semibold text-gray-900 mb-4">Ürün Galerisi</h4>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <div class="w-16 h-16 bg-black rounded-lg mx-auto mb-3 flex items-center justify-center">
                            <span class="text-white text-xs font-bold">LOGO</span>
                        </div>
                        <div class="font-semibold text-gray-900">Kare Siyah</div>
                        <div class="text-sm text-gray-600">En popüler seçim</div>
                    </div>
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <div class="w-16 h-16 bg-blue-500 rounded-full mx-auto mb-3 flex items-center justify-center">
                            <span class="text-white text-xs font-bold">LOGO</span>
                        </div>
                        <div class="font-semibold text-gray-900">Yuvarlak Mavi</div>
                        <div class="text-sm text-gray-600">Kurumsal tercih</div>
                    </div>
                    <div class="text-center p-4 bg-gray-50 rounded-lg">
                        <div class="w-16 h-16 bg-red-500 mx-auto mb-3 flex items-center justify-center"
                            style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);">
                            <span class="text-white text-xs font-bold">LOGO</span>
                        </div>
                        <div class="font-semibold text-gray-900">Üçgen Kırmızı</div>
                        <div class="text-sm text-gray-600">Dikkat çekici</div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection
