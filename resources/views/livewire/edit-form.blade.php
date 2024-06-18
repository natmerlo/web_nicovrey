<div class="px-4 mx-auto py-9 max-screen-2xl md:px-16 lg:px-24">
    <div>
        <h2 class="text-3xl font-semibold uppercase py-9 md:text-4xl font-roboto text-blanco">Editar</h2>
    </div>
    <div>

    </div>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 lg:grid-cols-3 md:gap-14">
            <div class="flex-col space-y-4">
                <div class="mb-5">
                    <label for="titulo" class="block mb-2 text-xl font-bold text-blanco font-roboto">Título</label>
                    <input type="text" name="titulo" id="titulo" class="block w-full px-3 py-2 bg-gray-50 font-varela"
                        placeholder="Ingresa el título" value="{{ old('titulo') }}" />
                    @error('titulo')
                    <div class="py-2 text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="descripcion"
                        class="block mb-2 text-xl font-bold text-blanco font-roboto">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion"
                        class="block w-full px-3 py-2 bg-gray-50 font-varela" placeholder="Ingresa la descripción"
                        value="{{ old('descripcion') }}" />
                </div>

                <div class="mb-5">
                    <label for="url" class="block mb-2 text-xl font-bold text-blanco font-roboto">URL</label>
                    <input type="text" name="url" id="url" class="block w-full px-3 py-2 bg-gray-50 font-varela"
                        placeholder="http://www.ejemplo.com" value="{{ old('url') }}" />
                    @error('url')
                    <div class="py-2 text-red-400">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="flex-col space-y-4">
                <div class="">
                    <label for="categoria"
                        class="block mb-2 text-xl font-bold text-blanco font-roboto">Categoría</label>
                    <div id="categoria" name="categoria" class="block w-full px-3 py-2 font-varela border-blanco">
                        <div class="mb-2">
                            <input type="checkbox" id="productor" name="categoria[]" value="Productor">
                            <label for="productor" class="ml-2 text-blanco">Productor</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="mix_mastering" name="categoria[]" value="Mix & Mastering">
                            <label for="mix_mastering" class="ml-2 text-blanco">Mix & Mastering</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="sound_designer" name="categoria[]" value="Sound Designer">
                            <label for="sound_designer" class="ml-2 text-blanco">Sound Designer</label>
                        </div>
                    </div>
                    @error('categoria')
                    <div class="py-2 text-red-400">{{ $message }}</div>
                    @enderror

                    <div class="lg:w-2/3">
                        <label for="anio_publicacion"
                            class="block mb-2 text-xl font-bold text-blanco font-roboto">Año</label>
                        <input type="number" id="anio_publicacion" name="anio_publicacion"
                            class="block w-full px-3 py-2 bg-gray-50 font-varela" value="{{ old('anio_publicacion') }}"
                            placeholder="Ingrese el año">
                        @error('anio_publicacion')
                        <div class="py-2 text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="lg:flex lg:justify-between">
                <div class="">
                    <label for="imagen" class="block mb-2 text-xl font-bold text-blanco font-roboto">Imágen</label>
                    <input type="file" id="imagen" name="imagen" class="block w-full py-3 font-varela">
                </div>
            </div>
        </div>

        <hr class="hidden md:block md:mt-8 lg:mt-12 text-gris">

        <div class="flex justify-center gap-6 p-6 md:p-0 md:mt-8 md:justify-end ">

            @livewire('Button', ['buttonText' => 'Volver'])
            @livewire('Button', [
            'buttonText' => 'Guardar',
            'type' => 'submit',
            'bgClass' => 'white',
            'textClass' => 'black'
            ])

        </div>


    </form>
</div>
