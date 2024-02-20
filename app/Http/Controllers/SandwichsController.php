<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;

class SandwichsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $sandwichs = DB::select('select * from sandwich');

        return view('sandwichs')->with('sandwichs', $sandwichs);
    }
}
