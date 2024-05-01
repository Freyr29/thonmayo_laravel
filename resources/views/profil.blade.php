<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Profile ThonMayo</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css//fontawesome/css/all.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2? family= Montserrat:wght@300 & display=swap');
    </style>
</head>
<body style="position: fixed; top: 0;">
    <header>
        <div class="titre" style="font-family: 'Montserrat', sans-serif;">Mon Profile ThonMayo</div>
        <div class="panier"><a class="cadi" href="{{ route('panier') }}"><i class="fa-solid fa-cart-shopping"></i></a></div>
    </header>
    @include('layout.layout_menu')
    <div class="container rounded bg-white mt-5 mb-5 text-center" style="margin-left: 15em; width: 80%;">
        <div class="row">
            <form method="POST" action="{{ route('updateprofil') }}">
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <br>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            @csrf
                            <div class="col-md-6"><label class="labels">Nom</label><input name="nom" type="text" value="{{ $data->nom }}" class="form-control" placeholder="Votre Nom" value=""></div>
                            <div class="col-md-6"><label class="labels">Prénom</label><input name="prenom" type="text" value="{{ $data->prenom }}" class="form-control" placeholder="Votre Prénom" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email" value="{{ $data->email }}" class="form-control" placeholder="Votre Email" value=""></div>
                            <div class="col-md-12"><label class="labels">Numéro de Téléphone</label><input name="phone" type="text" value="{{ $data->phone }}" class="form-control" placeholder="Ex: 06 66 66 66 66" value=""></div>
                            <div class="col-md-12"><label class="labels">Adresse Postale</label><input name="address" type="text" value="{{ $data->address }}" class="form-control" placeholder="Votre Adresse" value=""></div>
                            <div class="col-md-6"><label class="labels">Pays</label><input type="text" name="pays" value="{{ $data->pays }}" class="form-control" placeholder="Votre Pays" value=""></div>
                            <div class="col-md-6"><label class="labels">Ville</label><input type="text" name="ville" value="{{ $data->ville }}" class="form-control" placeholder="Votre Ville" value=""></div>
                        </div>
                        <div class="mt-5 text-center"><button class="savebutton" type="submit">Sauvegarder</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>