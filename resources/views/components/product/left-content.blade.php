<div
    class="col-span-12 lg:col-span-7 px-12 py-5 pb-32 font-outfit max-h-[calc(100vh-90px)] overflow-y-scroll custom-scroll">
    <div class="grid  md:grid-cols-3 gap-8">
        {{ $slot }}
    </div>
</div>

@once
    @push('styles')
        <style>
            .custom-scroll::-webkit-scrollbar {
                width: 6px;
            }

            .custom-scroll::-webkit-scrollbar-track {
                background: transparent;
            }

            .custom-scroll::-webkit-scrollbar-thumb {
                background-color: #FF4A3B;
                border: none;
            }

            .custom-scroll {
                scrollbar-width: thin;
                scrollbar-color: #FF4A3B transparent;
            }
        </style>
    @endpush
@endonce
