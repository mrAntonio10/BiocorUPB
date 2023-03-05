<?php  
  
  include("include/conf.phpinc");
  include("include/func.phpinc");
  include("include/dbopen.php");
 
 $Apellido_P= $_POST['Apellido_P'];
 $Apellido_M= $_POST['Apellido_M'];
 $Nombres = $_POST['Nombres'];
 (int)$Edad= $_POST['Edad'];
 $Ocupacion= $_POST['Ocupacion'];
 $Direccion= $_POST['Direccion'];
 $Procedencia= $_POST['Procedencia'];
 $Fecha_I= $_POST['Fecha_I'];
 $Responsable= $_POST['Responsable'];
 $Telefono1= $_POST['Telefono1'];
 $Telefono2= $_POST['Telefono2'];
 $Antecedentes_P= $_POST['Antecedentes_P'];
 $Alergias= $_POST['Alergias'];
 $Enfermedad_A= $_POST['Enfermedad_A'];
 $Historia_F= $_POST['Historia_F'];
 $Antecedentes_G= $_POST['Antecedentes_G'];
 $Medicacion_H= $_POST['Medicacion_H'];
 $Tabaco= $_POST['Tabaco'];
 $Cafeina= $_POST['Cafeina'];
 $Alcohol= $_POST['Alcohol'];
 $Otros= $_POST['Otros'];
 $Cardiovascular= $_POST['Cardiovascular'];
 $Respiratorio= $_POST['Respiratorio'];
 $Gatrointestinal= $_POST['Gatrointestinal'];
 $Musculoesqueletico= $_POST['Musculoesqueletico'];
 $Neurologico= $_POST['Neurologico'];
 $Endocrinologico= $_POST['Endocrinologico'];
 $Hemotologico= $_POST['Hemotologico'];
 $Inmuno_alergico_infeccioso= $_POST['Inmuno_alergico_infeccioso'];
 $Piel_y_Faneras= $_POST['Piel_y_Faneras'];
 $PA= $_POST['PA'];
 $Pulso= $_POST['Pulso'];
 $T= $_POST['T'];
 $FR= $_POST['FR'];
 $FC= $_POST['FC'];
 $Peso1= $_POST['Peso1'];
 $Peso2= $_POST['Peso2'];
 $Sexo= $_POST['Sexo'];
 $Piel= $_POST['Piel'];
 $Cabeza_y_cuello= $_POST['Cabeza_y_cuello'];
 $Senos= $_POST['Senos'];
 $Respiratorio= $_POST['Respiratorio'];
 $Cardiovascular= $_POST['Cardiovascular'];
 $Abdomen= $_POST['Abdomen'];
 $Musculoesqueletico= $_POST['Musculoesqueletico'];
 $Neurologico= $_POST['Neurologico'];
 $Genitourinario= $_POST['Genitourinario'];
 $Diagnostico= $_POST['Diagnostico'];
 $Plan= $_POST['Plan'];

 $sql= "INSERT INTO DATOS_PACIENTE (NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,EDAD,OCUPACION,DIRECCION,PROCEDENCIA,FECHA_INGRESO,RESPONSABLE,TELEFONO1,TElEFONO2) VALUES ('{$Nombres}','{$Apellido_P}','{$Apellido_M}',{$Edad},'{$Ocupacion}','{$Direccion}','{$Procedencia}','{$Fecha_I}','{$Responsable}','{$Telefono1}','{$Telefono2}');";

query($sql);

$sql2="Select ID_PACIENTE from DATOS_PACIENTE where NOMBRE= '{$Nombres}' and Apellido_Paterno= '{$Apellido_P}' and Apellido_Materno= '{$Apellido_M}';";


$id = query($sql2);
$Ii_Paciente;

while ($objeto= $id->fetch_object()) {

    $Id_Paciente= $objeto->ID_PACIENTE;
}


$sql3= "INSERT INTO DIACNOSTICO_Y_TRATAMIENTO_PACIENTE (DIACNOSTICO, PLAN, ID_PACIENTE) VALUES ('{$Diagnostico}','{$Plan}',{$Id_Paciente});";

query($sql3);

$sql4= "INSERT INTO REVISION_POR_SISTEMAS_PACIENTE (CARDIOVASCULAR ,RESPIRATORIO ,GASTROINTESTINAL,MUSCULOESQUELETICO,NEURLOGICO,ENDOCRINOLOGICO,HEMOTOLOGICO,INMUNO_ALERGICO_INFECCIOSOS,PIEL_Y_FANERA,ID_PACIENTE) VALUES ('{$Cardiovascular}','{$Respiratorio}','{$Gatrointestinal}','{$Musculoesqueletico}','{$Neurologico}','{$Endocrinologico}','{$Hemotologico}','{$Inmuno_alergico_infeccioso}','{$Piel_y_Faneras}',{$Id_Paciente});";

query($sql4);


$sql5= "INSERT INTO SIGNOS_VITALES_PACIENTE (PA,PULSO,T,FR,FC,PESO1,PESO2,SEXO,ID_PACIENTE) VALUES ('{$PA}','{$Pulso}','{$T}','{$FR}','{$FC}','{$Peso1}','{$Peso2}','{$Sexo}','{$Id_Paciente}');";

query($sql5);

$sql6= "INSERT INTO ANTECEDENTES_PACIENTE (ANTECEDENTES_PATOLOGICOS ,ALERGIAS_Y_OTRAS_REACCIONES ,ENFERMEDAD_ACTUAL ,HISTORIAL_FAMILIAR ,ANTECEDENTES_GINECO_OBSTETRICOS ,TABACO ,CAFEINA ,ALCOHOL ,OTROS ,MEDICACION_ACTUAL ,ID_PACIENTE) VALUES ('{$Antecedentes_P}','{$Alergias}','{$Enfermedad_A}','{$Historia_F}','{$Antecedentes_G}', '{$Tabaco}','{$Cafeina}','{$Alcohol}','{$Otros}','{$Medicacion_H}', {$Id_Paciente});";

query($sql6);


$sql7= "INSERT INTO CARACTERISTICAS_GENERALES_PACIENTE (PIEL ,CABEZA_Y_CUELLO ,SENOS ,RESPIRATORIO ,CARDIOVASCULAR ,ABDOMEN ,MUSCULOESQUELETICO ,NEUROLOGICO ,GENITOURINARIO ,ID_PACIENTE) VALUES ('{$Piel}','{$Cabeza_y_cuello}','{$Senos}','{$Respiratorio}','{$$Cardiovascular}', '{$Abdomen}','{$Musculoesqueletico}','{$Neurologico}','{$Genitourinario}', {$Id_Paciente});";

query($sql7);


echo "<center><h1>Creacion de historia clinica</h1></center><br>";
echo "<center><img src = \"img/biocor2.jpg\" width= \"300\" height= \"200\"></center>";
echo "<center><h1>.:El historial clinico del paciente $Nombres $Apellido_P $Apellido_M ha sido creado con exito:.</h1></center>";
echo "<center><h2>.: Numero de la historia clinica del paciente es $Id_Paciente:.</h2></center>";
echo" <META HTTP-EQUIV=\"refresh\" CONTENT=\"5;URL=http://localhost/biocor/Muestra.html?id_paciente=$Id_Paciente&Buscar=Buscar+historia+clinica\">";

include("include/footer.php");
echo "</div>";
//CIERRE DATOS EXTRAS   
include("include/dbclose.phpinc");
?>