@extends('layouts.app')

@section('title', 'Mikrofon Süngeri Nedir? Ne İşe Yarar ve Neden Önemlidir? | Bi Mikrofon Süngeri')

@section('meta_description',
    'Mikrofon süngeri nedir, ne işe yarar? Ses kalitesini artıran, rüzgar sesini engelleyen
    mikrofon süngerinin avantajları, fiyatları ve kullanım alanları hakkında detaylı bilgi.')

@section('content')
    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 text-sm">
            <ol class="flex items-center space-x-2 text-gray-500">
                <li><a href="/" class="hover:text-blue-600">Ana Sayfa</a></li>
                <li class="before:content-['/'] before:mx-2">Blog</li>
                <li class="before:content-['/'] before:mx-2 text-gray-900">Mikrofon Süngeri Nedir</li>
            </ol>
        </nav>

        <!-- Article -->
        <article class="bg-white rounded-lg shadow-sm p-8">
            <!-- Article Header -->
            <header class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                    Mikrofon Süngeri Nedir? Ne İşe Yarar ve Neden Önemlidir?
                </h1>
                <div class="flex items-center text-gray-500 text-sm mb-6">
                    <time datetime="2025-07-09">09.07.2025</time>
                    <span class="mx-2">•</span>
                    <span>4 dakika okuma</span>
                    <span class="mx-2">•</span>
                    <span>Ses Ekipmanları</span>
                </div>
                <div class="w-full h-64 rounded-lg mb-8 flex items-center justify-center bg-center bg-cover bg-no-repeat"
                    style="background-image: url('/assets/images/bg/logo-baskili-mikrofon-sungeri.jpg');">
                </div>
            </header>

            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                <!-- Introduction -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Giriş</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Mikrofon süngeri, ses kayıtlarında kaliteyi artırmak, dış sesleri engellemek ve mikrofonu korumak
                        için kullanılan pratik bir ekipmandır. Hem amatör hem de profesyonel kullanıcılar tarafından tercih
                        edilir.
                    </p>
                </section>

                <!-- What is Microphone Foam -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Mikrofon Süngeri Nedir?</h2>
                    <div class="bg-blue-50 border border-blue-200 p-6 rounded-lg">
                        <p class="text-gray-700 leading-relaxed">
                            Mikrofon süngeri, mikrofon başlığına takılan, genellikle köpük malzemeden üretilmiş bir ses
                            filtresidir. Farklı renk, şekil ve boyutlarda üretilir.
                        </p>
                    </div>
                </section>

                <!-- What Does It Do -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Ne İşe Yarar?</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Ses Kalitesi</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-2 mt-1">•</span>
                                    Rüzgar ve nefes sesini azaltır
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-2 mt-1">•</span>
                                    P, B, T gibi patlayıcı sesleri yumuşatır
                                </li>
                            </ul>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Koruma ve Tanıtım</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-purple-600 mr-2 mt-1">•</span>
                                    Toz, nem ve tükürükten mikrofonu korur
                                </li>
                                <li class="flex items-start">
                                    <span class="text-purple-600 mr-2 mt-1">•</span>
                                    Logo baskısıyla marka görünürlüğü sağlar
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Usage Areas -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Nerelerde Kullanılır?</h2>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-700">
                                    <div class="w-2 h-2 bg-red-500 rounded-full mr-3"></div>
                                    YouTube yayınları
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                    Radio/TV stüdyoları
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                    Podcast çekimleri
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="flex items-center text-gray-700">
                                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                                    Sahne ve organizasyonlar
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></div>
                                    Belediye, kurum, firma sunumları
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Pricing -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Mikrofon Süngeri Fiyatları (Güncel)</h2>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-lg">
                        <p class="text-gray-700 mb-4">
                            Fiyatlar genellikle adet, sünger kalitesi ve logo baskı durumuna göre değişmektedir.
                        </p>
                        <div class="bg-yellow-100 p-4 rounded-lg mb-4">
                            <p class="text-lg font-semibold text-gray-900 mb-2">
                                Bugünkü tarih itibarıyla güncel fiyat:
                            </p>
                            <div class="text-xl font-bold text-yellow-700">
                                Logo baskılı sünger: ₺750 + ₺150 KDV = ₺900 / adet
                            </div>
                        </div>
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <p class="text-blue-800 font-medium">
                                Toplu alımlarda özel fiyat teklifleri sunulmaktadır.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Selection Criteria -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Mikrofon Süngeri Seçerken Nelere Dikkat Edilmeli?</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Teknik Özellikler</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-3 mt-1">✓</span>
                                    <span class="text-gray-700">Mikrofon tipinize uygun ölçü</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-3 mt-1">✓</span>
                                    <span class="text-gray-700">Kaliteli, yoğun sünger malzemesi</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white border border-gray-200 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Görsel Özellikler</h3>
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-3 mt-1">✓</span>
                                    <span class="text-gray-700">Baskı kalitesi (logo solmamalı)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-600 mr-3 mt-1">✓</span>
                                    <span class="text-gray-700">Renk ve şekil seçenekleri</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Summary -->
                <section class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Özet</h2>
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 border border-blue-200 p-6 rounded-lg">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Mikrofon süngeri küçük ama etkili bir ekipmandır. Hem ses kalitesini iyileştirir hem de marka
                            bilinirliği sunar. Profesyonel görünüm isteyen herkesin mutlaka edinmesi gereken bir üründür.
                        </p>
                    </div>
                </section>

                <!-- Benefits Highlight -->
                <section class="mb-8">
                    <div class="bg-gradient-to-r from-green-100 to-blue-100 p-8 rounded-lg">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Neden Mikrofon Süngeri Kullanmalısınız?
                        </h3>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="text-center">
                                <div class="bg-white p-4 rounded-lg shadow-sm">
                                    <div class="text-2xl mb-2">🎵</div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Ses Kalitesi</h4>
                                    <p class="text-sm text-gray-600">Daha temiz ve profesyonel ses</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-white p-4 rounded-lg shadow-sm">
                                    <div class="text-2xl mb-2">🛡️</div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Koruma</h4>
                                    <p class="text-sm text-gray-600">Mikrofonu zararlı etkenlerden korur</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-white p-4 rounded-lg shadow-sm">
                                    <div class="text-2xl mb-2">🏢</div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Marka Tanıtımı</h4>
                                    <p class="text-sm text-gray-600">Logo baskısıyla görünürlük</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Call to Action -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-900 text-white p-8 rounded-lg mt-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4">Baskılı Mikrofon Süngeri Siparişi</h3>
                    <p class="mb-6">
                        Markanızı öne çıkaran profesyonel mikrofon süngeri baskısı için hemen iletişime geçin!
                    </p>
                    <div class="flex items-center justify-center">
                        <x-contact-buttons />
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-8 bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sık Sorulan Sorular</h3>
                <div class="space-y-4">
                    <div class="bg-white p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Mikrofon süngeri ne kadar dayanır?</h4>
                        <p class="text-gray-600 text-sm">Kaliteli süngerler düzenli kullanımda 6-12 ay dayanabilir.
                            Kullanım sıklığına göre değişir.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Logo baskısı solur mu?</h4>
                        <p class="text-gray-600 text-sm">Kaliteli baskılar kullanıldığında logo uzun süre solmaz
                            ve dayanıklı olur.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-900 mb-2">Minimum sipariş adedi var mı?</h4>
                        <p class="text-gray-600 text-sm">Tek adet siparişler de kabul edilir. Toplu siparişlerde indirimli
                            fiyatlar uygulanır.</p>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection
