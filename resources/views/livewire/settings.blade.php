<div>
    <div class="mt-5">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

            <div class="flex justify-between">
                <div>
                    <input type="text" class="block mt-1 rounded-md border-gray-300 w-full" placeholder="Rechercher..." wire:model='recherche'>
                </div>
                <div>
                    <a href="{{route('create_school_year')}}" class="bg-blue-500 rounded-md p-3 text-sm text-white">nouvelle année scolaire</a>
                </div>
            </div>

            <div class="flex flex-col">
                @if (Session::get('success'))
                    <div class="block p-2 bg-green-500 text-white opacity-75  rounded-sm shadow-sm mt-2 animate-bounce">
                        {{Session::get('success')}}
                    </div>
                @endif

                <div class="overflow-x-auto ">
                    <div class="py-4 inline-block min-w-full ">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center">
                                <thead class="border-b bg-gray-300">
                                    <tr> 
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Id
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Année scolaire
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Statut
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($schoolyears as $item)
                                        
                                    <tr class="border-b-2 border-gray-40">
                                        <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            {{$item->id - 6}} 
                                        </td>
                                        <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            {{$item->school_year}}
                                        </td>
                                        <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            @if ($item->Active >= 1)
                                                <span class="p-2 text-sm bg-green-400 text-white rounded-sm">actif  </span>
                                            @else
                                                <span class="p-2 text-sm bg-red-400 text-white rounded-sm">inactif</span>
                                            @endif
                                        </td>
                                        <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            
                                                <button class="p-3 {{$item->Active==1?'bg-red-400':'bg-green-400'}}  text-white rounded-sm" 
                                                    wire:click="ChangeStatut({{$item->id}},{{$item->Active}})">
                                                    {{$item->Active==1?'rendre inactif':'rendre actif'}}
                                                </button>
                                            {{-- @if ($item->Active >= 1)
                                            @else
                                                <span class="p-3 bg-green-400 text-white rounded-sm">rendre actif</span>
                                            @endif --}}
                                        </td>
                                    </tr>
                                        @empty
                                        <tr >
                                            <td colspan="4" class="bg-orange-50">

                                                <div class=" pt-7 grid justify-center">
                                                    <img src="{{ asset('empty.svg')}} " alt="" class="w-40 h-40">
                                                    {{--  --}}
                                                </div>
                                                <div class="p-2">
                                                    Aucun élement trouvé
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                   
                                </tbody>
                            </table>

                            <div class="mt-3">

                                {{$schoolyears->links()}}

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
