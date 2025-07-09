@extends('layouts.app')

@section('title', 'Mikrofon Süngeri Üretimi ve Logo Baskı Hizmeti | Bi Mikrofon Süngeri')

@section('meta_description',
    'Kurumsal görünüm için baskılı mikrofon süngeri üretimi ve özel logo baskı hizmeti. Renkli,
    kesimli ve dayanıklı süngerler ₺900/adet fiyatla. Türkiye geneline hızlı teslimat.')


    @push('head')
        <!-- Open Graph -->
        <meta property="og:title" content="Mikrofon Süngeri Üretimi ve Logo Baskı Hizmeti | Bi Mikrofon Süngeri">
        <meta property="og:description"
            content="Baskılı mikrofon süngeri üretimi, logo baskı, özel kesim ve renkli sünger seçenekleri. Profesyonel görünüm ve hızlı teslimat.">
        <meta property="og:image" content="{{ asset('products/ucgen/ucgen-mikrofon-sungeri-7.jpg') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="article">
        <meta property="og:site_name" content="Bi Mikrofon Süngeri">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Mikrofon Süngeri Üretimi ve Logo Baskı Hizmeti | Bi Mikrofon Süngeri">
        <meta name="twitter:description"
            content="Profesyonel baskılı mikrofon süngeri hizmeti. Renkli, logolu, özel tasarımlar.">
        <meta name="twitter:image" content="{{ asset('products/ucgen/ucgen-mikrofon-sungeri-7.jpg') }}">

        <script type="application/ld+json">
         {
           "@context": "https://schema.org",
           "@type": "Article",
           "headline": "Mikrofon Süngeri Üretimi ve Logo Baskı Hizmeti | Bi Mikrofon Süngeri",
           "description": "Kurumsal görünüm için baskılı mikrofon süngeri üretimi ve özel logo baskı hizmeti. Renkli, kesimli ve dayanıklı süngerler ₺900/adet fiyatla. Türkiye geneline hızlı teslimat.",
           "image": "{{ asset('products/ucgen/ucgen-mikrofon-sungeri-7.jpg') }}",
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
           "datePublished": "2025-07-09",
           "dateModified": "2025-07-09",
           "mainEntityOfPage": {
             "@type": "WebPage",
             "@id": "{{ url()->current() }}"
           }
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
                <li class="before:content-['/'] before:mx-2 text-gray-900">Mikrofon Süngeri Üretimi</li>
            </ol>
        </nav>

        <!-- Article -->
        <article class="bg-white rounded-lg shadow-sm p-8">
            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                    Mikrofon Süngeri Üretimi ve Baskı Hizmeti Bizden!
                </h1>
                <div class="flex items-center text-gray-500 text-sm mb-6">
                    <time datetime="2025-07-09">09.07.2025</time>
                    <span class="mx-2">•</span>
                    <span>4 dakika okuma</span>
                    <span class="mx-2">•</span>
                    <span>Hizmetlerimiz</span>
                </div>
                <div class="w-full h-64 lg:h-[600px] rounded-lg mb-8 flex items-center justify-center bg-center bg-cover bg-no-repeat"
                    style="background-image: url('/products/ucgen/ucgen-mikrofon-sungeri-7.jpg');">
                </div>
            </header>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                <!-- Introduction -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 border-l-4 border-blue-500 p-6 rounded-r-lg">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Marka görünürlüğü günümüzde her alanda önemli hale geldi. Etkinlikler, röportajlar, sahne
                            organizasyonları ve sosyal medya içeriklerinde mikrofonlar artık sadece bir ses aktarıcısı
                            değil, aynı zamanda bir tanıtım aracıdır. <strong>İşte bu noktada devreye biz
                                giriyoruz.</strong>
                        </p>
                    </div>
                </section>

                <!-- Corporate Appearance -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kurumsal Görünüm İçin Mikrofon Süngeri</h2>

                    <div class="bg-gradient-to-r from-green-50 to-blue-50 p-8 rounded-lg border border-green-200">
                        <div class="flex items-start">
                            <div class="bg-green-100 p-4 rounded-full mr-6 flex-shrink-0">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 leading-relaxed text-lg mb-4">
                                    Müşterilerimize <strong>logolu, renkli ve özel kesim mikrofon süngeri üretimi</strong>
                                    sunuyoruz.
                                </p>
                                <p class="text-gray-700 leading-relaxed">
                                    Gerek bireysel yayıncılar gerekse büyük kurumlar için hazırladığımız süngerler, her
                                    ortamda profesyonel bir görünüm sağlar.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- What We Offer -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Neler Sunuyoruz?</h2>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">Esnek Sipariş Seçenekleri</h3>
                            </div>
                            <p class="text-gray-600">Tekli ya da toplu sipariş imkanı sunuyoruz. İhtiyacınıza göre üretim
                                yapıyoruz.</p>
                        </div>

                        <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">Özel Tasarım</h3>
                            </div>
                            <p class="text-gray-600">Logo baskılı, özel tasarımlı süngerler. Markanıza özel çözümler
                                üretiyoruz.</p>
                        </div>

                        <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">Çeşitli Formlar</h3>
                            </div>
                            <p class="text-gray-600">Kare, yuvarlak veya üçgen formlarda üretim. İsteğinize göre özel kesim
                                yapıyoruz.</p>
                        </div>

                        <div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">Hızlı Kargo</h3>
                            </div>
                            <p class="text-gray-600">Türkiye geneline hızlı kargo hizmeti. Siparişiniz en kısa sürede
                                elinizde.</p>
                        </div>
                    </div>
                </section>

                <!-- Target Audience -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kimler İçin Uygun?</h2>

                    <div class="bg-gray-50 p-8 rounded-lg">
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Medya ve Yayıncılık</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700">TV ve radyo kanalları</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700">YouTuber'lar ve yayıncılar</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">Kurumsal ve Organizasyon</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700">Belediyeler, dernekler, ajanslar</span>
                                    </li>
                                    <li class="flex items-center">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                        <span class="text-gray-700">Etkinlik ve organizasyon firmaları</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Pricing 2025 -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Fiyatlandırma (2025)</h2>

                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-2 border-yellow-300 rounded-xl p-8">
                        <div class="text-center mb-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Logo baskılı mikrofon süngeri fiyatı:</h3>
                            <div class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">
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
                                <p class="text-orange-800 font-semibold">Toplu alımlarda özel teklifler sunuyoruz.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Easy Ordering -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Sipariş Vermek Çok Kolay</h2>

                    <div class="bg-gradient-to-r from-blue-50 to-green-50 p-8 rounded-lg border border-blue-200">
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-2xl font-bold text-blue-600">1</span>
                                </div>
                                <h3 class="font-semibold text-gray-900 mb-2">Logo Gönder</h3>
                                <p class="text-gray-600 text-sm">Logo dosyanızı ve adet bilgisini iletin</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-2xl font-bold text-green-600">2</span>
                                </div>
                                <h3 class="font-semibold text-gray-900 mb-2">Hızlı Üretim</h3>
                                <p class="text-gray-600 text-sm">Profesyonel ekibimiz hızla üretiyor</p>
                            </div>
                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-2xl font-bold text-purple-600">3</span>
                                </div>
                                <h3 class="font-semibold text-gray-900 mb-2">Özenli Teslimat</h3>
                                <p class="text-gray-600 text-sm">Garantili teslimat ile elinizde</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Why Choose Us -->
                <section class="mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Neden Bizi Tercih Etmelisiniz?</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-3">Kalite Garantisi</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li>• Yüksek kalite sünger malzemesi</li>
                                <li>• UV dayanımlı baskı teknolojisi</li>
                                <li>• Uzun ömürlü kullanım</li>
                            </ul>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-3">Hızlı Hizmet</h4>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li>• Hızlı üretim süreci</li>
                                <li>• Türkiye geneli kargo</li>
                                <li>• 7/24 müşteri desteği</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Final Call -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-8 rounded-lg text-center">
                        <h3 class="text-2xl font-bold mb-4">Siz de mikrofonunuzu markanıza özel hale getirin!</h3>
                        <p class="text-lg mb-6">Profesyonel görünüm ve marka bilinirliği için hemen bizimle iletişime
                            geçin.</p>
                    </div>
                </section>
            </div>

            <!-- Call to Action -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-900 text-white p-8 rounded-lg mt-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Hemen Sipariş Verin!</h3>
                    <p class="mb-6">
                        Logo dosyanızı gönderin, profesyonel mikrofon süngeri üretimi için bizimle iletişime geçin!
                    </p>
                    <div class="flex items-center justify-center">
                        <x-contact-buttons />
                    </div>
                </div>
            </div>

            <!-- WhatsApp Quick Contact -->
            <div class="mt-8 bg-green-50 border border-green-200 p-6 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h4 class="font-semibold text-green-900 mb-2">Hızlı İletişim</h4>
                        <p class="text-green-700 text-sm">WhatsApp üzerinden anında teklif alın</p>
                    </div>
                    <a href="https://wa.me/905358757884?text=Merhaba,%20ahsap%20plaket%20hakkında%20bilgi%20almak%20istiyorum."
                        class="bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition-colors flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>

            <!-- Service Guarantee -->
            <div class="mt-8 bg-blue-50 p-6 rounded-lg">
                <h4 class="font-semibold text-blue-900 mb-4">Hizmet Garantimiz</h4>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="text-center">
                        <div class="text-2xl mb-2">⚡</div>
                        <div class="font-semibold text-blue-900">Hızlı Üretim</div>
                        <div class="text-sm text-blue-700">3-5 iş günü</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl mb-2">🎯</div>
                        <div class="font-semibold text-blue-900">Kalite Garantisi</div>
                        <div class="text-sm text-blue-700">%100 memnuniyet</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl mb-2">🚚</div>
                        <div class="font-semibold text-blue-900">Güvenli Kargo</div>
                        <div class="text-sm text-blue-700">Türkiye geneli</div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection
