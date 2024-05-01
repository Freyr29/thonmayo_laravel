<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;
use App\Models\User;

class ProfilController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(): View
    {
        $current_userid = Auth::id();
        $data = User::where('id', $current_userid)->first();

        return view('profil')->with('data', $data);
    }

    public function update()
    {
        $current_userid = Auth::id();
        $allowed_elements = ['prenom','nom','ville','pays','address','phone'];
        foreach($_POST as $key => $var) {
            if(!in_array($key, $allowed_elements)) {
                unset($_POST[$key]);
            }
        }
        User::where('id', $current_userid)->update($_POST);

        $data = User::where('id', $current_userid)->first();

        return view('profil')->with('data', $data);
    }
}
