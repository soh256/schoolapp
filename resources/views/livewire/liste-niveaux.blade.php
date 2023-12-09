<div>
  <div class="mt-5">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

          <div class="flex justify-between">
              <div>
                  <input type="text" class="block mt-1 rounded-md border-gray-300 w-full" placeholder="Rechercher..." wire:model="recherche">
              </div>
              <div>
                  <a href="{{route('create_niveau')}}" class="bg-blue-500 rounded-md p-3 text-sm text-white">nouveau niveau</a>
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
                                          Code
                                      </th>
                                      <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                          Libelle
                                      </th>
                                      <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                        Montant de scolarité
                                    </th>
                                    <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                      Action
                                  </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @forelse ($levels as $item)
                                      
                                  <tr class="border-b-2 border-gray-40">
                                      <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                          {{$item->id - 2}} 
                                      </td>
                                      <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                          {{$item->Code}}
                                      </td>
                                      <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                        {{$item->Libelle}}
                                    </td>
                                      <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                        {{$item->Scolarité}}
                                      </td>
                                      <td class="text-sm font-meduim text-gray-900 px-6 py-6">
                                          
                                              <a href="{{route('modifier_niveau', $item->id)}}" class="text-sm bg-blue-500 p-2 text-white rounded-sm"> Modifier</a>
                                              <a href="#" class="text-sm bg-red-500 p-2 text-white rounded-sm"> Supprimer</a>
                                          {{-- @if ($item->Active >= 1)
                                          @else
                                              <span class="p-3 bg-green-400 text-white rounded-sm">rendre actif</span>
                                          @endif --}}
                                      </td>
                                  </tr>
                                      @empty
                                      <tr >
                                          <td colspan="5" class="bg-orange-50">

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
                            @if (is_array($levels))
                                <div class="block p-2 bg-orange-500 text-lg text-white opacity-75 text-center rounded-sm shadow-sm mt-2 animate-bounce">
                                    Aucune année scolaire n'a été selectionné
                                </div>
                            @else
                                {{$levels->links()}}
                            @endif
                              

                          </div>

                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
</div>
