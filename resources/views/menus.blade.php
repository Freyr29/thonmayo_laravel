<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menus ThonMayo</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css//fontawesome/css/all.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2? family= Montserrat:wght@300 & display=swap');
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">Les Menus de ThonMayo</div>
        <div class="utilisateur"><a class="user" href="{{ route('profil') }}"><i class="fa-solid fa-user"></i></a></div>
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
        <div class="sand2" >
            <div class="col-span-12 grid grid-cols-3 gap-4">
                <div class="card min-w-0 max-w-md sand3">
                    @foreach ($menus as $menu)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden w-72">
                            @if(isset($menu->image_url) && isset($menu->nom_menu))
                                <img src="{{ $menu->image_url }}" alt="Image du menu {{ $menu->nom_menu }}" style="width: 300px; height: 300px; object-fit: cover;" class="w-full h-48 object-cover boxImage">
                            @endif
                            <div class="p-4">
                                @if(isset($menu->nom_menu))
                                    <h2 class="font-semibold text-lg">{{ $menu->nom_menu }}</h2>
                                @endif
                                @if(isset($menu->prix))
                                    <p class="text-gray-600">{{ $menu->prix }}€</p>
                                @endif
                                @if(isset($menu->id_sandwich) && isset($menu->id_boisson) && isset($menu->id_snack))
                                    <p class="text-gray-500">{{ $menu->id_sandwich }},{{ $menu->id_boisson }},{{ $menu->id_snack }}</p>
                                @endif
                                <div class="mt-4">
                                    <a href="#" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-md inline-block">Acheter</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<script>
    function addToCard(id) {
        var quantity = prompt("Combien voulez-vous en ?");
        while(isNaN(quantity)) {
            quantity = prompt("Combien voulez-vous en ?");
        }
        $.ajax({
            url: "{{ route('addpanier') }}",
            type: "POST",
            data: {"type": "menus", "id":id, "quantity": quantity, "_token": "{{ csrf_token() }}"},
            success: function(resp) {
                if(resp["error"] !== undefined) {
                    alert(resp["error"])
                } else {
                    alert("Votre item a bien été ajouté au panier !")
                }
            },
            error: function(err) {
                alert("Une erreur est survenue, veuillez réessayer")
            }
        })
    }
</script>
</body>
</html>