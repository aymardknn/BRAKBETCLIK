<?php

namespace App\Http\Controllers\Control_menuPrediction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class toutesPredictions extends Controller
{
    //

    public function index(): View
    {
        return view('menu-predictions.index');
    }
}
