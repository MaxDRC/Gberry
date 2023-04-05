<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalerieController extends Controller
{
    public function index()
    {
        return view('galerie.index');
    }
}
