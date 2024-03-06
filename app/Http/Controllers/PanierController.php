<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Ici, vous pouvez récupérer les informations nécessaires pour afficher le panier
        // et les passer à la vue.
        return view('panier');
    }
}
