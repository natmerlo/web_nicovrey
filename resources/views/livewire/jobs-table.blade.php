<div class="px-4 mx-auto mb-12 md:px-16 lg:px-24 max-w-screen-2xl">
    <h2 class="text-3xl font-semibold text-center uppercase md:text-start py-9 md:text-4xl font-roboto text-blanco">Panel de Administración</h2>

    <div class="flex justify-end">
        @livewire('create-modal')
    </div>

    <div class="">
        @if($trabajos->isNotEmpty())
        <table class="flex flex-row flex-no-wrap w-full my-5 overflow-hidden rounded-lg sm:bg-white sm:shadow-lg ">

            <thead class="text-white">
                <tr
                    class="flex flex-col mb-2 rounded-l-lg text-negro bg-rosa flex-no wrap sm:table-row sm:rounded-none sm:mb-0">
                    <th class="p-3 text-left">Título</th>
                    <th class="p-3 text-left">Descripción</th>
                    <th class="p-3 text-left">Categoría</th>
                    <th class="p-3 text-left lg:w-[100px]">Año</th>
                    <th class="p-3 text-left w-[110px]">Acciones</th>
                </tr>
            </thead>

            <tbody class="flex-1 sm:flex-none">
                @foreach ($trabajos as $trabajo)
                <tr class="flex flex-col mb-2 overflow-x-auto flex-no wrap sm:table-row sm:mb-0">
                    <td class="p-3 bg-white border border-grey-light"> {{$trabajo->titulo}} </td>
                    <td class="p-3 truncate bg-white border border-grey-light"> {{$trabajo->descripcion}}
                    </td>
                    <td class="p-3 bg-white border border-grey-light"> {{$trabajo->categorias}}
                    </td>
                    <td class="p-3 truncate bg-white border border-grey-light"> {{$trabajo->anio_publicacion}}
                    </td>
                    <td class="p-3 truncate bg-white border border-grey-light ">
                        <div class="flex justify-evenly">
                            @livewire('editarmodal',['id' => $trabajo->id], key(uniqid()))

                            <button wire:click="Eliminar({{ $trabajo->id }})">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                                    stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6 text-black transition duration-300 cursor-pointer hover:text-blue-500 hover:scale-110">
                                    <path
                                        d="m20.015 6.506h-16v14.423c0 .591.448 1.071 1 1.071h14c.552 0 1-.48 1-1.071 0-3.905 0-14.423 0-14.423zm-5.75 2.494c.414 0 .75.336.75.75v8.5c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8.5c0-.414.336-.75.75-.75zm-4.5 0c.414 0 .75.336.75.75v8.5c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8.5c0-.414.336-.75.75-.75zm-.75-5v-1c0-.535.474-1 1-1h4c.526 0 1 .465 1 1v1h5.254c.412 0 .746.335.746.747s-.334.747-.746.747h-16.507c-.413 0-.747-.335-.747-.747s.334-.747.747-.747zm4.5 0v-.5h-3v.5z"
                                        fill-rule="nonzero" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-xl text-blanco font-varela">
            No hay discos que mostrar actualmente
        </p>
        @endif

    </div>

    <style>

        @media (min-width: 640px) {
            table {
                display: inline-table !important;
            }

            thead tr:not(:first-child) {
                display: none;
            }
        }

        td:not(:last-child) {
            border-bottom: 0;
        }

        th:not(:last-child) {
            border-bottom: 2px solid rgba(0, 0, 0, .1);
        }
    </style>
</div>
