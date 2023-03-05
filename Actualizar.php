<?php
include("include/func.phpinc");
include("include/dbopen.php");
//PAGINA
include("include/header.php");
	
$user=$_POST['usuario'];
$pass=$_POST['contrasena'];
	
 
$sql="Select * from usuario_doctor where ID_DOCTOR={$user};";

$respuesta = query($sql);

  
     foreach ($respuesta as $fila) {
  
      $usuario=$fila['USUARIO'];
  
     }
 $sql="UPDATE usuario_doctor SET PASS=\"$pass\" WHERE ID_DOCTOR=1;";

$respuesta = query($sql);


 echo "<br><h2>El usuario ->$usuario<- ha sido correctamente modificado</h2>";
 echo "<br><a href=\"IndexBiocor.php\"> Loguear Usuario </a>";
     include("include/footer.php");
    
?>