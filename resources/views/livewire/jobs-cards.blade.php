<div class="{{$bg}} pb-20">
    <div id="{{$categoria}}" class="max-w-screen-xl py-16 pb-12 mx-auto text-center md:px-28 md:text-start">
        <h2 class="text-4xl font-semibold uppercase md:text-[42px] font-roboto text-blanco">{{$categoria}}</h2>
        @if($mostrarBoton)
        <div class="mt-2">
            <a href=""
                class="text-[18px] text-center text-[#7C7C7C] hover:transition-all hover:text-rosa font-roboto">Solicitar
                reel
                por
                mail</a>
        </div>
        @endif
    </div>
    <div class="flex flex-wrap justify-center max-w-screen-xl gap-16 mx-auto ">
        @foreach($trabajos as $trabajo)
        <a href="#">
            <div class="max-w-[280px]">
                <img src="{{ asset('img/img_trabajos') . '/' . $trabajo->imagen }}" alt="">
                <div
                    class="text-[18px] font-semibold font-roboto mt-3
                    {{$categoria === 'Sound Designer' ? 'text-center md:text-center' : 'text-start md:text-start'}}">

                    <h3 class="mb-2 text-blanco">{{$trabajo->titulo}}</h3>

                    <div class="text-[#7C7C7C]">
                        <p>{{$trabajo->descripcion}}</p>
                        <p>{{$trabajo->anio_publicacion}}</p>
                    </div>

                </div>
            </div>
        </a>
        @endforeach

    </div>
</div>
