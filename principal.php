
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bastetspa.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="plumas">

<div id="divContenedorFondo" >
  <div id="divFondo" class="text-center" style="height: 900px">
<div id="wrap">
    
    <div id="todo" class="text-center">
        <div class="container text-center">

              <div class="row">
                    <div class="col-md-4 col-md-offset-4 espacio">

                          <img src="img/bastetLogo.png" class="img-responsive" alt="Imagen responsive">
                          </br>
                          </br>
                          </br>
                          

                    </div>
              </div>

        </div><!-- /.container -->

        <div class="container text-center" >
                <!-- Single button -->
            <div class="btn-group text-left">
                  <button type="button" class="btn btn-default btn-lg dropdown-toggle colorboton" data-toggle="dropdown">Cliente <span class="caret"></span></button>
                  <ul class="dropdown-menu colorboton colorboton2" role="menu"  style="color:blue">
                    <li><a href="registrarcliente.php"><span class="glyphicon glyphicon-user"></span>  Registrar</a></li>
                    <li><a href="modificarclienteseleccion.php"><span class="glyphicon glyphicon-pencil"></span>  Modificar</a></li>
                    <li><a href="eliminarcliente.php"><span class="glyphicon glyphicon-remove"></span>  Eliminar</a></li>
                  </ul>
            </div>

            <div class="btn-group text-left">
                  <button type="button" class="btn btn-default btn-lg dropdown-toggle colorboton" data-toggle="dropdown">Citas<span class="caret"></span></button>
                  <ul class="dropdown-menu colorboton colorboton2" role="menu">
                        <li><a href="asignarcita.php"><span class="glyphicon glyphicon-inbox"></span>  Asignar</a></li>
                        <li><a href="modificarcitaseleccion.php"><span class="glyphicon glyphicon-random"></span>  Modificar</a></li>
                        <li><a href="eliminarcita.php"><span class="glyphicon glyphicon-remove"></span>  Eliminar</a></li>
                        <li><a href="vercitaseleccion.php"><span class="glyphicon glyphicon-eye-open"></span>  Ver</a></li>
                  </ul>
            </div>

            



        </div>
        
    </div>
  <div id="push"></div>
</div>
</div>
</div>

<div id="footer" class="text-center">
<a href="mapadelsitio.php">Mapa del sitio</a>

    <div class="container"><p> &#169; Spa 2014</p></div>
</div>  

     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
