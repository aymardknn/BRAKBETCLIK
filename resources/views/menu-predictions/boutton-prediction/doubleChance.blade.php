@extends('menu-predictions.BasePre')

@section('contenu')

<h3 class="text-lg font-semibold text-center text-gray-800 mt-6 mb-4">Spain : Segunda Division - Plays-offs</h3>
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
                    
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center"><h6><strong>19:00</strong></h6>Espanyol - Gijon</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1X</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">1.22</td>
                    <td class="px-4 sm:py-3 sm:text-sm py-2 text-sm text-gray-700 text-center">?</td>
                </tr>
                <!-- Ajoutez d'autres lignes de tableau ici -->
            </tbody>
        </table>
    </div>

@endsection