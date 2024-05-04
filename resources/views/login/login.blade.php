<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OFPPT Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  /* style.css */
  body {
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-image: url("pexels-pixabay-290595.jpg"); /* Placeholder image */
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  .header, .footer {
    padding: 1rem;
  }

  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .main {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card {
    background-color: rgba(0, 0, 0, 0.514);
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    width: 500px;
    padding: 30px;
    text-align: center;
    color : white;
  }

  .card-title {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 1.5rem;
  }

  .form-label {
    display: block;
    font-size: 1rem;
    margin-bottom: 5px;
  }

  .form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  }

  .btn-primary:hover {
    background-color: #0067cc;
  }

  .footer {
    text-align: center;
  }
</style>
</head>
<body>
<header class="header bg-light">
  <img src="Logo_ofppt.png" alt="School Logo" class="img-fluid" style="width: 53px;border-radius: 50px; margin:0 30px">
  <img src="logo_platform.jpg" alt="Platform Logo" class="img-fluid" style="width: 100px;">
</header>

<main class="main ">
  <div class="card shadow-sm">
    <h2>Authentification</h2>
    <form method="POST" action="{{route('login')}}">
      @csrf
      <div class="form-group">
        <label for="email" class="form-label">Login</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      </div>
      @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <div class="form-group">
        <label for="password" class="form-label">Mot de passe</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
       </div>
       @error('password')
           <div class="invalid-feedback">{{ $message }}</div>
       @enderror
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
        <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
      </div>
      <button type="submit" class="btn btn-primary">Entrer</button>
    </form>
    
    
  </div>
</main>


<footer class="footer bg-light">
  Copyright © OFPPT 2024  -  www.ofppt.ma
</footer>
</body>
</html>
