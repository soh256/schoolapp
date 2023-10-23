<div class="bg-white-900 p-3 shadow-sm ">
    <form method="POST" wire:submit.prevent="save_Year">
        @csrf
        @method('post')
        <div class="p-5">
            <label value="{{__('Libellé de l année')}}">Libellé de l'année</label>
            @er
            <input type="text" class="block mt-1 rounded-sm border-gray-300 min-w-full" wire:model='libelle'>
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