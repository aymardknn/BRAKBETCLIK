@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        

    <title>nbnjk</title>
    
</head>
<body>
    @include('menu-predictions.prediction-nav')

    <main>

        @yield('contenu')
            
        
        
    </main>
    
    
</body>
</html>



@endsection

 
