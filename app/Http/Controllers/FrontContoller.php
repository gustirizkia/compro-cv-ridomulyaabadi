<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontContoller extends Controller
{
    public function home(Request $request)
    {
        return view('pages.home');
    }
}
