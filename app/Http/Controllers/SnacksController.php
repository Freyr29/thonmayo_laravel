<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;

class SnacksController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $snacks = DB::select('select * from snacks');

        return view('snacks')->with('snacks', $snacks);
    }
}
