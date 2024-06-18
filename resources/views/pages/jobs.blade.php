<x-layout>
    <x-slot:title>Trabajos</x-slot:title>
<section>
    @foreach($categorias as $categoria)
        @livewire('jobs-cards', ['id' => $categoria->id, 'categoria' => $categoria->categoria])
    @endforeach
</section>
</x-layout>
