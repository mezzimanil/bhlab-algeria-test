<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FourController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *return void @
     */
    

    /**
     * Show the application dashboard.
     *
    
     */
    public function index()
    {

        $fournisseurs = Fournisseur::orderBy('created_at', 'DESC');
        return view('four');

    }
}
