 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/index.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Bicicut Inicia sesion</title>
    </head>
<style>
    .btn-block{
        width: 100%;
    }
    .cutcolor{
        background-color: #434343;
    }
</style>
      <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script>
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
        
</script>
    <body>
      <nav>
    <div class="nav-wrapper cutcolor">
      <a href="#!" class="brand-logo center">BICICUT</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
 <li><a href="/">Inicio</a></li>
    <li><a href="/">Mi cuenta</a></li>
    <li><a href="/">FAQs</a></li>
    <li><a href="/">Mapa</a></li>
  </ul>
          
        <div class="row">
            <div class="col m4 offset-m4">
                <div class="card animated zoomIn    ">
                    
                <h2 class='center-align'>Ingresa</h2>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row">
                         <div class="input-field col s12">
                     <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autofocus>
                      <label for="first_name">Correo</label>
                    </div>
                         <div class="input-field col s12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <label for="first_name">Contraseña</label>
                    </div>
                </div>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                 <button type="submit" class="btn cutcolor btn-block">
                                    {{ __('Login') }}
                                </button>
                </div>
                </form>
            </div>
        </div>
      <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>


