@extends('menu-predictions.BasePre')

@section('contenu')

<div class="container mx-auto">
    
    <div class="sm:flex justify-center h-10">
        <h1><strong>(AUCUN PARIS DISPONIBLE POUR L'INSTANT)</strong></h1>
    </div>

    <div class="flex flex-col items-center justify-center space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2 ">

                <a href="{{route('predictions')}}" class="text-white bg-yellow-400 px-2 py-1 text-sm rounded-md hover:bg-yellow-500 transition duration-150 ease-in-out">{{ __('Afficher les autres  pronostics') }}</a>


            </div>
</div>

@endsection