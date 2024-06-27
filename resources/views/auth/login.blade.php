<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>

    <!-- Font Awesome for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Bootstrap Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
  <body>
    <div class="header">
      <div class="img">
        <img src="{{ asset('images/logo.jpg') }}" class="dpm-image" alt="Logo" />
      </div>
      <h2>Bienvenue dans votre plateforme de gestion des licences !</h2>
    </div>
    <div class="form-container sign-in-container">
      <form action="#">
        <h1>Se connecter</h1>
        <div class="infield">
          <i class="bi bi-envelope-fill"></i>
          <input type="email" placeholder="Email" name="email" required />
        </div>
        <div class="infield">
          <i class="bi bi-key-fill"></i>
          <input type="password" placeholder="Mot de passe" required />
        </div>
        <div class="infield">
          <i class="bi bi-person-badge-fill"></i>
          <select name="role" required>
            <option value="" disabled selected>Choisir votre rôle</option>
            <option value="assistant">Assistant du chef de bureau</option>
            <option value="chef-bureau">Chef de bureau</option>
            <option value="chef-division">Chef de division</option>
            <option value="administrateur">Administrateur</option>
          </select>
        </div>
        <a href="#" class="forgot">Mot de passe oublié?</a>
        <button>Se connecter</button>
      </form>
    </div>
  </body>
</html>

