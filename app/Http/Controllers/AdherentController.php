<?php

namespace App\Http\Controllers;
namespace App\Http\Models\Role\Adherent;

use Illuminate\Http\Request;

class AdherentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:adherent']);
    }

    public function index()
    {
        return view('adherent.dashboard');
    }
}
