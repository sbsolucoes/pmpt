<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function glossario(Request $request)
    {
        return view('pages.glossario');
    }
}
