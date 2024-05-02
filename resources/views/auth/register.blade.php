<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="field padding-bottom--24">
                                    <label for="nom">{{ __('Nom') }}</label>
                                    <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="prenom">{{ __('Prenom') }}</label>
                                    <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="phone">{{ __('Phone') }}</label>
                                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="address">{{ __('Address') }}</label>
                                    <input id="address" type="text" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="pays">{{ __('Pays') }}</label>
                                    <input id="pays" type="text" name="pays" value="{{ old('pays') }}" required autocomplete="pays" autofocus>
                                    @error('pays')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="ville">{{ __('Ville') }}</label>
                                    <input id="ville" type="text" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="email">{{ __('Adresse Email') }}</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                    <input id="password" type="password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
                                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="field padding-bottom--24">
                                        <input type="submit" name="submit" value="S'inscrire">
                                    </div>
                                    <p>Vous avez déjà un compte ? <a href="/register">Connectez-vous</a>.</p>
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