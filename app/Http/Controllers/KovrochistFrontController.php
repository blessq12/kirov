<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KovrochistFrontController extends Controller
{
    public function indexPage(){
        return view('kovrochist.index');
    }
}
