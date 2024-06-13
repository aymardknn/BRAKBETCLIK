<?php

namespace App\Http\Controllers\Control_menuPrediction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class predictionLesDeuxEquipesMarquent extends Controller
{
    //
    public function preOui(): View
    {
        return view("menu-predictions.boutton-prediction.oui");
    }
}
