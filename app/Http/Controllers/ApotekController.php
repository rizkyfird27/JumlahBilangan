<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }
}
