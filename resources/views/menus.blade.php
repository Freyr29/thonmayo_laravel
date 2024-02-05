<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menus ThonMayo</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css//fontawesome/css/all.css') }}">
</head>
<body>
    <header>
        <h1 class="titre">Les Menus de ThonMayo</h1>
    </header>
    <nav id="navbar">
        <ul class="navbar-items flexbox-col" style="margin-top: 20px;">
            <li class="navbar-item flexbox-left">
                <a href="{{ route('accueil') }}" class="navbar-item-inner flexbox-left">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <i class="fa-solid fa-house-chimney"></i>
                    </div>
                    <span class="link-text">ThonMayo</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-items flexbox-col">
            <li class="navbar-logo flexbox-left">
            </li>
            <li class="navbar-item flexbox-left">
                <a href="{{ route('menus') }}" class="navbar-item-inner flexbox-left">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <span class="link-text">Menus</span>
                </a>
            </li>
            <li class="navbar-item flexbox-left">
                <a href="{{ route('sandwichs') }}" class="navbar-item-inner flexbox-left">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <i class="fa-solid fa-burger"></i>
                    </div>
                    <span class="link-text">Sandwichs</span>
                </a>
            </li>
            <li class="navbar-item flexbox-left">
                <a href="{{ route('boissons') }}" class="navbar-item-inner flexbox-left">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <i class="fa-solid fa-glass-water"></i>
                    </div>
                    <span class="link-text">Boissons</span>
                </a>
            </li>
            <li class="navbar-item flexbox-left">
                <a href="{{ route('snacks') }}" class="navbar-item-inner flexbox-left">
                    <div class="navbar-item-inner-icon-wrapper flexbox">
                        <i class="fa-solid fa-cookie-bite"></i>
                    </div>
                    <span class="link-text">Snacks</span>
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>