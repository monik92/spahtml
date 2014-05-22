
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Eliminar Cliente</title>

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

  <body id="plumas" >

<?php
$action = isset($_GET['action']) ? $_GET['action'] : "";

if($action=='borrar'){
  
  //include database connection
  include 'libs/db_connect.php';

  try{
  
    //write query
    $query = "DELETE FROM clientes WHERE id = ?";

    //prepare query for excecution
    $stmt = $con->prepare($query);

    //bind the parameters
    //this is the first question mark
    $stmt->bindParam(1, $_GET['id']);

    

    // Execute the query
    if($stmt->execute()){
    
      
      echo'<script languaje="javascript">alert("El cliente se Elimino Correctamente!!");</script> ';

      
    }else{
      echo'<script languaje="javascript">alert("Error al eliminar cliente");</script> ';
    }
    
  }catch(PDOException $exception){ //to handle error
    echo "Error: " . $exception->getMessage();
  }
}

?>

<div id="divContenedorFondo">
  <div id="divFondo" style="height: 900px">

<div id="wrap">  
  <div class="text-center">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-2 col-md-offset-5">
          <img src="img/bastet1.png" class="img-responsive" alt="Imagen responsive">
        </div>
      </div>

    </div><!-- /.container -->

    <div class="container text-center" >
      <h3 class="text-center">Eliminar Cliente</h3>
      </br>
      
      <form class="form-horizontal" role="form" action="verificarusuario.php" method="get" id="formeliminar" name="formeliminar">
      
        <div class="form-group">
          <label for="lblcedula" class="col-md-2 col-md-offset-3 control-label">Cédula</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="lblcedula" id="lblcedula" placeholder="Cédula">
            </div>
        </div>
        </br>
        <div class="form-group ">
          <div class="col-md-offset-5 col-md-1">
            <button type="submit"  class="btn btn-default colorboton" value="borrar" name="action">Eliminar</button>
              
          </div>
          <div class="col-md-1">

            <button type="button" onclick="location='principal.php'" class="btn btn-default colorboton">Cancelar</button>
          </div>
        </div>
      </form>



    </div>
  </div>
  <div id="push"></div>
</div>
</div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<div id="footer" class="text-center">
    <div class="container"><p> &#169; Spa 2014</p></div>
</div>  

     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
