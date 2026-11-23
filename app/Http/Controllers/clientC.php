<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientM;
use App\Models\locationM;
use App\Models\MateriauxM;


class clientC extends Controller
{
    public function index()
    {
        $clients = clientM::all();
        $locations = locationM::all();
        $materiaux = MateriauxM::all();

        return view('accueilV', compact('clients', 'locations', 'materiaux'));
    }
}
