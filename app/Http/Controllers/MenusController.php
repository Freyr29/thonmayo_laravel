<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;
use App\Models\Menus;

class MenusController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $menus = Menus::all();
        
        return view('menus')->with('menus', $menus);
    }
}