<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgoController extends Controller
{
    function bubbleSort(){
        return view('sort.bubble');
    }
}
