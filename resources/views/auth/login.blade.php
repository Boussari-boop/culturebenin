<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>

    <!-- Styles de base pour un affichage propre et centré (CSS intégré) -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        /* 1. CONTENEUR PRINCIPAL (Conteneur Flex) */
        .auth-wrapper {
            width: 90%;
            max-width: 850px; /* Augmenté pour l'affichage côte à côte */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            overflow: hidden; 
            display: flex; /* Active Flexbox pour les colonnes */
            min-height: 500px; /* Hauteur minimale pour que la section logo soit visible */
        }

        /* 2. SECTION LOGO / EN-TÊTE (Colonne de gauche) */
        .header-box {
            width: 50%; /* Occupe 50% de l'espace */
            min-width: 300px;
            background-color: #5d9cec; /* Couleur d'accent */
            color: white;
            padding: 30px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centre verticalement le contenu */
            align-items: center;
            /* Seuls les coins gauches sont arrondis */
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }
        
        /* Style pour l'image du logo */
        .app-logo {
            max-width: 100px; /* Limite la taille de l'image de votre logo */
            height: auto;
            margin-bottom: 20px;
            filter: drop-shadow(0 4px 4px rgba(0,0,0,0.3));
        }

        .header-box h1 {
            font-size: 2rem;
            margin: 10px 0 0 0;
        }
        .header-box p {
            font-size: 1.1rem;
            margin-top: 10px;
            opacity: 0.9;
        }

        /* 3. SECTION FORMULAIRE (Colonne de droite) */
        .login-container {
            width: 50%; /* Occupe 50% de l'espace */
            padding: 40px; /* Plus de padding pour compenser l'en-tête */
            background-color: #ffffff;
            /* Seuls les coins droits sont arrondis */
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
            box-sizing: border-box;
        }

        h2 {
            display: none; 
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box; 
            transition: border-color 0.3s;
        }
        input[type="email"]:focus, input[type="password"]:focus {
            border-color: #5d9cec;
            outline: none;
        }
        .error-message {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 5px;
            display: block;
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #5d9cec;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #4a80c9;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-top: 15px;
        }
        .remember-me input {
            margin-right: 8px;
        }
        .forgot-password {
            text-align: right;
            margin-top: 15px;
        }
        .forgot-password a {
            color: #5d9cec;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .session-status {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            text-align: center;
        }
        
        /* Ajustements pour les petits écrans (Mobile First) */
        @media (max-width: 768px) {
            .auth-wrapper {
                flex-direction: column; /* Empile les boîtes verticalement sur mobile */
                max-width: 400px;
                min-height: auto;
            }
            .header-box, .login-container {
                width: 100%; /* Reprend la pleine largeur */
                padding: 20px;
                /* Réinitialise les coins arrondis pour la disposition verticale */
                border-radius: 0;
            }
            .header-box {
                /* Coins supérieurs arrondis pour l'en-tête mobile */
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
            }
            .login-container {
                 /* Coins inférieurs arrondis pour le formulaire mobile */
                border-bottom-left-radius: 12px;
                border-bottom-right-radius: 12px;
            }
        }
    </style>
</head>
<body>

<div class="auth-wrapper">
    <!-- NOUVEL EN-TÊTE AVEC LOGO ET TITRE (Colonne de gauche sur desktop) -->
    <div class="header-box">
        <!-- EMPLACEMENT POUR VOTRE LOGO (Image) -->
        <img src="{{ asset('assets backend/img/bg/logo2.png') }}" 
             alt="Logo de l'Application" 
             class="app-logo"
             onerror="this.style.display='none'"> 
        <!-- Le SVG a été remplacé par le tag <img> ci-dessus -->
        
        <h1>Culture du Bénin</h1>
        <p></p>
    </div>
    
    <!-- CONTENEUR DU FORMULAIRE (Colonne de droite sur desktop) -->
    <div class="login-container">
        <!-- Affichage des messages de statut de session (ex: après réinitialisation du mot de passe) -->
        @if (session('status'))
            <div class="session-status">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Champ Email -->
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input id="email" 
                       type="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       required 
                       autofocus>
                
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <!-- Champ Mot de passe -->
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" 
                       type="password" 
                       name="password" 
                       required 
                       autocomplete="current-password">
                
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Se souvenir de moi / Remember Me -->
            <div class="remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">Se souvenir de moi</label>
            </div>

            <!-- Bouton de Connexion -->
            <div class="form-group" style="margin-top: 30px;">
                <button type="submit" class="btn-primary">
                    Se Connecter
                </button>
            </div>

            <!-- Mot de passe oublié -->
            @if (Route::has('password.request'))
                <div class="forgot-password">
                    <a href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                </div>
            @endif
        </form>
    </div>
</div>

</body>
</html>