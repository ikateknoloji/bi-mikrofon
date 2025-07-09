<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mikrofon Süngeri')</title>
    <meta name="description" content="@yield('meta_description', 'Logo baskılı mikrofon süngeri – Markanıza özel logo baskılı mikrofon süngerleri.')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Sosyal profiller rel="me" ile doğrulama --}}
    <link rel="me" href="{{ config('social.instagram') }}">
    <link rel="me" href="{{ config('social.linkedin') }}">
    <link rel="me" href="{{ config('social.twitter') }}">
    <link rel="me" href="{{ config('social.youtube') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/site.webmanifest') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">


    {{-- JSON-LD ile Schema.org sameAs --}}
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "bi mikrofon süngeri",
          "url": "https://bimikrofonsungeri.com",
          "logo": "https://bimikrofonsungeri.com/logo.png",
          "description": "Logo baskılı mikrofon süngeri sağlayıcısı",
          "foundingDate": "2025",
          "sameAs": [
            "https://www.instagram.com/bimikrofonsungeri/",
            "https://www.linkedin.com/company/bi-mikrofon-sungeri/",
            "https://x.com/bimicrophone",
            "https://www.youtube.com/@bimikrofonsungeri"
          ],
          "makesOffer": {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Product",
              "name": "Logo baskılı mikrofon süngeri",
              "description": "Markanıza özel, dayanıklı ve yüksek ses izolasyonlu mikrofon süngeri"
            }
          },
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Şehit Teğmen Mehmet Sarper Alus Sok. No:53, Akşemsettin Mah.",
            "addressLocality": "Fatih",
            "addressRegion": "İstanbul",
            "postalCode": "34100",
            "addressCountry": "TR"
          },          
          "priceRange": "₺900–₺1200",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+90-535-875-7884",
            "contactType": "customer service",
            "areaServed": "TR",
            "availableLanguage": ["Türkçe","İngilizce"]
          },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://bimikrofonsungeri.com/ara?q={search_term}",
            "query-input": "required name=search_term"
          }
        }
    </script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="font-outfit bg-white text-[#121010] pb-20 lg:pb-0">
    <!-- Desktop Navbar -->
    <div class="hidden lg:block">
        <x-navbar />
        <x-sidebar />
    </div>

    <!-- Mobile Top Header -->
    <div class="md:hidden fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-100 px-4 py-4 shadow-sm">
        <div class="flex items-center justify-between">
            <button onclick="goBack()"
                class="group flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-200 active:bg-gray-300 transition-all duration-200 active:scale-95">
                <svg class="w-5 h-5 text-gray-700 group-hover:text-gray-900 transition-colors duration-200"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <h1 class="text-lg font-semibold text-gray-900 truncate mx-4 flex-1 text-center">
                @yield('title', 'Mikrofon Süngeri')
            </h1>
            <div class="w-10 h-10"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="mt-0 lg:mt-[100px] ml-0 lg:ml-[90px] pt-20 lg:pt-0">
        @yield('content')
    </div>


    <x-mobile-navigation />


    <script>
        function goBack() {
            if ('vibrate' in navigator) navigator.vibrate(30);
            if (window.history.length > 1) window.history.back();
            else window.location.href = '/';
        }
        document.addEventListener('DOMContentLoaded', function() {
            const svgs = document.querySelectorAll('.lg\\:hidden svg');
            let fail = false;
            svgs.forEach(s => {
                if (!s.getBBox || s.getBBox().width === 0) fail = true
            });
            if (fail) {
                document.querySelector('.lg\\:hidden:not(#backup-nav)').style.display = 'none';
                document.getElementById('backup-nav').style.display = 'block';
            }
        });
        if ('vibrate' in navigator) {
            document.querySelectorAll('a[href^="tel:"], a[href*="wa.me"]').forEach(el =>
                el.addEventListener('click', () => navigator.vibrate([50, 30, 50]))
            );
        }
    </script>

    @stack('scripts')
</body>

</html>
