<?php

include_once("conf.phpinc");
    $dblink = new mysqli('localhost','biocor', 'Biocor2022', 'biocor',3307);

     if ($dblink->connect_error) {
 die('<center> (' . $dblink->connect_errno . ') '." <br><h1>Error a la hora de conectar</h1> <a href=\"IndexBiocor.php\" style=\"font-size:45px;\"> <br>volver atras... </a></center>");
    }
 
  /*
   
  */

?>