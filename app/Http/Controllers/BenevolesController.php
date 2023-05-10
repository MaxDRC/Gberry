<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenevolesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:benevole']);
    }

    public function index()
    {
        return view('benevole.dashboard');
    }
}
