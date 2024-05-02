<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration - ThonMayo</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="titre">Mon Panier ThonMayo</div>
        <div class="commander"><a class="buttonpaid" href="">Commander</a></div>
        @guest
        <div class="seCo"><a class="log" href="{{ route('login') }}">Se connecter<i class="fa-solid fa-arrow-right-to-bracket"></i></a></div>
        @endguest
        @auth
        <div class="utilisateur"><a class="user" href="{{ route('profil') }}"><i class="fa-solid fa-user"></i></a></div>
        @endauth
    </header>
    @include('layout.layout_menu')
    <div class="container" style="padding-top: 5%;">
        <div class="row justify-content-center">
            <div class="col-10">
              <br><br>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user['prenom']}}</td>
                        <td>{{ $user['email']}}</td>
                        <td>
                            <button class="btn btn-primary" onclick='modify("{{ $user['email'] }}")'>Modifier</button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal modify user -->
    <div class="modal fade" id="modifyModal" tabindex="-1" aria-labelledby="modifyModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modifyModalLabel">Modifier l'utilisateur</h5>
          </div>
          <div class="modal-body">
            <form method="POST" action="/admin/user">
              @csrf
              <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
              </div>
              <div class="form-group">
                <label for="nom">Nom</label
                <input type="text" class="form-control" id="nom" name="nom">
              </div>
              <div class="form-group">
                <label for="phone">Numéro de téléphone</label>
                <input type="text" class="form-control" id="phone" name="phone">
              </div>
              <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
              <div class="form-group">
                <label for="pays">Pays</label>
                <input type="text" class="form-control" id="pays" name="pays">
              </div>
              <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville">
              </div>
              <div class="form-group">
                <label for="password">Nouveau mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <hr/>
              <button type="submit" class="btn btn-primary">Modifier l'utilisateur</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
        function modify(email) {
            $.ajax({
                type: "GET",
                url: "/admin/user?email=" + email,
                dataType: 'json',
                success: function(data) {
                    for (const [key, value] of Object.entries(data)) {
                        $("#" + key).val(value);
                    }
                    $('#modifyModal').modal('show');
                },
                error: function() {
                    alert("Une erreur est survenue.");
                }
            });
        }
    </script>
    @if(session()->has('error'))
    <script>
        alert("{{ Session::get('error') }}");
        {{ Session::forget('error') }}
    </script>
    @endif
</body>
</html>
