<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;

class MenusController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $menus = DB::select('select * from menus');

        return view('menus')->with('menus', $menus);
    }
}
