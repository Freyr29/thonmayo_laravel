<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $current_userid = Auth::id();
        $data = User::select('isAdmin')->where('id', $current_userid)->first();
        if($data['isAdmin'])
        {
            $users = User::select('prenom','nom','email')->get();
            return view('admin')->with('users', $users);
        }
        else
        {
            return redirect('/');
        }
    }

    public function getUser()
    {
        $current_userid = Auth::id();
        $data = User::select('isAdmin')->where('id', $current_userid)->first();
        if($data['isAdmin'])
        {
            header("Content-Type: application/json");
            if(isset($_GET["email"]))
            {
                $data = User::select('prenom','nom','email','phone','address','pays','ville')->where('email',$_GET["email"])->first();
                if(empty($data))
                {
                    echo '{"error":"L\'utilisateur spécifié n\'existe pas."}';
                    exit;
                }
                echo json_encode($data);
                exit;
            }
            else
            {
                echo '{"error":"Il manque des paramètres."}';
                exit;
            }
        }
        else
        {
            return redirect('/');
        }
    }

    public function modifyUser(Request $request)
    {
        $params = request()->all();
        if(isset($params['email']))
        {
            $params = array_filter($params);
            $user = User::where('email', $params['email'])->first();
            $user->update($params);
            return redirect('/admin');
        }
        else
        {
            $request->session()->put("error","Une erreur est survenue, veuillez réessayer.");
            return redirect('/admin');
        }
    }
}