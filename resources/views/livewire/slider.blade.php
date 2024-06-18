<div>
    @if (!$id % 2 === 0)
    <div class="bg-black">
        <div class="grid items-start px-4 py-12 mx-auto md:px-16 lg:px-24 md:grid-cols-2 md:pt-24 max-w-screen-2xl">

            <div id="{{$categoria}}" class="flex flex-col justify-center">
                <h2
                    class="my-12 mb-4 text-4xl font-semibold text-center uppercase md:text-5xl text-blanco font-roboto md:mt-0 md:text-start">
                    {{$categoria}}</h2>

                @if($mostrarBoton)
                <div class="flex justify-center mb-6 md:justify-normal">
                    <a href=""
                        class=" text-xl text-[#7C7C7C] hover:transition-all hover:text-rosa font-roboto">Solicitar
                        reel por
                        mail</a>
                </div>
                @endif

            </div>

            <div class="px-8 md:px-0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        @foreach($trabajos as $trabajo)
                        <div class="swiper-slide md:w-[250px] lg:w-[230px]">
                            <img class="w-full" src="{{ asset('img/img_trabajos') . '/' . $trabajo->imagen }}" />
                        </div>
                        @endforeach

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

                <div class="flex justify-center mt-12 text-white md:mt-8 2xl:ml-14 md:justify-end">
                    <a href="{{route('jobs')}}#{{$categoria}}" class="py-2 text-base font-medium text-white uppercase transition-all duration-200 border-2 rounded hover:scale-110 px-7 font-roboto border-blanco focus:ring-gray-100">ver
                        más
                    </a>
                </div>

            </div>

        </div>
    </div>
    @endif
    <div class="bg-negro">
        <div class="grid items-start px-4 py-12 mx-auto md:px-16 lg:px-24 md:grid-cols-2 md:pt-24 max-w-screen-2xl">

            <div id="{{$categoria}}" class="flex flex-col justify-center order-2">
                <h2
                    class="my-12 mb-4 text-4xl font-semibold text-center uppercase md:text-5xl text-blanco font-roboto md:mt-0 md:text-end">
                    {{$categoria}}</h2>

                @if($mostrarBoton)
                <div class="flex justify-center mb-6 md:justify-normal">
                    <a href=""
                        class=" text-xl text-[#7C7C7C] hover:transition-all hover:text-rosa font-roboto">Solicitar
                        reel por
                        mail</a>
                </div>
                @endif

            </div>

            <div class="px-8 md:px-0">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        @foreach($trabajos as $trabajo)
                        <div class="swiper-slide md:w-[250px] lg:w-[230px]">
                            <img class="w-full" src="{{ asset('img/img_trabajos') . '/' . $trabajo->imagen }}" />
                        </div>
                        @endforeach

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

                <div class="flex justify-center mt-12 text-white md:mt-8 2xl:ml-14 md:justify-start">
                    <a href="{{route('jobs')}}#{{$categoria}}"
                        class="py-2 text-base font-medium text-white uppercase transition-all duration-200 border-2 rounded hover:scale-110 px-7 font-roboto border-blanco focus:ring-gray-100">ver
                        más
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 60,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
</script>
