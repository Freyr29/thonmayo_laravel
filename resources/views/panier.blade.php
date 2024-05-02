<!DOCTYPE html>
<html lang="fr">
<a href="{{ route('panier') }}">Mon Panier</a>
<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css//fontawesome/css/all.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2? family= Montserrat:wght@300 & display=swap');
    </style>
</head>
<body>
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">Mon Panier ThonMayo</div>
        <div class="commander"><a class="buttonpaid" href="">Commander</a></div>
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