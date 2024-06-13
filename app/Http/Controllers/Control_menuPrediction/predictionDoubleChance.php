<?php

namespace App\Http\Controllers\Control_menuPrediction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class predictionDoubleChance extends Controller
{
    //
    public function doubleCh(): View
    {
        return view("menu-predictions.boutton-prediction.doubleChance");
    }
}
