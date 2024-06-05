<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ThonMayo</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
        .container-padding {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            left: -20px; /* Déplace légèrement le conteneur vers la gauche */
            margin-top: 50px; /* Ajoute une marge en haut pour décaler le conteneur vers le bas */
        }
        .presentation {
            text-align: center;
            margin-top: 50px;
        }
        .presentation img {
            display: block;
            margin: 0 auto 20px;
        }
        .presentation h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .presentation p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2em;
            line-height: 1.6em;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">ThonMayo</div>
        <div class="panier"><a class="cadi" href="{{ route('panier') }}"><i class="fa-solid fa-cart-shopping"></i></a></div>
        @guest
        <div class="seCo"><a class="log" href="{{ route('login') }}">Se connecter<i class="fa-solid fa-arrow-right-to-bracket"></i></a></div>
        @endguest
        @auth
        <div class="seCo"><a class="log" href="{{ route('profil') }}">Mon profil<i class="fa-solid fa-arrow-right-to-bracket"></i></a></div>
        @endauth
    </header>
    @include('layout.layout_menu')

    <section class="presentation">
        <div class="container container-padding">
            <br><br>
            <img src="{{ asset('image/thonmayo1.png') }}" alt="Logo ThonMayo" style="width: 150px; height: auto;">
            <h1>Bienvenue chez ThonMayo</h1>
            <p>
                ThonMayo est une entreprise fictive dédiée à offrir les meilleurs produits à base de thon et de mayonnaise. 
                Fondée en 2024, notre mission est de fournir des produits frais, savoureux et de qualité supérieure à nos clients. 
                Notre gamme de produits comprend des sandwichs, des salades, et des plats préparés, tous confectionnés avec le plus grand soin.
            </p>
            <p>
                Chez ThonMayo, nous croyons en l'importance de la satisfaction du client. C'est pourquoi nous nous engageons à offrir un service client exceptionnel 
                et à répondre à toutes vos questions et préoccupations. Explorez notre site pour découvrir nos offres et n'hésitez pas à nous contacter pour en savoir plus.
            </p>
        </div>
    </section>
</body>
</html>