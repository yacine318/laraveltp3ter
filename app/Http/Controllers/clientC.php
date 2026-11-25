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

    public function newM()
    {
        $lesLoc= locationM::all();
       $lesclients = clientM::all();

        return view('formLocMatV' , ['lesLoc'=>$lesLoc , 'lesclients'=>$lesclients ]); 
    }

    public function newsave(Request $request)
    {
        
       $laLoc = locationM::find($request->cboLoc);
        $lesMateriaux = MateriauxM::all();
        return view('formnewMatV', ['laLoc' => $laLoc, 'lesMateriaux' => $lesMateriaux]);
        
   
    }
    public function newsave2(Request $request)
    {
        $laLoc = locationM::find($request->cboLoc);
    
        $unMat = MateriauxM::find($request->cboMat);
        $laLoc->sesMateriaux()->attach($unMat);
        return redirect()->route('accueil');
    }
    public function supprmat($idMateriaux)
    {
        $unMat = MateriauxM::find($idMateriaux);
         $unMat->sesLocations()->detach();  
        $unMat->delete();
        return redirect()->route('accueil');
    }
}
