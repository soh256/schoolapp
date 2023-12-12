<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('liste des Classes') }}
        </h2>
    </x-slot>

    <div class="py-6 px-12">
        
                 <livewire:listeclasse/>
            
    </div>
</x-app-layout>