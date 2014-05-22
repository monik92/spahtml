
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Modificar Cita</title>

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

<?php
//include database connection
include 'libs/db_connect.php';

$action = isset( $_POST['action'] ) ? $_POST['action'] : "";
if($action == "actualizar"){
  try{
  
    //write query
    //in this case, it seemed like we have so many fields to pass and 
    //its kinda better if we'll label them and not use question marks
    //like what we used here
    $query = "UPDATE citas
          SET  dia = :dia, hora = :hora, cita  = :cita
          WHERE id = :id";

    //prepare query for excecution
    $stmt = $con->prepare($query);


    //bind the parameters
    $stmt->bindParam(':dia', $_POST['lbldia']);
    $stmt->bindParam(':hora', $_POST['lblhora']);
    $stmt->bindParam(':cita', $_POST['lblcita']);   
    $stmt->bindParam(':id', $_POST['lblid']);
    
echo ($_POST['lblid']);

    // Execute the query
    if($stmt->execute()){
echo'<script languaje="javascript">alert("La Cita se modifico correctamente");location.href="modificarcitaseleccion.php"; </script> ';
    }else{
      echo'<script languaje="javascript">alert("Error al modificar cita");location.href="modificarcitaseleccion.php";</script> ';
      exit();
    }
    
  }catch(PDOException $exception){ //to handle error
    echo "Error: " . $exception->getMessage();
  }
}



try {
include 'libs/db_connect.php';
  //prepare query
  $query = "SELECT * FROM citas WHERE id= ?";
  $stmt = $con->prepare( $query );
  
  //this is the first question mark
  $stmt->bindParam(1, $_GET['lblid']);
  
  //execute our query
  $stmt->execute();
  
  //store retrieved row to a variable
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  


  //values to fill up our form
$id = $row['id'];
  
  $dia = $row['dia'];
  $hora = $row['hora'];
  $cita = $row['cita'];
  
  
}catch(PDOException $exception){ //to handle error
  echo "Error: " . $exception->getMessage();
}
  

?>

  <body id="plumas">


    <div id="divContenedorFondo">
  <div id="divFondo" style="height: 900px">

  
<div id="wrap">
    
<div  class="text-center">
    <div class="container text-center">

      <div class="row">
        <div class="col-md-2 col-md-offset-5">
        <img src="img/bastet1.png" class="img-responsive" alt="Imagen responsive">
                
      </div>
      </div>

    </div><!-- /.container -->

<div class="container text-center" >
    <!-- Single button -->

<h3 class="text-center">Modificar Cita</h3>
</br>
<form class="form-horizontal" role="form" action="#" method="post">
  
  
  
  <div class="form-group">
    <label for="lblemail" class="col-md-2 col-md-offset-3 control-label">Día</label>
    <div class="col-md-3">
      <input type="date" class="form-control" name="lbldia" id="lbldia" value='<?php echo $dia;  ?>'
             placeholder="Día">
    </div>
  </div>
  <div class="form-group">
    <label for="lblhora" class="col-md-2 col-md-offset-3 control-label">Hora</label>
    <div class="col-md-3">
      <input type="time" class="form-control" name="lblhora" id="lblhora" value='<?php echo $hora;  ?>'
             placeholder="Hora">
    </div>
  </div>
  
  <div class="form-group">
    <label for="lblcita" class="col-md-2 col-md-offset-3 control-label">Descripción de la cita</label>
    <div class="col-md-3">
      <textarea rows="4" class="form-control" id="lblcita" name="lblcita" placeholder="Escriba aqui el tipo de cita"><?php print($cita); ?></textarea>
    </div>
  </div>
  
  </br>
  <div class="form-group ">
    <div class="col-md-offset-5 col-md-1">
      <button type="submit" value="actualizar" name="action" class="btn btn-default colorboton" > </span> Aceptar</button>
      <input type="hidden" name="lblid" value='<?php echo $id;  ?>'>
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
