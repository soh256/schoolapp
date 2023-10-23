@php
    use Illuminate\Support\Facades\Session;
@endphp
<div class="bg-white-900 p-3 shadow-sm ">
    <form method="POST" wire:submit.prevent="save_Year">
        @csrf
        @method('post')
        @if (Session::get('error'))
            <div class="p-5 bg-red-500 border-red-400 animate-bounce text-white">
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif
        <div class="p-5">
            <label value="{{__('Libellé de l année')}}">Libellé de l'année</label>
            @error('libelle')
                <div class='text text-red-500 mt-1'>*le champs libelle dois être remplir</div>
            @enderror 
            <input type="text" class="block mt-1 rounded-sm border-gray-300 min-w-full @error('libelle')
            bg-red-100 border-red-500 animate-bounce
            @enderror" wire:model='libelle'>
        </div>
        <div class="flex justify-between items-center p-5">
            <button class="bg-red-600 rounded-sm p-3 text-white text-sm" >
                annuler
            </button>
            <button type="submit" class="bg-green-600 rounded-sm p-3 text-white text-sm">
                ajouter
            </button>
        </div>
    </form>
</div>