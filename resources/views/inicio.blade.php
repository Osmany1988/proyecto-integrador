<x-app-layout>
    <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css">
          <title>RE-gateo</title>
        </head>
      
      
        <body>
          <!-- Inicio Menú -->
          
        <nav class="navbar navbar-expand-lg navbar-light bg-menu-footer">
      
            <!-- inicio logo -->
              <a class="navbar-brand" href="index.html">
                <img src="{{ asset('images/logo-2.jpg') }}" width="70" height="70" class="rounded-circle" alt="" loading="lazy">
                Re-gateo
              </a>
            <!-- fin logo -->
      
            <!-- inicio botonera -->
              <div class="collapse navbar-collapse justify-content-md-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Regateos<span class="sr-only">(logo)</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="nuevos.html">Nuevo<span class="sr-only">(nuevo)</span></a>
                      <a class="dropdown-item" href="usados.html">Usado<span class="sr-only">(usado)</span></a>
                    </div>
                  </li>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar<span class="sr-only">(buscar)</span></button>
                  </form>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Agregar Producto<span class="sr-only">(agregar producto)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registrarse.html">Registrarse<span class="sr-only">(registrarse)</span></a>
                  </li>
                </ul>
              </div>
            <!-- fin botonera -->
        </nav>  
        <!-- Final Menú -->
      
        
        
      
      
        <!-- Inicio Main -->
      
        <div class="card-group">
        <div class="card ">
          <div class="texto-abajo">Nuevo</div>
          <a href="productos.html">
          <img src="{{ asset('images/auriculares-1.jpg') }}" class="card-img-top" alt="...">
          </a>
          <a href="productos.html">
          <div class="card-body">
            <h5 class="card-title">Auriculares</h5>
            <p class="card-text">auriculares-redragon-zeus-x-h510w-blanco-rgb-0<br>
              Precio Base: $800
            </p>
          </div>
          </a>
          <div class="card-footer">
            <small class="text-muted">Último regateo hace 2 min</small>
          </div>
          
        </div>
        <div class="card ">
          <div class="texto-abajo">Nuevo</div>
          <a href="productos.html">
          <img src="{{ asset('images/pantalon-cargo.jpg') }}" class="card-img-top" alt="...">
          </a>
          <a href="productos.html">
          <div class="card-body">
            <h5 class="card-title">Pantalón Cargo</h5>
            <p class="card-text">Pantalón Cargo Easy Fit Color-Verde Talle-48<br>
              Precio Base: $1200
            </p>
          </div>
          </a>
          <div class="card-footer">
            <small class="text-muted">Último regateo hace 2 min</small>
          </div>
          
        </div>
        <div class="card ">
          <div class="texto-abajo">Usado</div>
          <a href="productos.html">
          <img src="{{ asset('images/baccio.jpg') }}" class="card-img-top" alt="...">
          </a>
          <a href="productos.html">
          <div class="card-body">
            <h5 class="card-title">Bicicleta Baccio</h5>
            <p class="card-text">Bicicleta Montaña Baccio Al 27.5'' 3x7 Mtb C/ Suspensión Color Gris L<br>
              Precio Base: $12000
            </p>
          </div>
          </a>
          <div class="card-footer">
            <small class="text-muted">Último regateo hace 2 min</small>
          </div>
          
        </div>
        </div>
        <!-- Final Main -->
      
        <!-- Inicio Footer -->
        <footer>
            <div class="subfooter bg-menu-footer">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="texto-footer">
                      <p>Copyright © 2023. Todos los derechos reservados.</p>
                    </div>
                  </div>
                </div>
              </div>
        </footer>
        <!-- Final Footer -->
      
          <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      
          <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
          -->
        </body>
      </html>
</x-app-layout>




