<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Ingresar nuevo inmueble') }}
        </h2>
    </x-slot>

    @livewire('admin.create-property')

</x-app-layout>
