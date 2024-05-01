<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css//fontawesome/css/all.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2? family= Montserrat:wght@300 & display=swap');
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body style="position: fixed; top: 0;">
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">Mon Panier ThonMayo</div>
        <div class="commander"><a class="buttonpaid" href="">Commander</a></div>
        @guest
        <div class="seCo"><a class="log" href="{{ route('login') }}">Se connecter<i class="fa-solid fa-arrow-right-to-bracket"></i></a></div>
        @endguest
        @auth
        <div class="utilisateur"><a class="user" href="{{ route('profil') }}"><i class="fa-solid fa-user"></i></a></div>
        @endauth
    </header>
    @include('layout.layout_menu')
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-5">
                @if(empty($panier))
                    <div class="text-center">
                        <p style="font-size: 25px;">Votre panier est vide 😔</p>
                    </div>
                @else
                <div class="text-center justify-content-center">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Quantité</th>
                            <th scope="col">Prix</th>
                            <th scole="col">Retirer</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($panier as $key => $arr_item)
                            @foreach($arr_item as $item)
                            <tr>
                                <th scope="row">
                                @foreach($data[$key] as $d)
                                    @if($d[0] == $item["id"])
                                        {{ $d[1] }}
                                        @break
                                    @endif
                                @endforeach
                                </th>
                                <td>
                                {{ $item["quantity"] }}
                                </td>
                                <td>
                                @foreach($data[$key] as $d)
                                    @if($d[0] == $item["id"])
                                        {{ $item["quantity"] * $d[2] }}€
                                        @break
                                    @endif
                                @endforeach
                                </td>   
                                <td>
                                    <input readonly class="btn btn-warning" value="Retirer" onclick='remove({{ $item["id"] }}, "{{ $key }}")'/>
                                </td>
                            </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <input class="btn btn-primary" readonly value="Passer au paiement"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
<script>
function remove(id, type) {
    var quantity = prompt("Combien voulez vous en retirer ?");
    while(isNaN(quantity)) {
        quantity = prompt("Combien voulez vous en retirer ?");
    }
    $.ajax({
        url: "{{ route('removepanier') }}",
        type: "POST",
        data: {"type": type, "id":id, "quantity": quantity, "_token": "{{ csrf_token() }}"},
        success: function(resp) {
            if(resp["error"] !== undefined) {
                alert(resp["error"])
            } else {
                alert("Votre item a bien été retiré du panier !")
            }
            location.reload();
        },
        error: function(err) {
            alert("Une erreur est survenue, veuillez réessayer")
        }
    })
}
</script>
</body>
</html>