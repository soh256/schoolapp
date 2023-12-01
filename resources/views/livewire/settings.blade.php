<div>
    <div class="mt-5">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-8">

            <div class="flex justify-between">
                <h4><b>liste des années scolaires</b></h4>
                <a href="{{route('create_school_year')}}" class="bg-blue-500 rounded-md p-2 text-sm text-white">nouvelle année scolaire</a>
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
                                            Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            Libellé
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b-2 border-gray-40">
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                    </tr>
                                    <tr class="border-b-2 border-gray-40">
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                        <th class="text-sm font-meduim text-gray-900 px-6 py-6">
                                            contenue Libellé
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
