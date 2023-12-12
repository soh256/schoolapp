<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Création d\'une nouvelle classe') }}
        </h2>
    </x-slot>

    <div class="py-6 px-12">
        
                 <livewire:createclasse/>
            
    </div>
</x-app-layout>