
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Asignar Cita</title>

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

if($action=='asignar'){
  //include database connection
  include 'libs/db_connect.php';

  try{
  
    //write query
    $query = "INSERT INTO citas SET cedula = ?, dia  = ?, hora = ?, cita = ?";

    //prepare query for excecution
    $stmt = $con->prepare($query);

 

    //this is the third question mark
    $stmt->bindParam(1, $_GET['lblcedula']);

    //this is the fourth question mark
    $stmt->bindParam(2, $_GET['lbldia']);
    
    //this is the fifth question mark
    $stmt->bindParam(3, $_GET['lblhora']);

    //this is the fifth question mark
    $stmt->bindParam(4, $_GET['lblcita']);

    // Execute the query
    if($stmt->execute()){
    
      echo'<script languaje="javascript">alert("La cita se asigno Correctamente!!");</script> ';
     // echo '<h3 class="bg-success text-center">El cliente se Registro Correctamente</h3>';

      
    }else{
      echo'<script languaje="javascript">alert("Error al asignar cita");</script> ';
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
                <h3 class="text-center">Asignar Cita</h3>
                </br>
                <form class="form-horizontal" role="form" action="verificarexiste.php" method="get">
                  <div class="form-group">
                      <label for="lblcedula" class="col-md-2 col-md-offset-3 control-label">Cédula</label>
                      <div class="col-md-3">
                          <input type="tel" class="form-control" id="lblcedula" name="lblcedula" placeholder="Cédula" required>
                      </div>
                  </div>
                  
                  <div class="form-group">
                      <label for="lbldia" class="col-md-2 col-md-offset-3 control-label">Día</label>
                          <div class="col-md-3">
                              <input type="date" class="form-control" id="lbldia" name="lbldia" placeholder="Día" required>
                          </div>
                  </div>
                  <div class="form-group">
                    <label for="lbltelefono" class="col-md-2 col-md-offset-3 control-label">Hora</label>
                    <div class="col-md-3">
                      <input type="time" class="form-control" id="lblhora" name="lblhora"
                             placeholder="Hora" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                      <label for="lblcita" class="col-md-2 col-md-offset-3 control-label">Descripción de la cita</label>
                      <div class="col-md-3">
                        <textarea rows="4" class="form-control" id="lblcita" name="lblcita" placeholder="Escriba aqui el tipo de cita" required></textarea>
                      </div>
                    </div>
                  </br>

                  <div class="form-group ">
                    <div class="col-md-offset-5 col-md-1">
                      <button type="submit" class="btn btn-default colorboton" >Aceptar</button>
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

<div id="footer" class="text-center">
    <div class="container"><p> &#169; Spa 2014</p></div>
</div>  

     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
