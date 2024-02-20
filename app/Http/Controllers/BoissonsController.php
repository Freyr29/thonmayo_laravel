<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;

class BoissonsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $boissons = DB::select('select * from boissons');

        return view('boissons')->with('boissons', $boissons);
    }
}
