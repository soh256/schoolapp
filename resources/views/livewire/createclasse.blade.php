<div class="p-3 bg-while shadow-sm">
    <form action="POST" wire:submit.prevent='Saveclasse'>
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
                    x-jet-label="libelle">
                        Libelle de la classe
                </label>

                <input type="text" class="block mt-1 rounded-md border-gray-300 w-full 
                    @error('libelle')
                      animate-bounce 
                    border-red-500 
                    bg-red-100 
                    @enderror" 
                wire:model='libelle' placeholder="Entrer le libelle de la classe">
        
                @error('libelle')
                    <div class='text-red mx-5 py-1'>
                        *le champ libelle de la classe est obligatoire
                    </div>
                @enderror

            </div>

            <div class="block m-3">
                <label class="text-lg font-semibold  text-gray-800 " for="submit" 
                    x-jet-label="niveau">
                        choix du niveau
                </label>

                <select  class="block mt-1 rounded-md border-gray-300 w-full" wire:model='level_id'>
                
                    <option value=" ">  </option>
                    @foreach ($currentlevel as $item)

                    <option value="{{$item->id}}">{{$item->Libelle}} ({{$item->Code}})</option>
                    
                    @endforeach

                </select>
        
                @error('level_id')
                    <div class='text-red mx-5 py-1'>
                        *le choix du niveau est obligatoire
                    </div>
                @enderror

            </div>
            
        <div class="p-5 flex justify-around  items-center">
            <button class="bg-red-600 p-3 rounded-sm text-white text-sm ">Annuler</button>
            <button type="submit" class="bg-green-600 p-3 rounded-sm text-white text-sm ">Ajouter</button>

        </div>
    </form>
</div>
