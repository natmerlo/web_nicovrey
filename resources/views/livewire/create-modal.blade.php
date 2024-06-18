<div>
    <!-- Modal toggle -->
    <button wire:click="showModal"
        class="py-2 text-base font-medium text-white uppercase transition-all duration-200 border-2 rounded hover:scale-110 px-7 font-roboto border-blanco focus:ring-gray-100"
        type="button">
        Nuevo registro
    </button>

    @if($modalShown)
    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="bg-[#000000b0] h-[100vh] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full max-h-full flex mt-[15px]">
        <div class="relative w-full max-w-4xl max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h2 class="text-2xl font-bold uppercase font-roboto">
                        Nuevo registro
                    </h2>
                    <button wire:click="hideModal" type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="grid gap-6 p-4 lg:grid-cols-3 md:p-6">
                    <div class="flex-col space-y-4">
                        <div class="mb-5">
                            <label for="titulo" class="block mb-2 font-bold font-roboto">Título</label>
                            <input type="text" wire:model="titulo" id="titulo"
                                class="block w-full px-3 py-2 bg-gray-100 font-varela" placeholder="Ingresa el título" />
                            @error('titulo')
                            <div class="py-2 text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="descripcion" class="block mb-2 font-bold font-roboto">Descripción</label>
                            <input type="text" wire:model="descripcion" id="descripcion"
                                class="block w-full px-3 py-2 bg-gray-100 font-varela"
                                placeholder="Ingresa la descripción" />
                        </div>

                        <div class="mb-5">
                            <label for="url" class="block mb-2 font-bold font-roboto">URL</label>
                            <input type="text" wire:model="url" id="url"
                                class="block w-full px-3 py-2 bg-gray-100 font-varela"
                                placeholder="http://www.ejemplo.com" />
                            @error('url')
                            <div class="py-2 text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex-col space-y-4">
                        <div class="">
                            <label for="categoria" class="block mb-2 font-bold font-roboto">Categoría</label>
                            <div id="categoria" name="categoria" class="block w-full px-3 py-2 font-varela bo">
                                <div class="mb-2">
                                    <label class="ml-2">
                                        <input type="checkbox" wire:model.live="categorias" value="1">
                                        Productor
                                    </label>
                                </div>
                                <div class="mb-2">
                                    <label class="ml-2">
                                        <input type="checkbox" wire:model.live="categorias" value="2">
                                        Mix & Mastering
                                    </label>
                                </div>
                                <div class="mb-2">
                                    <label class="ml-2">
                                        <input type="checkbox" wire:model.live="categorias" value="3">
                                        Sound Designer
                                    </label>
                                </div>
                                @error('categorias')
                                <div class="py-2 text-red-400">{{ $message }}</div>
                                @enderror
                                </div>

                            <div class="">
                                <label for="anio_publicacion" class="block mb-2 font-bold font-roboto">Año</label>
                                <input type="number" wire:model="anio_publicacion" id="anio_publicacion"
                                    class="block w-full px-3 py-2 bg-gray-100 font-varela"
                                    placeholder="Ingrese el año" />
                                @error('anio_publicacion')
                                <div class="py-2 text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="lg:flex lg:justify-between">
                        <div class="flex flex-col">

                            @if ($imagen)
                                <img class="object-cover" src="{{ $imagen?->temporaryUrl() }}" alt="">
                            @endif

                            <label for="imagen" class="block mb-2 font-bold font-roboto">Imágen</label>
                            <input type="file" wire:loading.attr="disabled" wire:model="imagen" id="imagen" class="block w-full py-3 font-varela">
                            @error('imagen')
                                <div class="py-2 text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center gap-4 p-4 border-t border-gray-200 rounded-b md:justify-end md:p-5">
                    <button wire:click="hideModal" type="button"
                        class="py-2 text-base font-medium text-[#aaaaaa] uppercase transition-all duration-200 border-2 rounded hover:scale-110 px-7 font-roboto border-[#aaaaaa]  focus:ring-gray-100">Cancelar</button>
                    <button wire:click="Grabar" type="button"
                        class="py-2 text-base font-medium text-black uppercase transition-all duration-200 border-2 rounded hover:scale-110 px-7 font-roboto border-rosa bg-rosa focus:ring-gray-100">
                        Grabar</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
