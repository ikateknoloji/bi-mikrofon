@props(['product'])

<a href="{{ url('mikrofon-sungeri/' . $product['productSlug']) }}">
    <div
        {{ $attributes->merge(['class' => 'flex flex-col items-center gap-6 relative rounded shadow-[0px_0px_3px_rgba(0,0,0,0.25)] hover:scale-95 transition-transform duration-300']) }}>

        {{-- Ürün Resmi --}}
        <img class="w-full h-72 object-cover" src="{{ $product['image'] }}" alt="{{ $product['altText'] }}" />

        {{-- SVG Badge --}}
        <div class="absolute top-8 -left-2">
            <svg width="38" height="19" viewBox="0 0 38 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.455002 0.317139L2.55417 0.886405H31.7646C33.0222 0.886405 34.0417 1.90588 34.0417 3.16347V16.2566C34.0417 17.5142 33.0222 18.5336 31.7646 18.5336H4.65334C4.65334 18.5336 3.30133 18.5336 2.55417 18.5336C1.80701 18.5336 0.455002 17.6798 0.455002 17.6798V0.317139Z"
                    fill="black" />
            </svg>
        </div>

        {{-- Başlık ve Fiyat --}}
        <div class="flex items-center relative w-full p-5">
            <div class="flex flex-col items-start gap-3 relative w-full">
                <div class="w-full text-black font-medium text-sm leading-5 relative">
                    {{ $product['title'] }}
                </div>
                <div class="flex items-center gap-6 relative w-full">
                    <div class="text-blue-500 font-bold text-sm leading-5 relative whitespace-nowrap w-fit">
                        750 + 150 KDV = 900
                    </div>
                </div>
            </div>

            {{-- Sağ üst icon --}}
            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M36.2134 18.3787C36.2134 28.3036 28.1545 36.3493 18.2134 36.3493C8.27225 36.3493 0.213379 28.3036 0.213379 18.3787C0.213379 8.45389 8.27225 0.408203 18.2134 0.408203C28.1545 0.408203 36.2134 8.45389 36.2134 18.3787Z"
                    fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.5926 13.4214H23.1788C23.5216 13.4214 23.7995 13.6989 23.7995 14.0411V19.6182C23.7995 19.9604 23.5216 20.2378 23.1788 20.2378C22.8361 20.2378 22.5582 19.9604 22.5582 19.6182V15.5371L14.3074 23.7744C14.065 24.0164 13.672 24.0164 13.4296 23.7744C13.1872 23.5324 13.1872 23.14 13.4296 22.898L21.6804 14.6608H17.5926C17.2498 14.6608 16.972 14.3833 16.972 14.0411C16.972 13.6989 17.2498 13.4214 17.5926 13.4214Z"
                    fill="white" />
            </svg>
        </div>
    </div>
</a>
