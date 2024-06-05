<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Panier;
use App\Models\Sandwich;
use App\Models\Snacks;
use App\Models\Menus;
use App\Models\Boissons;

class PanierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $current_userid = Auth::id();
        $panier = Panier::select('content')->where('user_id', $current_userid)->first();
        $data = ["sandwich" => [], "snacks" => [], "menus" => [], "boissons" => []];

        if(!empty($panier)) {
            $all_sandwich = Sandwich::select('id_sandwich', 'nom_sandwich', 'prix', 'image_url')->get();
            $all_snacks = Snacks::select('id_snack', 'nom_snack', 'prix', 'image_url')->get();
            $all_menus = Menus::select('id_menu', 'nom_menu', 'prix', 'image_url')->get();
            $all_boissons = Boissons::select('id_boisson', 'nom_boisson', 'prix', 'image_url')->get();
            foreach($all_sandwich as $sandwich) {
                array_push($data["sandwich"], array($sandwich["id_sandwich"], $sandwich["nom_sandwich"], $sandwich["prix"], $sandwich["image_url"]));
            }
            foreach($all_snacks as $snack) {
                array_push($data["snacks"], array($snack["id_snack"], $snack["nom_snack"], $snack["prix"], $snack["image_url"]));
            }
            foreach($all_menus as $menu) {
                array_push($data["menus"], array($menu["id_menu"], $menu["nom_menu"], $menu["prix"], $menu["image_url"]));
            }
            foreach($all_boissons as $boisson) {
                array_push($data["boissons"], array($boisson["id_boisson"], $boisson["nom_boisson"], $boisson["prix"], $boisson["image_url"]));
            }
            $panier = json_decode($panier["content"], true);
        }     
        return view('panier')->with('panier', $panier)->with('data', $data);
    }

    public function handleAddCard()
    {
        header("Content-Type: application/json");
        if(isset($_POST["id"]) && isset($_POST["type"]) && isset($_POST["quantity"]) &&
           !empty($_POST["id"]) && !empty($_POST["type"]) && !empty($_POST["quantity"])) {
            if(is_numeric($_POST["quantity"])) {
                $current_userid = Auth::id();
                $panier = Panier::select('content')->where('user_id', $current_userid)->first();
                $new_panier = ["sandwich" => [], "menus" => [], "snacks" => [], "boissons" => []];
                $is_new = true;
                if(!empty($panier)) {
                    $new_panier = json_decode($panier["content"], true);
                    $is_new = false;
                }
                $quantity = intval($_POST["quantity"]);
                if($quantity > 0) {
                    switch($_POST["type"]) {
                        case "sandwich":
                            if(!empty(Sandwich::where('id_sandwich', $_POST["id"])->first())) {
                                foreach($new_panier["sandwich"] as $val) {
                                    if($val["id"] === $_POST["id"]) {
                                        $quantity = $quantity + $val["quantity"];
                                    }
                                }
                                $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                foreach($new_panier["sandwich"] as $val) {
                                    if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                        array_push($new, $val);
                                    }
                                }
                                $new_panier["sandwich"] = $new;
                            } else {
                                echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                exit;
                            }
                            break;
                        case "menus":
                            if(!empty(Menus::where('id_menu', $_POST["id"])->first())) {
                                foreach($new_panier["menus"] as $val) {
                                    if($val["id"] === $_POST["id"]) {
                                        $quantity = $quantity + $val["quantity"];
                                    }
                                }
                                $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                foreach($new_panier["menus"] as $val) {
                                    if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                        array_push($new, $val);
                                    }
                                }
                                $new_panier["menus"] = $new;
                            } else {
                                echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                exit;
                            }
                            break;
                        case "boissons":
                            if(!empty(Boissons::where('id_boisson', $_POST["id"])->first())) {
                                foreach($new_panier["boissons"] as $val) {
                                    if($val["id"] === $_POST["id"]) {
                                        $quantity = $quantity + $val["quantity"];
                                        $found = true;
                                    }
                                }
                                $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                foreach($new_panier["boissons"] as $val) {
                                    if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                        array_push($new, $val);
                                    }
                                }
                                $new_panier["boissons"] = $new;
                            } else {
                                echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                exit;
                            }
                            break;
                        case "snacks":
                            if(!empty(Snacks::where('id_snack', $_POST["id"])->first())) {
                                foreach($new_panier["snacks"] as $val) {
                                    if($val["id"] === $_POST["id"]) {
                                        $quantity = $quantity + $val["quantity"];
                                    }
                                }
                                $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                foreach($new_panier["snacks"] as $val) {
                                    if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                        array_push($new, $val);
                                    }
                                }
                                $new_panier["snacks"] = $new;
                            } else {
                                echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                exit;
                            }
                            break;
                        default:
                            echo '{"error":"Type de contenu inconnu"}';
                            exit;
                    }
                    if($is_new) {
                        $panier_insert = new Panier();
                        $panier_insert->user_id = $current_userid;
                        $panier_insert->content = json_encode($new_panier);
                        $panier_insert->save();
                    } else {
                        Panier::where('user_id', $current_userid)->update(['content' => json_encode($new_panier)]);
                    }
                    echo '{"ok":"add to card"}';
                    exit;
                } else {
                    echo '{"error":"La quantité doit etre supérieure à 0"}';
                }
            } else {
                echo '{"error":"La quantité est incorrecte"}';
            }
        } else {
            echo '{"error":"Il manque des paramètres"}';
        }
    }

    public function handleRemoveCard(){
        header("Content-Type: application/json");
        if(isset($_POST["id"]) && isset($_POST["type"]) && isset($_POST["quantity"]) &&
           !empty($_POST["id"]) && !empty($_POST["type"]) && !empty($_POST["quantity"])) {
            if(is_numeric($_POST["quantity"])) {
                $current_userid = Auth::id();
                $new_panier = Panier::select('content')->where('user_id', $current_userid)->first();
                if(!empty($new_panier)) {
                    $new_panier = json_decode($new_panier["content"], true);
                    $quantity = intval($_POST["quantity"]);
                    $found = false;
                    if($quantity > 0) {
                        switch($_POST["type"]) {
                            case "sandwich":
                                if(!empty(Sandwich::where('id_sandwich', $_POST["id"])->first())) {
                                    foreach($new_panier["sandwich"] as $val) {
                                        if($val["id"] === $_POST["id"]) {
                                            if($quantity > $val["quantity"]) {
                                                $quantity = 0;
                                            } else {
                                                $quantity = $val["quantity"] - $quantity;
                                            }
                                            $found = true;
                                        }
                                    }
                                    if($found) {
                                        $new = array();
                                        if($quantity > 0) {
                                            $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                        }
                                        foreach($new_panier["sandwich"] as $val) {
                                            if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                                array_push($new, $val);
                                            }
                                        }
                                        $new_panier["sandwich"] = $new;
                                    } else {
                                        echo '{"error":"Cet item n\'est pas présent dans votre panier"}';
                                        exit;
                                    }
                                } else {
                                    echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                    exit;
                                }
                                break;
                            case "menus":
                                if(!empty(Menus::where('id_menu', $_POST["id"])->first())) {
                                    foreach($new_panier["menus"] as $val) {
                                        if($val["id"] === $_POST["id"]) {
                                            if($quantity > $val["quantity"]) {
                                                $quantity = 0;
                                            } else {
                                                $quantity = $val["quantity"] - $quantity;
                                            }
                                            $found = true;
                                        }
                                    }
                                    if($found) {
                                        $new = array();
                                        if($quantity > 0) {
                                            $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                        }
                                        foreach($new_panier["menus"] as $val) {
                                            if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                                array_push($new, $val);
                                            }
                                        }
                                        $new_panier["menus"] = $new;
                                    } else {
                                        echo '{"error":"Cet item n\'est pas présent dans votre panier"}';
                                        exit;
                                    }
                                } else {
                                    echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                    exit;
                                }
                                break;
                            case "boissons":
                                if(!empty(Boissons::where('id_boisson', $_POST["id"])->first())) {
                                    foreach($new_panier["boissons"] as $val) {
                                        if($val["id"] === $_POST["id"]) {
                                            if($quantity > $val["quantity"]) {
                                                $quantity = 0;
                                            } else {
                                                $quantity = $val["quantity"] - $quantity;
                                            }
                                            $found = true;
                                        }
                                    }
                                    if($found) {
                                        $new = array();
                                        if($quantity > 0) {
                                            $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                        }
                                        foreach($new_panier["boissons"] as $val) {
                                            if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                                array_push($new, $val);
                                            }
                                        }
                                        $new_panier["boissons"] = $new;
                                    } else {
                                        echo '{"error":"Cet item n\'est pas présent dans votre panier"}';
                                        exit;
                                    }
                                } else {
                                    echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                    exit;
                                }
                                break;
                            case "snacks":
                                if(!empty(Snacks::where('id_snack', $_POST["id"])->first())) {
                                    foreach($new_panier["snacks"] as $val) {
                                        if($val["id"] === $_POST["id"]) {
                                            if($quantity > $val["quantity"]) {
                                                $quantity = 0;
                                            } else {
                                                $quantity = $val["quantity"] - $quantity;
                                            }
                                            $found = true;
                                        }
                                    }
                                    if($found) {
                                        $new = array();
                                        if($quantity > 0) {
                                            $new = array(array("id" => $_POST["id"], "quantity" => $quantity));
                                        }
                                        foreach($new_panier["snacks"] as $val) {
                                            if(isset($val["id"]) && $val["id"] !== $_POST["id"]) {
                                                array_push($new, $val);
                                            }
                                        }
                                        $new_panier["snacks"] = $new;
                                    } else {
                                        echo '{"error":"Cet item n\'est pas présent dans votre panier"}';
                                        exit;
                                    }
                                } else {
                                    echo '{"error":"L\'id spécifié n\'existe pas!"}';
                                    exit;
                                }
                                break;
                            default:
                                echo '{"error":"Type de contenu inconnu"}';
                                exit;
                        }
                        Panier::where('user_id', $current_userid)->update(['content' => json_encode($new_panier)]);
                        echo '{"ok":"item removed"}';
                        exit;
                    } else {
                        echo '{"error":"La quantité doit être supérieure à 0"}';
                    }
                } else {
                    echo '{"error":"Votre panier est déjà vide :("}';
                }
            } else {
                echo '{"error":"La quantité est incorrecte"}';
            }
        } else {
            echo '{"error":"Il manque des paramètres"}';
        }
    }
}
