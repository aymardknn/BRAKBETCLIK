<?php

namespace App\Http\Controllers\Control_menuPrediction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class controlpre2_5 extends Controller
{
    //
    public function pre2_5(): View
    {
        return view("menu-predictions.boutton-prediction.2_5");
    }
}
