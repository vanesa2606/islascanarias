

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>Hello, world!</title>

  </head>
  
  <body>
  
   <header>
     <img src="imagenes/logo.jpg" alt= "Esto es el logo" height=220>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
      </nav>
      <br>
   </header>


  <div id = "uno">
  <div class="container">
      <div class="row">
        <div class="col">
          <h1> Datos </h1>

          

          <form action="enviarformulario.php">   <!-- esto es para mandar el formulario dende le digamos-->

                  <!-- nombre y apellidos-->
                  <div class="row">
                    <div class="col">
                      <input name="Nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col">
                      <input name="Apellidos" type="text" class="form-control" placeholder="Apellidos">
                    </div>
                  </div>
                  <br>
                  
                  <!-- email y contraseña-->
                  <div class="row">
                    <div class="col">
                      <input name="Correo" type="email" class="form-control" placeholder="Correo">
                    </div>
                    <div class="col">
                      <input name="Codigo"type="password" class="form-control" placeholder="Contraseña">
                    </div>
                  </div>
                  <br>


                  <!-- edad y nacionalidad  -->
                  <div class="row">
                    <div class="col-md-3">
                      <input name="Edad" type="number" class="form-control" placeholder="Edad">
                    </div>
                    <div class="col-md-9">  
                      <select class="form-control" name="nacionalidad">
                        <option value="">Selecciona...</option>
                        <option value="espana">España</option>
                        <option value="portugal">Portugal</option>
                        <option value="holanda">Holanda</option>
                      </select> 
                    </div>
                    </div>
                    <br>

                  <!-- Esta es una casilla de CHECKBOX aqui hay cuatro botones-->
                  <div class="row">
                  <div class="col-md-9 form-group">

                      <span id = "titulo1">Intereses</span>

                  <div class="form-check">
                    <input class="form-check-input"name="intereses[]" type="checkbox" value="informatica" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Informatica
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"name="intereses[]" type="checkbox" value="biologia" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Biologia
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"name="intereses[]" type="checkbox" value="empresas" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Empresas
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"name="intereses[]" type="checkbox" value="matematicas" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Matemáticas
                    </label>
                  </div>
                  </div>

                  <!--Este es un radio button-->
                  <div class="col-md-3 form-group">

                    <span id = "titulo1"> Sexo </span>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="Mujer">
                    <label class="form-check-label" for="exampleRadios1">
                      Mujer
                    </label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="Hombre">
                    <label class="form-check-label" for="exampleRadios1">
                     Hombre
                    </label>
                  </div>
                  </div>
                  </div>

                  <!-- boton-->
                  <br>

                    <div class="col">

                      <center>                 <!-- mx-auto btn btn... para centrar -->

                        <button type="submit" class="btn btn-outline-danger">Enviar</button>

                      </center>

                    </div>
          </form>

                <br>

        </div>

        <div class="col">

          <img src="imagenes/canarias.jpg" alt="paisaje" height="" width="100%">

        </div>

      </div>
   
  

      
  </div>
 
  <div id = "dos">
    <img src="imagenes/montaña.jpg" alt="esta imagen es un paisaje"width="100%">
  </div>

  <div = "tres">
    <div class ="container">
      <div class = "row">
        <div class ="col">
        Textito
        </div>
        <div class ="col">
        Formularioooooooooooooo
        </div>
      </div>
    </div>
  </div>


   <footer>
      <div class ="container">
          <div class = "row">
              <div class ="col">
                <p>Transmediterranea SL</p>
                <p>
                
                Avenida de la guagua,17<br>
                Isla de Tenerife<br>
                10001 - Islas Canarias<br>

                </p>
              </div>
              <div class ="col">
                <ul>
                  <li>Hierro</li>
                  <li>Gomero</li>
                  <li>La Palma</li>
                  <li>Tenerife</li>
                  <li>Gran Canarias</li>
                  <li>Fuerteventura</li>
                  <li>Lanzarote</li>

                </ul>
              </div>
              <div class ="col">
                <p>
                  Pago con tarjeta<br>
                  Pasarela de pago 100% segura
                </p>
              </div>
              <div class ="col">
                <p>
                  Para más info busca en 
                  <a href="https://www.google.es/" target="_blank"> Google </a>
                </p>
              </div>
          </div>
      </div>
   <footer/>




        
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>

</html>