<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier ThonMayo</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap'>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        .btn-primary-custom {
            display: inline-block;
            margin-top: 50px;
            padding: 15px 30px;
            font-size: 1.2em;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-primary-custom:hover {
            background-color: #0056b3;
        }
        .button-container {
            text-align: center;
            margin-top: 50px;
        }
        .empty-cart-message {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            color: #333;
            margin-top: 50px;
        }
        .total-price {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">Mon Panier ThonMayo</div>
        <div class="panier"><a class="cadi" href="{{ route('panier') }}"><i class="fa-solid fa-cart-shopping"></i></a></div>
        @guest
        <div class="seCo"><a class="log" href="{{ route('login') }}">Se connecter<i class="fa-solid fa-arrow-right-to-bracket"></i></a></div>
        @endguest
        @auth
        <div class="utilisateur"><a class="user" href="{{ route('profil') }}"><i class="fa-solid fa-user"></i></a></div>
        @endauth
    </header>
    @include('layout.layout_menu')
    <div class="sand">
        <div class="sand2">
            @if(empty($panier) || count(array_filter($panier)) == 0)
                <div class="empty-cart-message">
                    <p>Votre panier est vide 😔</p>
                </div>
            @else
                <div class="col-span-12 grid grid-cols-3 gap-4">
                    <div class="card min-w-0 max-w-md sand3">
                        @php $totalPrice = 0; @endphp
                        @foreach ($panier as $key => $arr_item)
                            @foreach($arr_item as $item)
                                @foreach($data[$key] as $d)
                                    @if($d[0] == $item["id"])
                                        @php $totalPrice += $item["quantity"] * $d[2]; @endphp
                                        <div class="bg-white shadow-md rounded-lg overflow-hidden w-72">
                                            <img src="{{ $d[3] }}" alt="Image de {{ $d[1] }}" style="width: 300px; height: 300px; object-fit: cover;" class="w-full h-48 object-cover">
                                            <div class="p-4">
                                                <h2 class="font-semibold text-lg">{{ $d[1] }}</h2>
                                                <p class="text-gray-600">{{ $d[2] }}€</p>
                                                <p class="text-gray-500">Quantité : {{ $item["quantity"] }}</p>
                                                <p class="text-gray-500">Prix Total : {{ $item["quantity"] * $d[2] }}€</p>
                                                <div class="mt-4">
                                                    <button class="btn btn-warning btn-remove" onclick='remove({{ $item["id"] }}, "{{ $key }}")'>Retirer</button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="total-price">
                    <br>
                    <p>Total Panier : {{ $totalPrice }}€</p>
                </div>
                <div class="button-container">
                    <a href="#" class="btn-primary-custom">Passer au paiement</a>
                </div>
            @endif
        </div>
    </div>

<script>
function remove(id, type) {
    var quantity = prompt("Combien voulez-vous en retirer ?");
    while (isNaN(quantity)) {
        quantity = prompt("Combien voulez-vous en retirer ?");
    }
    $.ajax({
        url: "{{ route('removepanier') }}",
        type: "POST",
        data: { "type": type, "id": id, "quantity": quantity, "_token": "{{ csrf_token() }}" },
        success: function(resp) {
            if (resp["error"] !== undefined) {
                alert(resp["error"]);
            } else {
                alert("Votre item a bien été retiré du panier !");
            }
            location.reload();
        },
        error: function(err) {
            alert("Une erreur est survenue, veuillez réessayer");
        }
    });
}
</script>
</body>
</html>
