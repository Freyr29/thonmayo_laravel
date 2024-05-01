<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;
use App\Models\Sandwich;

class SandwichsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $sandwichs = Sandwich::all();

        return view('sandwichs')->with('sandwichs', $sandwichs);
    }
}
