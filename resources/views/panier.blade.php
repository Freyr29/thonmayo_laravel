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
    <div class="cadre">
        <div class="article">
            <img src="{{ asset('image/london.png') }}" alt="london" class="imageArticle">
            <div class="textArticle">
                <div class="nomArticle">London</div>
                <div class="descArticle">Pain complet, roast beef, cheddar affiné, roquette, chutney aux oignons rouges.</div>
                <div class="prixArticle">9€</div>
            </div>
        </div>
        <hr>
        <div class="article">
            <img src="{{ asset('image/oasis-33cl.png') }}" alt="oasis" class="imageArticle">
            <div class="textArticle">
                <div class="nomArticle">Oasis</div>
                <div class="descArticle">Canette de 33cl</div>
                <div class="prixArticle">1.76€</div>
            </div>
        </div>
        <hr>
        <div class="article">
            <img src="{{ asset('image/frites-a-la-poele.jpeg') }}" alt="frites" class="imageArticle">
            <div class="textArticle">
                <div class="nomArticle">Frites maisons</div>
                <div class="descArticle">Pommes de terre françaises, cuites à l'huile d'olive</div>
                <div class="prixArticle">2.43€</div>
            </div>
        </div>
    </div>
    <div class="total">
        <div class="prixTotal">Total : 13,19€</div>
        <button class="payer">Payer</button>
    </div>
</body>
</html>