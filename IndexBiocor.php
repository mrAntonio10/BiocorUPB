<?php
include_once("include/conf.phpinc");
//PAGINA
include("include/header.php");

echo "<body>";
 
 //COOKIES 
 $USER= $_POST['USER'];
 $PASS= $_POST['PASS'];
 $fijo=$_POST['fijo'];
 setcookie("USER",$USER);
 setcookie("PASS",$PASS);


if($fijo!=1){
//esto es mi css 
echo"<form action=\"#\" method=\"post\">";
echo "<h3 align=\"center\">";
  echo "<table BORDER=\"5\" CELLPADDING=\"0\" CELLSPACING=\"0\" align=\"center\">";
    echo "<tr bgcolor=\"#1e90ff\">";
      echo "<td ALIGN=\"center\" width=\"452\">";
        echo"<font size=\"6px\">";
        echo "<a href=\"javascript:abrir()\" style=\"color:white;\">";
        ECHO "Iniciar sesion Biocor";
        echo "</a>";
        echo "</font>";

      echo "</td>";
    echo "</tr>";
  echo "</table>";
echo "</h3>";

//POP UP :D de ventana
echo "<div class=\"ventana\" id=\"vent\">";
  //BOTON Cerrar
echo "<div id=\"cerrar\">";
    echo "<a href=\"javascript: cerrar()\">";
    ECHO "<img src=\"https://w7.pngwing.com/pngs/844/786/png-transparent-maine-computer-icons-close-icon-thumbnail.png\" widht=\"15\" height=\"25\">";
   echo " </a>";
echo "</div>";
//FIN DEL BOTON CERRAR
//FORM
 echo "<center>";
   echo "<h4 style=\"margin:0px;\">";
   ECHO "INICIE SESION";
   echo "<br>";
    echo "<b><h3>";
    ECHO "Usuario:";
    echo "</h3> </b> <input placeholder=\"ZzzarcoX\"  name=\"USER\" required >";
  echo "<br>";
   echo "<b><h3>";
    ECHO "Contrase&ntilde;a:";
     echo"</h3></b> <input type=\"password\" placeholder=\"******\"  name=\"PASS\" required >";
    echo "<br>";
    echo "<b><h3>";
  echo "<br><br>";
  echo"<input type=\"hidden\" name=\"fijo\" value=\"1\">";
    echo "<input type=\"submit\"  name=\"accion\" value=\"Conectar\" style=\"background-color: skyblue\"> ";
 echo" </h4> </center>";
//FIN DEL POP UP
 ECHO "</div>";


echo "</form>";

 echo " <script> ";
   echo "function continuar() {";
    echo "document.getElementById(\"boton\").style.display=\"block\";";
  echo "}";

  echo "function abrir(){";
    echo "document.getElementById(\"vent\").style.display=\"block\";";
 echo  "}";
  echo "function cerrar(){";
    echo "document.getElementById(\"vent\").style.display=\"none\";";
  echo "}";
echo "</script>";
}
else{

    echo" <META HTTP-EQUIV=\"REFRESH\" CONTENT=\"2;URL=BiocorInicio (2).html\">";
}
//CIERRE PAGINA
echo "<div class=\"text-final\">";
     include("include/footer.php");
     echo "</div>";
?>