<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Se Connecter</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">Mon Compte ThonMayo</div>
        <div class="panier"><a class="cadi" href="{{ route('panier') }}"><i class="fa-solid fa-cart-shopping"></i></a></div>
    </header>
    @include('layout.layout_menu')
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="box-root padding-top--200 flex-flex flex-direction--column" style="flex-grow: 1;">
                <div class="formbg-outer">
                    <div class="formbg">
                        <div class="formbg-inner padding-horizontal--48">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                @auth
                                    {{ __('You are logged in!') }}
                                @else
                                    {{ __('You are not logged in.') }}
                                @endauth

                                <div class="field padding-bottom--24">
                                    <label for="email">{{ __('Adresse Email') }}</label>
                                    <input id="email" type="email" name="email" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                    <input id="password" type="password" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                                    <label for="remember">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>

                                <div class="field padding-bottom--24">
                                  <input type="submit" name="submit" value="Continue">
                                </div>
                                <div class="field">
                                    <a class="ssolink" href="{{ route('register') }}">Vous n'avez pas encore de compte? </br> Créer un compte</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
