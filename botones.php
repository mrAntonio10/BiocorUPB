<?php
//PAGINA
include("include/header.php");
$dato=$_POST['cambio'];
echo "<form action=\"#\" method=\"post\"> ";
echo "<br><h3> ";
 
 echo "<tr bgcolor=\"red\" style=\"color: yellow;\">";
 echo " <td align=\"left\"> Metodo: </td> <br>";
 echo "<td align=\"right\">";
 echo "<input type=\"radio\" name=\"cambio\" value=\"1\"> Añadir Usuario <br>";
 echo "<input type=\"radio\" name=\"cambio\" value=\"2\"> Eliminar Usuario<br>";
 echo "<input type=\"radio\" name=\"cambio\" value=\"3\"> Modificar Usuario <br>";
 
 echo"</td>";
 echo "</table>";
 echo "<input type=\"submit\" value=\"MOD\" style=\"font-size: 25px;\">";
 echo "</form>";
echo "</h3><br>";

echo "</div>";
echo "</div>";

echo "</form>";
 echo "<br><a href=\"IndexBiocor.php\"> Loguear Usuario </a>";
if($dato==1){
 echo "<form action=\"Usuario.php\" method=\"post\">";
 echo "<h2 style=\"color: grey;\">";
echo "añadir usuario ";
 echo "</h2>";

echo"<tr>";
 echo"<td> Usuario : </td>";
 echo "<td align=\"center\">";
 echo"<input type=\"text\" name=\"usuario\" size=\"6\" style=\"font-size: 20px;\" >";
 echo "</td>";

echo"<td> Contraseña : </td>";
 echo "<td align=\"center\">";
 echo"<input type=\"text\" name=\"contrasena\" size=\"6\" style=\"font-size: 20px;\" >";
 echo "</td>";

echo"<td> Contraseñadenuevo : </td>";
 echo "<td align=\"center\">";
 echo"<input type=\"text\" name=\"Contrasenadenuevo\" size=\"6\" style=\"font-size: 20px;\" >";
 echo "</td>";
 ECHO"</tr><br>";
 echo "<input type=\"submit\" name=\"usuarioAñadir\" value=\"Añadir usuario\">";
}
if($dato==2){
 echo "<form action=\"Eliminar.php\" method=\"post\">";
 echo "<h2 style=\"color: grey;\">";
echo "Eliminar Usuario ";
 echo "</h2>";

echo"<tr>";
 echo"<td> ID Usuario : </td>";
 echo "<td align=\"center\">";
 echo"<input type=\"text\" name=\"usuario\" size=\"6\" style=\"font-size: 20px;\" >";
 echo "</td>";

 echo "<input type=\"submit\" name=\"eliminarUsuario\" value=\"Eliminar usuario\">";
}
if($dato==3){
 echo "<form action=\"Actualizar.php\" method=\"post\">";
 echo "<h2 style=\"color: grey;\">";
echo "Modificar usuario ";
 echo "</h2>";

echo"<tr>";
 echo"<td> ID Usuario : </td>";
 echo "<td align=\"center\">";
 echo"<input type=\"text\" name=\"usuario\" size=\"6\" style=\"font-size: 20px;\" >";
 echo "</td>";

echo"<td> Contraseña : </td>";
 echo "<td align=\"center\">";
 echo"<input type=\"text\" name=\"contrasena\" size=\"6\" style=\"font-size: 20px;\" >";
 echo "</td>";

 echo "<input type=\"submit\" name=\"valorActualizar\" value=\"Modificar usuario\">";
}
  include("include/footer.php");
?>