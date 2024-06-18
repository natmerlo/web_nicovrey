<div class="{{$bg}}">
    <div class="grid items-start px-4 py-12  md:px-16 lg:px-24 md:grid-cols-2 md:pt-24 max-w-screen-2xl mx-auto">

        <div class="flex flex-col justify-center order-1">
            <h2
                class="my-12 mb-4 text-4xl font-semibold text-center uppercase  md:text-5xl text-blanco font-roboto md:mt-0 {{$h2Class}}">
               {{$categoria}}</h2>

            {{-- Reemplazar por condicional por categoria --}}
            @if($mostrarBoton)
            <div class="flex mb-6 justify-center {{$linkClass}}">
                <a href="" class=" text-xl text-[#7C7C7C] hover:transition-all hover:text-rosa font-roboto">Solicitar
                    reel por
                    mail</a>
            </div>
            @endif

        </div>

        <div class="px-8 md:px-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach($trabajos as $trabajo)
                    <div class="swiper-slide md:w-[230px]">
                        <img src="{{ asset('img/img_trabajos') . '/' . $trabajo->imagen }}" />
                        <p class="text-white">{{$trabajo->titulo}}</p>
                    </div>
                    @endforeach

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

            <div class="flex justify-center mt-12 md:mt-8 2xl:ml-14 {{$buttonClass}}">
               @livewire('button', ['buttonText' => 'Ver más'])
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
