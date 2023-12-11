<div class="p-3 bg-while shadow-sm">
    <form action="POST" wire:submit.prevent='Savelevel'>
        @csrf
        @method('post')
        @if (Session::get('erreur'))
            <div class="block p-2 bg-red-300 animate-bounce border-red-500 shadow-red-500 text-white opacity-75 rounded-sm shadow-sm mt-2">
                {{Session::get('erreur')}}
            </div>
        @endif
        <div class="flex flex-col justify-between">
            
            <div class="block m-3">
                <label class="text-lg font-semibold text-gray-800 " for="submit" 
                    x-jet-label="code">
                        Code du niveau
                </label>

                <input type="text" class="block mt-1 rounded-md border-gray-300 w-full 
                    @error('code')
                      animate-bounce 
                    border-red-500 
                    bg-red-100 
                    @enderror" 
                wire:model='code' placeholder="Entrer le code du niveau">
        
                @error('code')
                    <div class='text-red mx-5 py-1'>
                        *le champ code de niveau est obligatoire
                    </div>
                @enderror

            </div>

            <div class="block m-3">
                <label class="text-lg font-semibold  text-gray-800 " for="submit" 
                    x-jet-label="libelle">
                        Libelle
                </label>

                <input type="text" class="block mt-1 rounded-md border-gray-300 w-full 
                    @error('libelle')
                      animate-bounce 
                    border-red-500 
                    bg-red-100 
                    @enderror" 
                wire:model='libelle' placeholder="Entrer le libelle du niveau">
        
                @error('libelle')
                    <div class='text-red mx-5 py-1'>
                        *le libelle du niveau est obligatoire
                    </div>
                @enderror

            </div>

            <div class="block m-3">
                <label class="text-lg font-semibold text-gray-800 " for="submit" 
                    x-jet-label="Scolarité">
                        Montant de la Scolarité
                </label>

                <input type="text" class="block mt-1 rounded-md border-gray-300 w-full 
                    @error('Scolarité')
                      animate-bounce 
                    border-red-500 
                    bg-red-100 
                    @enderror" 
                wire:model='Scolarité' placeholder="Entrer le montant de la scolarité du niveau">
        
                @error('Scolarité')
                    <div class='text-red mx-5 py-1'>
                        *le montant de la scolarité du niveau est obligatoire et doit être un entier
                    </div>
                @enderror

            </div>
            
        <div class="p-5 flex justify-around  items-center">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm ">Annuler</button>
            <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm ">Ajouter</button>

        </div>
    </form>
</div>
