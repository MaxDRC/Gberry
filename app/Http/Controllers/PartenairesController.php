<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenairesController extends Controller
{
    public function index()
    {
        return view('partenaires.index');
    }
}
