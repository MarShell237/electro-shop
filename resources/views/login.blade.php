<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Connexion à votre compte</h2>
            <form id="login-form" action="{{ url('login') }}" method="POST">
              @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Votre email">
                    <small id="email-error" class="error-message">
                      @error('email')
                        {{ $message }}
                      @enderror
                    </small>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe">
                    <small id="password-error" class="error-message">
                      @error('password')
                        {{ $message }}
                      @enderror
                    </small>
                    <ul id="password-criteria">
                        <li id="length" class="invalid">Au moins 8 caractères</li>
                        <li id="uppercase" class="invalid">Au moins une lettre majuscule</li>
                        <li id="special" class="invalid">Au moins un caractère spécial</li>
                    </ul>
                </div>
                <button type="submit" class="btn">Se connecter</button>
            </form>
            <p class="signup-text">Vous n'avez pas de compte ? <a href="{{ url('signup') }}" class="signup-link">Inscrivez-vous</a></p>
        </div>
    </div>
    {{-- <script src="../js/index.js"></script> --}}
</body>
</html>
