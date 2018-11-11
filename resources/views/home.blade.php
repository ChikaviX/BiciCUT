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
   .colorwhite{
        color:white !important:;
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
    <li><a href="/">Modulos</a></li>
    <li><a href="/">Mi cuenta</a></li>
    <li><a href="/">FAQs</a></li>
    <li><a href="/maps">Mapa</a></li>
    <li><a class=" red colorwhite dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                          Salir 
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                   </div>
    </li>
  </ul>
          
        <div class="row">
            <div class="col m4 offset-m4 s12">
                <div class="card animated zoomIn center ">
                  <h5 style='color:blue:'>Tu tiempo</h5>
                    <h1 id="demo"></h1>
                </div>
            </div>
        </div>
      <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    var countDownDate = new Date("Nov 09, 2018 10:41:25").getTime();
    var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = minutes + ":" + seconds;
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRADO";
    }
}, 1000);
</script>
    </body>
  </html>





