<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Création d\'une nouvelle Année') }}
        </h2>
    </x-slot>
    <div class="py-2 px-10">
        @livewire('/')
    </div>
</x-app-layout>