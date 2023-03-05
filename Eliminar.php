<?php
include("include/func.phpinc");
include("include/dbopen.php");
//PAGINA
include("include/header.php");
	
$user=$_POST['usuario'];

	
 
$sql="Select USUARIO from usuario_doctor where ID_DOCTOR={$user};";

$respuesta = query($sql);

  
     foreach ($respuesta as $fila) {
  
      $usuario=$fila['USUARIO'];
  
     }
 
$sql="DELETE FROM usuario_doctor  WHERE ID_DOCTOR={$user};";

$respuesta = query($sql);

 echo "<br><h2>El usuario ->$usuario<- ha sido removido de la base de datos</h2>";
 echo "<br><a href=\"IndexBiocor.php\"> Loguear Usuario </a>";
     include("include/footer.php");
    
?>