<div class="p-3 bg-while shadow-sm">
    <form action="POST" wire:submit.prevent='SaveYear'>
        @csrf
        @method('post')
        @if (Session::get('erreur'))
            <div class="block p-2 bg-red-300 animate-bounce border-red-500 shadow-red-500 text-white opacity-75 rounded-sm shadow-sm mt-2">
                {{Session::get('erreur')}}
            </div>
        @endif
        <div >
            <label class="text-lg font-semibold text-gray-800 mx-6" for="submit" 
                     x-jet-label="libellé de l\'année scolaire">
                        libellé de l'année scolaire
            </label>

            <input type="text" class="block mt-1 rounded-md border-gray-300 w-full @error('libelle')animate-bounce border-red-500 bg-red-100 @enderror" wire:model='libelle'>
        
            @error('libelle')
                <div class='text-red mx-5 py-1'>
                    *le champ libelle est obligatoire
                </div>
            @enderror

        </div>
        <div class="p-5 flex justify-between  items-center">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm ">Annuler</button>
            <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm ">Ajouter</button>

        </div>
    </form>
</div>
