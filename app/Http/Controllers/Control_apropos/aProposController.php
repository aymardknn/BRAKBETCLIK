<?php

namespace App\Http\Controllers\Control_apropos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class aProposController extends Controller
{
    //
    public function aPropos(): View
    {
        return view('apropos.apropos');
    }
}
