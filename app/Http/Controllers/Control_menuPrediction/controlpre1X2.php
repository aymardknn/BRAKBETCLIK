<?php

namespace App\Http\Controllers\Control_menuPrediction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class controlpre1X2 extends Controller
{
    //
    public function victoire(): View
    {
        return view("menu-predictions.boutton-prediction.1X2");
    } 
}
