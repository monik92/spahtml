<?php
  
  //include database connection
  include 'libs/db_connect.php';


  
    //write query
    $query = "SELECT * FROM clientes WHERE cedula = ?";

    //prepare query for excecution
    $stmt = $con->prepare($query);

    //bind the parameters
    //this is the first question mark
    $stmt->bindParam(1, $_GET['lblcedula']);
    // Execute the query
    $stmt->execute();


    

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $lblcedula=$_GET['lblcedula'];   
    $lbldia=$_GET['lbldia'];
    $lblhora=$_GET['lblhora'];
    $lblcita=$_GET['lblcita'];
    

   //Array ( [id] => 4 [nombre] => ana [apellido] => rojas [cedula] => 24495057 [email] => [telefono] => 7406186 ) 1

   
   //.$row['nombre'].
//if (respuesta==true){ location.href="eliminarcliente.php?id='.$row['id'].'&action=borrar" }
    if ($row['nombre']!=null) {
      echo '<script languaje="javascript">location.href="asignarcita.php?lblcedula='.$lblcedula.'&lbldia='.$lbldia.'&lblhora='.$lblhora.'&lblcita='.$lblcita.'&action=asignar"; </script>';
     exit();
    }

    echo'<script languaje="javascript">alert("El cliente no existe");location.href="asignarcita.php"; </script> ';
    
     
   
 
      
      
    
 


?>

