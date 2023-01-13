<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $adresse = DB::table('restaurant')
        ->where('cle','=','adresse')
        ->first()
        ;
        $tel = DB::table('restaurant')
        ->where('cle','=','tel')
        ->first()
        ;
        $horaire = DB::table('restaurant')
        ->where('cle','=','horaire')
        ->first()
        ;
        $map = DB::table('restaurant')
        ->where('cle','=','map')
        ->first()
        ;
    
        //dd($tel);

        return view('contact',[
            'adresse' => $adresse->valeur,
            'tel' => $tel->valeur,
            'horaire' => $horaire->valeur,
            'map' => $map->valeur,
        
        ]);
        
    
  
    }  
}
