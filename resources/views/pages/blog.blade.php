@extends('layouts.app')

@section('title', 'Mikrofon Süngeri Blog - Rehberler, Fiyatlar ve Uzman Tavsiyeleri | Bi Mikrofon Süngeri')

@section('meta_description',
    'Mikrofon süngeri hakkında kapsamlı rehberler, güncel fiyatlar, üretim bilgileri ve uzman
    tavsiyeleri. Ses kalitesi, logo baskı, şehir bazlı hizmetler ve daha fazlası.')

@section('content')
    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Blog Header -->
        <header class="text-center mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                Mikrofon Süngeri Blog
            </h1>
            <p class="text-base text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Ses kalitesinden marka tanıtımına, üretim sürecinden şehir bazlı hizmetlere kadar mikrofon süngeri
                dünyasının her detayını keşfedin.
            </p>
            <div class="mt-8 hidden sm:flex flex-row items-center justify-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    10 Rehber Yazısı
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Güncel İçerik
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Uzman Tavsiyeleri
                </span>
            </div>
        </header>

        <!-- Featured Article -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-blue-600 to-blue-900 rounded-2xl p-8 text-white">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <span class="inline-block bg-white bg-opacity-20 text-black text-sm px-3 py-1 rounded-full mb-4">
                            ⭐ Öne Çıkan Yazı
                        </span>
                        <h2 class="text-3xl font-bold mb-4">
                            Mikrofon Yalıtımı Nedir? Net ve Temiz Ses İçin En Etkili Yöntem
                        </h2>
                        <p class="text-blue-100 mb-6 leading-relaxed">
                            Ses kalitesini artırmak, ortam gürültüsünü engellemek ve profesyonel yayın deneyimi yaşamak için
                            mikrofon yalıtımının tüm detaylarını öğrenin.
                        </p>
                        <a href="{{ route('blog.mikrofon-yalitimi') }}"
                            class="inline-flex items-center bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                            Yazıyı Oku
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="bg-opacity-10 rounded-xl p-6 text-center">
                            <div class="text-6xl mb-4">🎤</div>
                            <div class="text-lg font-semibold">Ses Kalitesi</div>
                            <div class="text-blue-200 text-sm">Profesyonel Yalıtım</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Categories -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Blog Kategorileri</h2>

            <!-- General Information -->
            <div class="mb-10">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Genel Bilgiler ve Rehberler</h3>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">🎵</div>
                                <div class="text-lg font-semibold">Ses Yalıtımı</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Mikrofon Yalıtımı Nedir?
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Net ve temiz ses için en etkili yöntemler, ses kalitesi artırma teknikleri ve profesyonel
                                yalıtım çözümleri.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">6 dakika okuma</span>
                                <a href="{{ route('blog.mikrofon-yalitimi') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">❓</div>
                                <div class="text-lg font-semibold">Temel Bilgiler</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Mikrofon Süngeri Nedir?
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Ne işe yarar, neden önemlidir? Ses ekipmanları hakkında temel bilgiler ve kullanım alanları.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">4 dakika okuma</span>
                                <a href="{{ route('blog.mikrofon-sungeri-nedir') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Pricing Information -->
            <div class="mb-10">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Fiyat Bilgileri ve Rehberleri</h3>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">💰</div>
                                <div class="text-lg font-semibold">Güncel Fiyatlar</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Mikrofon Süngeri Fiyatları (2025)
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Güncel fiyat rehberi, standart ve logo baskılı sünger fiyatları, toplu sipariş avantajları.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">6 dakika okuma</span>
                                <a href="#" class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">🏷️</div>
                                <div class="text-lg font-semibold">Baskılı Fiyat</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Baskılı Mikrofon Süngeri Fiyatı 2025
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                ₺900 fiyat detayları, fiyata dahil olanlar, toplu sipariş avantajları ve sipariş bilgileri.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">3 dakika okuma</span>
                                <a href="{{ route('blog.baskili-mikrofon-sungeri-fiyati') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Production and Services -->
            <div class="mb-10">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Üretim ve Hizmetlerimiz</h3>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-indigo-400 to-indigo-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">🏭</div>
                                <div class="text-lg font-semibold">Üretim Süreci</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Mikrofon Süngeri Üretimi ve Baskı Hizmeti
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Profesyonel üretim süreci, logo baskı teknolojileri ve kalite kontrol aşamaları hakkında
                                detaylar.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">4 dakika okuma</span>
                                <a href="{{ route('blog.mikrofon-sungeri-uretimi') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-teal-400 to-teal-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">🎨</div>
                                <div class="text-lg font-semibold">Marka Tanıtımı</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Mikrofon Süngeri Baskı Nedir?
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Kurumsal tanıtımda güçlü bir detay olan logo baskılı mikrofon süngerinin avantajları ve
                                kullanım alanları.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">5 dakika okuma</span>
                                <a href="{{ route('blog.mikrofon-sungeri-baski') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- City-based Services -->
            <div class="mb-10">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Şehir Bazlı Hizmetler</h3>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-3xl mb-2">🏛️</div>
                                <div class="text-lg font-semibold">İstanbul Fatih</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Mikrofon Süngeri Nerede Bulunur?
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                İstanbul Fatih'te hizmetinizdeyiz. Yerli üretim, hızlı teslimat ve profesyonel hizmet.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">4 dakika okuma</span>
                                <a href="{{ route('blog.mikrofon-sungeri-nerede-bulunur') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-3xl mb-2">🌊</div>
                                <div class="text-lg font-semibold">İzmir</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                İzmir'de Mikrofon Süngeri Baskı
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                İzmir'de baskı yapan yerler nerede? Güvenilir çözüm İstanbul'da! Hızlı kargo ile hizmet.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">4 dakika okuma</span>
                                <a href="{{ route('blog.izmir-mikrofon-sungeri-baski') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-40 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-3xl mb-2">🏛️</div>
                                <div class="text-lg font-semibold">Ankara</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Ankara'da Mikrofon Süngeri Baskısı
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Başkent'te baskı nerede yaptırılır? İstanbul'dan Türkiye geneline profesyonel hizmet.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">4 dakika okuma</span>
                                <a href="{{ route('blog.ankara-mikrofon-sungeri-baski') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Product Varieties -->
            <div class="mb-10">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Ürün Çeşitleri ve Özellikler</h3>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-pink-400 to-pink-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">🔍</div>
                                <div class="text-lg font-semibold">Mini Boyut</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Küçük Mikrofon Süngeri Modelleri
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Minimal tasarım, maksimum etki. Yaka mikrofonları, mini mikrofonlar ve podcast ekipmanları
                                için.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">4 dakika okuma</span>
                                <a href="{{ route('blog.kucuk-mikrofon-sungeri') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                        <div class="h-48 bg-gradient-to-r from-cyan-400 to-cyan-600 flex items-center justify-center">
                            <div class="text-white text-center">
                                <div class="text-4xl mb-2">⭐</div>
                                <div class="text-lg font-semibold">Logo Baskılı</div>
                            </div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-semibold text-gray-900 mb-2">
                                Logolu Mikrofon Süngeri
                            </h4>
                            <p class="text-gray-600 text-sm mb-4">
                                Her yayında markanızı gösterin. Sürekli görünürlük, profesyonel görünüm ve ücretsiz reklam
                                etkisi.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">5 dakika okuma</span>
                                <a href="{{ route('blog.logolu-mikrofon-sungeri') }}"
                                    class="text-blue-600 text-sm font-medium hover:underline">
                                    Devamını Oku →
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>


        <!-- Newsletter Subscription -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-blue-600 to-blue-900 rounded-2xl p-8 text-white text-center">
                <h2 class="text-2xl font-bold mb-4">Blog Güncellemelerini Kaçırmayın!</h2>
                <p class="text-blue-100 mb-6 max-w-2xl mx-auto">
                    Yeni rehberler, fiyat güncellemeleri ve uzman tavsiyeleri için e-posta listemize katılın.
                </p>
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="text-center">
            <div class="bg-white rounded-2xl p-8 border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    Mikrofon Süngeri İhtiyacınız İçin
                </h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Blog yazılarımızda bulamadığınız sorularınız için uzman ekibimizle iletişime geçin. Profesyonel
                    danışmanlık ve hızlı çözümler için buradayız.
                </p>
                <div class="flex items-center justify-center">
                    <x-contact-buttons />
                </div>
            </div>
        </section>
    </main>
@endsection
