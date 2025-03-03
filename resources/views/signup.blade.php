<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Créez un compte</h2>
            <form id="signup-form" action="{{ url('signup') }}" method="POST">
              @csrf
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                <div class="input-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="name" placeholder="Votre nom d'utilisateur">
                    <small id="username-error" class="error-message"></small>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email">
                    <small id="email-error" class="error-message"></small>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe">
                    <small id="password-error" class="error-message"></small>
                    <ul id="password-criteria">
                        <li id="length" class="invalid">Au moins 8 caractères</li>
                        <li id="uppercase" class="invalid">Au moins une lettre majuscule</li>
                        <li id="special" class="invalid">Au moins un caractère spécial</li>
                    </ul>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirmer le mot de passe</label>
                    <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirmez votre mot de passe">
                    <small id="confirm-password-error" class="error-message"></small>
                </div>
                <button type="submit" class="btn" disabled>S'inscrire</button>
            </form>
            <p class="signup-text">Vous avez déjà un compte ? <a href="{{ url('login') }}" class="signup-link">Connectez-vous</a></p>
        </div>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>
