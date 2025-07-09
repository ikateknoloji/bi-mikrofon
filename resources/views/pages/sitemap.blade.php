{{-- resources/views/pages/sitemap.blade.php --}}
@extends('layouts.default')
@section('title', 'Site Haritası - Tüm Sayfalarımız')
@section('content')
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">Site Haritası</h1>
                <div class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-4">
                    Site Navigasyonu
                </div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Sitemizde bulunan tüm sayfaları kolayca keşfedin. Mikrofon süngeri baskı hizmetlerimizden kurumsal
                    bilgilerimize,
                    blog yazılarımızdan iletişim sayfamıza kadar her şeye buradan ulaşabilirsiniz.
                </p>
            </div>

            <!-- Main Navigation Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16">
                <!-- Ana Sayfalar Kartı -->
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="mb-6">
                        <div class="inline-block px-3 py-1 bg-red-600 text-white rounded-lg text-sm font-semibold mb-3">
                            ANA SAYFALAR
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Temel Sayfalarımız</h2>
                        <p class="text-gray-600 leading-relaxed">
                            Sitemizin ana bölümlerini keşfedin. Anasayfamızdan başlayarak kurumsal kimliğimizi,
                            blog yazılarımızı ve iletişim bilgilerimizi inceleyebilirsiniz.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="group">
                            <a href="{{ route('anasayfa') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Ana Sayfa</h3>
                                <p class="text-sm text-gray-600">Sitemizin giriş sayfası ve genel tanıtım</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('kurumsal') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Kurumsal</h3>
                                <p class="text-sm text-gray-600">Şirket tarihçemiz, vizyonumuz ve değerlerimiz</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('blog') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Blog</h3>
                                <p class="text-sm text-gray-600">Sektörel haberler, ipuçları ve güncel yazılar</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('iletisim') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">İletişim</h3>
                                <p class="text-sm text-gray-600">Adres, telefon ve iletişim formu bilgileri</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mikrofon Süngeri Ürünleri Kartı -->
                <div
                    class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="mb-6">
                        <div class="inline-block px-3 py-1 bg-red-600 text-white rounded-lg text-sm font-semibold mb-3">
                            MİKROFON SÜNGERİ ÜRÜNLERİ
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-3">Özel Baskı Çözümlerimiz</h2>
                        <p class="text-gray-600 leading-relaxed">
                            Yılların deneyimi ile sunduğumuz özel mikrofon süngeri baskı hizmetlerimizi keşfedin.
                            Her biri özenle tasarlanmış ve kaliteli malzemelerle üretilmiş ürünlerimiz.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="group">
                            <a href="{{ route('silindir') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Silindir Mikrofon
                                    Süngeri</h3>
                                <p class="text-sm text-gray-600">Klasik silindir formda özel baskılı mikrofon süngerleri</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('kare') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Kare Mikrofon Süngeri
                                </h3>
                                <p class="text-sm text-gray-600">Modern kare tasarım ile özel baskılı süngeler</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('ucgen') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Üçgen Mikrofon Süngeri
                                </h3>
                                <p class="text-sm text-gray-600">Dinamik üçgen formda özel tasarım süngeler</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('top') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Top Mikrofon Süngeri
                                </h3>
                                <p class="text-sm text-gray-600">Yuvarlak top formunda eğlenceli baskılı süngeler</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('damla') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Damla Mikrofon Süngeri
                                </h3>
                                <p class="text-sm text-gray-600">Şık damla formunda özel tasarım süngeler</p>
                            </a>
                        </div>
                        <div class="group">
                            <a href="{{ route('reklam-kupu') }}"
                                class="block p-4 rounded-xl bg-gray-50 hover:bg-red-50 transition-all duration-200 border-l-4 border-red-500">
                                <h3 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">Reklam Küpü Mikrofon
                                    Süngeri</h3>
                                <p class="text-sm text-gray-600">Reklam amaçlı özel küp formunda baskılı süngeler</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Site Bilgileri ve Hizmet Detayları -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Site Bilgileri -->
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                    <div class="mb-4">
                        <div class="inline-block px-3 py-1 bg-green-500 text-white rounded-lg text-xs font-semibold mb-2">
                            SİTE BİLGİLERİ
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Yasal ve Bilgilendirme</h3>
                    </div>
                    <div class="space-y-3">
                        <a href="{{ route('sitemap') }}"
                            class="block p-3 rounded-lg bg-green-50 hover:bg-green-100 transition-colors duration-200">
                            <span class="font-medium text-gray-900">Site Haritası</span>
                            <p class="text-xs text-gray-600 mt-1">Tüm sayfaların listesi</p>
                        </a>
                        <div class="p-3 rounded-lg bg-gray-50">
                            <span class="font-medium text-gray-500">Gizlilik Politikası</span>
                            <p class="text-xs text-gray-500 mt-1">Yakında eklenecek</p>
                        </div>
                        <div class="p-3 rounded-lg bg-gray-50">
                            <span class="font-medium text-gray-500">Kullanım Koşulları</span>
                            <p class="text-xs text-gray-500 mt-1">Yakında eklenecek</p>
                        </div>
                        <div class="p-3 rounded-lg bg-gray-50">
                            <span class="font-medium text-gray-500">Sıkça Sorulan Sorular</span>
                            <p class="text-xs text-gray-500 mt-1">Yakında eklenecek</p>
                        </div>
                    </div>
                </div>

                <!-- Süngeri Malzemeleri -->
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                    <div class="mb-4">
                        <div class="inline-block px-3 py-1 bg-blue-500 text-white rounded-lg text-xs font-semibold mb-2">
                            MALZEME ÇEŞİTLERİ
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Kullandığımız Malzemeler</h3>
                    </div>
                    <div class="space-y-3 text-sm">
                        <div class="p-3 rounded-lg bg-blue-50">
                            <span class="font-medium text-blue-900">Premium Süngeri</span>
                            <p class="text-blue-700 text-xs mt-1">Yüksek kaliteli akustik süngeri</p>
                        </div>
                        <div class="p-3 rounded-lg bg-purple-50">
                            <span class="font-medium text-purple-900">Dayanıklı Baskı</span>
                            <p class="text-purple-700 text-xs mt-1">Solmayan dayanıklı baskı</p>
                        </div>
                        <div class="p-3 rounded-lg bg-amber-50">
                            <span class="font-medium text-amber-900">Esnek Yapı</span>
                            <p class="text-amber-700 text-xs mt-1">Uzun ömürlü esnek süngeri</p>
                        </div>
                        <div class="p-3 rounded-lg bg-indigo-50">
                            <span class="font-medium text-indigo-900">Çevre Dostu</span>
                            <p class="text-indigo-700 text-xs mt-1">Geri dönüştürülebilir malzeme</p>
                        </div>
                    </div>
                </div>

                <!-- Hizmet Avantajları -->
                <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300">
                    <div class="mb-4">
                        <div class="inline-block px-3 py-1 bg-red-500 text-white rounded-lg text-xs font-semibold mb-2">
                            AVANTAJLARIMIZ
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Neden Bizi Tercih Edin?</h3>
                    </div>
                    <div class="space-y-3 text-sm">
                        <div class="p-3 rounded-lg bg-red-50">
                            <span class="font-medium text-red-900">Hızlı Üretim</span>
                            <p class="text-red-700 text-xs mt-1">2-3 iş günü içinde teslim</p>
                        </div>
                        <div class="p-3 rounded-lg bg-green-50">
                            <span class="font-medium text-green-900">Özel Tasarım</span>
                            <p class="text-green-700 text-xs mt-1">Size özel logo ve tasarım</p>
                        </div>
                        <div class="p-3 rounded-lg bg-blue-50">
                            <span class="font-medium text-blue-900">Kalite Garantisi</span>
                            <p class="text-blue-700 text-xs mt-1">En kaliteli mazemelerle mikrofon süngerinizi
                                özelleştiriyoruz</p>
                        </div>
                        <div class="p-3 rounded-lg bg-purple-50">
                            <span class="font-medium text-purple-900">Toptan Fiyat</span>
                            <p class="text-purple-700 text-xs mt-1">Büyük siparişlerde indirim</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hızlı Erişim Butonları -->
            <div class="bg-white rounded-2xl p-8 mb-12">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Hızlı Erişim</h3>
                    <p class="text-gray-600">En çok ziyaret edilen sayfalarımıza tek tıkla ulaşın</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="{{ route('anasayfa') }}"
                        class="group text-center p-6 rounded-xl bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-full mx-auto mb-3 flex items-center justify-center text-white font-bold text-lg">
                            A
                        </div>
                        <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 mb-1">Ana Sayfa</h4>
                        <p class="text-xs text-gray-600">Sitemizin giriş noktası</p>
                    </a>
                    <a href="{{ route('kurumsal') }}"
                        class="group text-center p-6 rounded-xl bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-12 h-12 bg-purple-500 rounded-full mx-auto mb-3 flex items-center justify-center text-white font-bold text-lg">
                            K
                        </div>
                        <h4 class="font-semibold text-gray-900 group-hover:text-purple-600 mb-1">Kurumsal</h4>
                        <p class="text-xs text-gray-600">Şirket bilgilerimiz</p>
                    </a>
                    <a href="{{ route('blog') }}"
                        class="group text-center p-6 rounded-xl bg-gradient-to-br from-green-50 to-green-100 hover:from-green-100 hover:to-green-200 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-12 h-12 bg-green-500 rounded-full mx-auto mb-3 flex items-center justify-center text-white font-bold text-lg">
                            B
                        </div>
                        <h4 class="font-semibold text-gray-900 group-hover:text-green-600 mb-1">Blog</h4>
                        <p class="text-xs text-gray-600">Güncel yazılarımız</p>
                    </a>
                    <a href="{{ route('iletisim') }}"
                        class="group text-center p-6 rounded-xl bg-gradient-to-br from-red-50 to-red-100 hover:from-red-100 hover:to-red-200 transition-all duration-300 transform hover:scale-105">
                        <div
                            class="w-12 h-12 bg-red-500 rounded-full mx-auto mb-3 flex items-center justify-center text-white font-bold text-lg">
                            İ
                        </div>
                        <h4 class="font-semibold text-gray-900 group-hover:text-red-600 mb-1">İletişim</h4>
                        <p class="text-xs text-gray-600">Bizimle iletişime geçin</p>
                    </a>
                </div>
            </div>

            <!-- Ürün Kategorileri Detaylı Görünüm -->
            <div class="bg-white rounded-2xl p-8 mb-12">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Mikrofon Süngeri Ürün Kategorileri</h3>
                    <p class="text-gray-600">Farklı form ve tasarımlarda özel baskılı mikrofon süngerleri</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <a href="{{ route('silindir') }}"
                        class="group p-6 rounded-xl border-2 border-gray-100 hover:border-red-300 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-16 h-16 bg-red-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-red-200 transition-colors">
                            <div class="w-8 h-8 bg-red-500 rounded-full"></div>
                        </div>
                        <h4 class="font-semibold text-gray-900 text-center mb-2 group-hover:text-red-600">Silindir Form
                        </h4>
                        <p class="text-sm text-gray-600 text-center">Klasik ve yaygın kullanılan silindir mikrofon süngeri
                        </p>
                    </a>
                    <a href="{{ route('kare') }}"
                        class="group p-6 rounded-xl border-2 border-gray-100 hover:border-blue-300 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-16 h-16 bg-blue-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                            <div class="w-8 h-8 bg-blue-500 rounded-sm"></div>
                        </div>
                        <h4 class="font-semibold text-gray-900 text-center mb-2 group-hover:text-blue-600">Kare Form</h4>
                        <p class="text-sm text-gray-600 text-center">Modern ve şık görünümlü kare mikrofon süngeri</p>
                    </a>
                    <a href="{{ route('ucgen') }}"
                        class="group p-6 rounded-xl border-2 border-gray-100 hover:border-green-300 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-green-200 transition-colors">
                            <div class="w-0 h-0"
                                style="border-left: 6px solid transparent; border-right: 6px solid transparent; border-bottom: 10px solid #10b981;">
                            </div>
                        </div>
                        <h4 class="font-semibold text-gray-900 text-center mb-2 group-hover:text-green-600">Üçgen Form</h4>
                        <p class="text-sm text-gray-600 text-center">Dinamik ve dikkat çekici üçgen mikrofon süngeri</p>
                    </a>
                    <a href="{{ route('top') }}"
                        class="group p-6 rounded-xl border-2 border-gray-100 hover:border-purple-300 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-16 h-16 bg-purple-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                            <div class="w-8 h-8 bg-purple-500 rounded-full"></div>
                        </div>
                        <h4 class="font-semibold text-gray-900 text-center mb-2 group-hover:text-purple-600">Top Form</h4>
                        <p class="text-sm text-gray-600 text-center">Eğlenceli ve yumuşak top formunda mikrofon süngeri</p>
                    </a>
                    <a href="{{ route('damla') }}"
                        class="group p-6 rounded-xl border-2 border-gray-100 hover:border-indigo-300 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-16 h-16 bg-indigo-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-indigo-200 transition-colors">
                            <div class="w-6 h-8 bg-indigo-500 rounded-full rounded-tl-none transform rotate-45"></div>
                        </div>
                        <h4 class="font-semibold text-gray-900 text-center mb-2 group-hover:text-indigo-600">Damla Form
                        </h4>
                        <p class="text-sm text-gray-600 text-center">Şık ve zarif damla formunda mikrofon süngeri</p>
                    </a>
                    <a href="{{ route('reklam-kupu') }}"
                        class="group p-6 rounded-xl border-2 border-gray-100 hover:border-orange-300 transition-all duration-300 hover:shadow-lg">
                        <div
                            class="w-16 h-16 bg-orange-100 rounded-full mx-auto mb-4 flex items-center justify-center group-hover:bg-orange-200 transition-colors">
                            <div class="w-8 h-8 bg-orange-500 rounded-sm"></div>
                        </div>
                        <h4 class="font-semibold text-gray-900 text-center mb-2 group-hover:text-orange-600">Reklam Küpü
                        </h4>
                        <p class="text-sm text-gray-600 text-center">Reklam amaçlı özel tasarım küp mikrofon süngeri</p>
                    </a>
                </div>
            </div>

            <!-- İstatistikler ve Footer Bilgisi -->
            <div class="bg-gradient-to-r from-blue-50 to-blue-50 rounded-2xl p-8 text-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-6">
                    <div>
                        <div class="text-3xl font-bold text-blue-700 mb-2">
                            {{ count(['Ana Sayfa', 'Kurumsal', 'Blog', 'İletişim', 'Site Haritası', 'Silindir', 'Kare', 'Üçgen', 'Top', 'Damla', 'Reklam Küpü']) }}
                        </div>
                        <p class="text-blue-600">Toplam Sayfa</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-green-700 mb-2">6</div>
                        <p class="text-green-600">Ürün Kategorisi</p>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-purple-700 mb-2">{{ date('Y') }}</div>
                        <p class="text-purple-600">Kuruluş Yılından Beri</p>
                    </div>
                </div>
                <div class="border-t border-blue-300 pt-6">
                    <p class="text-blue-800 text-sm mb-2">
                        Son güncelleme: {{ date('d.m.Y H:i') }}
                    </p>
                    <p class="text-blue-700 text-xs">
                        Bu site haritası düzenli olarak güncellenmektedir. Yeni sayfalar eklendiğinde otomatik olarak burada
                        görünecektir.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
