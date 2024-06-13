<?php

namespace App\Http\Controllers\Control_apropos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class politiqueConf extends Controller
{
    //
    public function politConf(): View
    {
        return view("apropos.politiqueConf");
    }
}
