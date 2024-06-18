<nav class="fixed top-0 z-20 w-full bg-negro start-0 font-roboto text-blanco">
    <div class="flex justify-between px-4 mx-auto py-7 max-w-screen-2xl md:px-12">
        <div>
            <a class="uppercase transition-all hover:text-rosa" target="_blank" href="{{route('index')}}">nicovrey.com.ar</a>
        </div>

        <form action="{{ route('logout.process') }}" method="POST">
            @csrf
            <button class="uppercase transition-all hover:text-rosa">Hola! {{ auth()->user()->name }} (Cerrar
                Sesión)</button>
        </form>

    </div>
</nav>
