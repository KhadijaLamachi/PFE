<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil Formateur') }}</div>

                <div class="card-body">
                <div class="card-body">
                 <h5 class="card-title">Profil Formateur</h5>
                 <p class="card-text">Nom: {{ $formateur->nom }}</p>
                 <p class="card-text">Prénom: {{ $formateur->prenom }}</p>
                 <p class="card-text">Email: {{ $formateur->email }}</p>
                 <!-- Ajoutez ici les champs pour changer le mot de passe -->
             </div>

                    <form method="POST" action="{{ route('formateurs.update', $formateur->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Mot de passe actuel') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">{{ __('Nouveau mot de passe') }}</label>
                            <input id="new_password" type="password" class="form-control" name="new_password" required>
                        </div>

                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label">{{ __('Confirmer le nouveau mot de passe') }}</label>
                            <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>