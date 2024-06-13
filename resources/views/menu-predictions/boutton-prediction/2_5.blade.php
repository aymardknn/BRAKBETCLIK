@extends('menu-predictions.BasePre')

@section('contenu')



    <h3 class="text-lg font-semibold text-center text-gray-800 mb-4 ">International: Friendlies - games</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Jeu</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Prédic</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Cote</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Rslt</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-100">
                    
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>23:00</strong></h6> USA - Brazil</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">+2.5</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.50</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center flex justify-center items-center">
                        ?
                    </td>
                </tr>

                <!--<tr class="border-b hover:bg-gray-100">
                    
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>18:00</strong></h6>Al Hazem - Abha</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">2</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.66</td>
                    <td class="px-4 py-2 text-sm text-gray-700 text-center flex justify-center items-center">
                        ?
                    </td>

                </tr>
                -->
                <!-- Ajoutez d'autres lignes de tableau ici -->
            </tbody>
        </table>
    </div

    <h3 class="text-lg font-semibold text-center text-gray-800 mt-6 mb-4">Egypt : Premier League</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Jeu</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Prédic</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Cote</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Rslt</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>18:00</strong></h6>Futur FC - EL Gouna</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">+1.5</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.35</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">?</td>
                </tr>
                <!-- Ajoutez d'autres lignes de tableau ici -->
            </tbody>
        </table>
    </div>

    <h3 class="text-lg font-semibold text-center text-gray-800 mb-4 ">Ireland : Premier Division</h3>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Jeu</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Prédic</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Cote</th>
                    <th class="px-4 sm:py-3 sm:text-sm py-2 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Rslt</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>18:45</strong></h6>St. Patricks - Shamrock Rovers</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">+1.5</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.32</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">?</td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>18:45</strong></h6>Bray - Athlone</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">+1.5</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.36</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">?</td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>18:45</strong></h6>Wexford - Treaty United</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">+1.5</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.36</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">?</td>
                </tr>
                
                <!--<tr class="border-b hover:bg-gray-100">
                    
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>18:00</strong></h6>Al Hazem - Abha</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">2</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.66</td>
                    <td class="px-4 py-2 text-sm text-gray-700 text-center flex justify-center items-center">
                        ?
                    </td>

                </tr>
                -->
                <!-- Ajoutez d'autres lignes de tableau ici -->
            </tbody>
        </table>
    </div

    

 

@endsection