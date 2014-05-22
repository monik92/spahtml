
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Registrar Cliente</title>

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

  <?php
$action = isset($_POST['action']) ? $_POST['action'] : "";

if($action=='registrar'){
	//include database connection
	include 'libs/db_connect.php';

	try{
	
		//write query
		$query = "INSERT INTO clientes SET nombre = ?, apellido = ?, cedula = ?, email  = ? , telefono = ?";

		//prepare query for excecution
		$stmt = $con->prepare($query);

		//bind the parameters
		//this is the first question mark
		$stmt->bindParam(1, $_POST['lblnombre']);

		//this is the second question mark
		$stmt->bindParam(2, $_POST['lblapellido']);

		//this is the third question mark
		$stmt->bindParam(3, $_POST['lblcedula']);

		//this is the fourth question mark
		$stmt->bindParam(4, $_POST['lblemail']);
		
		//this is the fifth question mark
		$stmt->bindParam(5, $_POST['lbltelefono']);

		// Execute the query
		if($stmt->execute()){
		
			echo'<script languaje="javascript">alert("El cliente se Registro Correctamente!!");</script> ';
     // echo '<h3 class="bg-success text-center">El cliente se Registro Correctamente</h3>';

      
		}else{
			echo'<script languaje="javascript">alert("El cliente no se pudo registrar, es posible que ya exista");</script> ';
		}
		
	}catch(PDOException $exception){ //to handle error
		echo "Error: " . $exception->getMessage();
	}
}

?>

    

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

<h3 class="text-center">Registrar Cliente</h3>
</br>
<form class="form-horizontal" role="form" action="#" method="post">
  <div class="form-group">
    <label for="lblnombre" class="col-md-2 col-md-offset-3 control-label">Nombre</label>
    <div class="col-md-3">
      <input title="Debe introducir un Nombre" type="text" class="form-control" id="lblnombre" name="lblnombre"
             placeholder="Nombre" required>
    </div>
  </div>
  <div class="form-group">
    <label for="lblapellido" class="col-md-2 col-md-offset-3 control-label">Apellido</label>
    <div class="col-md-3">
      <input title="Debe introducir un Apellido" type="text" class="form-control" id="lblapellido" name="lblapellido"
             placeholder="Apellido" required>
    </div>
  </div>
  <div class="form-group">
    <label for="lblcedula" class="col-md-2 col-md-offset-3 control-label">Cédula</label>
    <div class="col-md-3">
      <input title="Debe introducir la Cedula" type="tel" class="form-control" id="lblcedula" name="lblcedula"
             placeholder="Cédula" required>
    </div>
  </div>
  <div class="form-group">
    <label for="lblemail" class="col-md-2 col-md-offset-3 control-label">Email</label>
    <div class="col-md-3">
      <input type="email" class="form-control" id="lblemail" name="lblemail"
             placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="lbltelefono" class="col-md-2 col-md-offset-3 control-label">Teléfono</label>
    <div class="col-md-3">
      <input title="Debe introducir un Telefono" type="tel" class="form-control" id="lbltelefono" name="lbltelefono"
             placeholder="Teléfono" required>
    </div>
  </div>
  
  
  
  </br>
  <div class="form-group ">
    <div class="col-md-offset-5 col-md-1">
      <button type="submit" class="btn btn-default colorboton" value="registrar" name="action" >Aceptar</button>
    </div>
  

 
    <div class="col-md-1">
      <button type="button" onclick="location='principal.php'" class="btn btn-default colorboton">Cancelar</button>
    </div>
  </div>
</form>


</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
