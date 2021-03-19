<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function calculate()
    {
        return view('calculate');
    }
}
