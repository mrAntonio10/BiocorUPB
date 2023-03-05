<?php
include("include/func.phpinc");
include("include/dbopen.php");
//PAGINA
include("include/header.php");
	
$user=$_POST['usuario'];
$pass=$_POST['contrasena'];
$pass2=$_POST['Contrasenadenuevo'];
 
echo "$user $pass   $pass2";
	
    if($pass!=$pass2){
        echo "<br>Las contrase&ntilde;a no coinciden, usuario no registrado<br>";
    }
    else{

         $sql= "INSERT INTO usuario_doctor (USUARIO,PASS) VALUES ('{$user}','{$pass}');";

    query($sql);



        echo "<br><h2>El usuario añadido a la base de datos </h2>";
        echo "<br><a href=\"IndexBiocor.php\"> Loguear Usuario </a>";

    }
    echo "<br><a href=\"botones.php\"> Volver a opciones de administrador </a>";
     include("include/footer.php");
    
?>