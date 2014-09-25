<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

header("Content-Type: text/html;charset=utf-8");

$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="edmonddj_dorada"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="root"; // password de acceso para el usuario de la
                      // linea anterior
$db="edmonddj_dorada";        // Seleccionamos la base con la cual trabajar
$conexion = mysql_connect($dbhost, $dbusuario, $dbpassword);
mysql_select_db($db, $conexion);

mysql_query("SET NAMES 'utf8'");

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
 
 include("database/conexion.php");
 
//modifica estas variables según tu servidor de MySQL

$bd_servidor = $dbhost;
$bd_usuario = $dbusuario;
$bd_contrasenya = $dbpassword;
$bd_bdname = $db;
 
$bd_tabla = "locales"; 

// Tabla donde se harán las búsquedas
// Conexión y selección de la base de datos

$link = mysql_connect($bd_servidor,$bd_usuario,$bd_contrasenya);
mysql_select_db($bd_bdname,$link);
mysql_query("SET NAMES 'utf8'");
 
?>


<br />
<form id="form1" name="form1" method="post" action="tiendas.php">


<?php

//Con este query obtendremos los campos por los cuales el usuario puede buscar

$result = mysql_query("SHOW FIELDS from `$bd_tabla`",$link);
while($row = mysql_fetch_row($result)) {
	
// en $row[0] tenemos el nombre del campo
// de esta manera no necesitamos conocer el nombre de los campos
// por lo que cualquier tabla nos valdrá

?>


<?php
}
?>

<font size=2 color=black face=Verdana>
&nbsp;Ingresa una palabra
<label for="palabra"></label>
<input type="text" name="palabra" id="palabra" />
&nbsp;
<input type="submit" name="enviar" id="enviar" value="Buscar" />

</form>


<?
////////////////////////////
// Proceso del Formulario
///////////////////////////
if(isset($_POST['idd']) && isset($_POST['nom_loc']) && isset($_POST['gir'])) {
	
	
	
// Solo se ejecuta si se ha enviado el formulario
$query = "select * from $bd_tabla WHERE idemp  LIKE '%{$_POST[idd]}%' AND no_local LIKE '%{$_POST[nom_loc]}%' AND nombre_comercial LIKE '%{$_POST[gir]}%'";

?>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>

<td height=20 align="center" valign="top"><br><strong><div align=left>&nbsp;Resultados de </strong>"<i>

<?php echo"$_POST[gir]"; ?>

</i> " </div></strong></p>
<p>



<?php	

//echo $query;

$result = mysql_query($query,$link);
$found = false; // Si el query ha devuelto algo pondrá a true esta variable
while ($row = mysql_fetch_array($result)) {
$found = true;

/*
echo "<p>";
*/
/*
foreach($row as $nombre_campo => $valor_campo) {
*/	
	
// Tenemos que mostrar todos los campos de las filas donde se haya
// encontrado la búsqueda.
 
if(is_int($nombre_campo)) {
continue; //Cuando hacemos mysql_fetch_array, php genera un array
// con todos los valores guardados dos veces, uno con
// índice numérico y otro con índice el nombre del campo.
// Solo nos interesa el del nombre del campo.

}

$idemp = $row['idemp'];

$local = $row['local'];
$logo_marca = $row['logo_marca'];
$no_local = $row['no_local'];

$responsable = $row['responsable'];
$telefono_local = $row['telefono_local'];

$horario = $row['horario'];
$email = $row['email'];

$n_local = $row['nombre_comercial'];
$giro = $row['giro'];
$info = $row['informacion'];


echo "
<table width=100% align=center  background=$fondo_secciones cellpadding=0 cellspacing=0><tr><td height=100 width=70% bgcolor=#BCAD82>
<font size=5 face=Verdana color=white><center>$n_local</center></font></td><td width=30% align=center bgcolor=#D37900><img src=$logo_marca border=0></td></tr></table>


<br>
<font face=Verdana size=2>
<table width=720 border=0 bordercolor=#000000 align=center><tr><td width=400 align=center><img src=$local width=390 height=300></td><td width=320 align=left valign=top>
<b>No. de Local:</b> $no_local<br>
<b>Responsable:</b> $responsable<br>
<b>Teléfono:</b> $telefono_local<br>
<b>Giro:</b> $giro<br>
<b>Horario:</b> $horario<br>
<b>E-Mail:</b> <a href=mailto:$email target=_blank><font color=red>$email</font></a><br><br>

<b>Información Extra / Descripción</b><br> $informacion
</td></tr>
</table>
";

?>


<?php
/*
<form id="form2" name="form2" method="GET" action="tiendas.php?mas=mas">
<input type="submit" name="<?php echo $idemp; ?>" id="mas" value="MAS"/>
</form>
*/
?>

</font>
</td></tr>

<?php


if(isset($robocop)){
	

echo "
<table width=100% align=center  background=$fondo_secciones cellpadding=0 cellspacing=0><tr><td height=100 width=80%>
<font size=5 face=Verdana color=white><center>$nombre_comercial</center></font></td><td width=20% align=center><img src=$logo_marca width=100 height=70></td></tr></table>


<br>
<font face=Verdana size=2>
<table width=720 border=0 bordercolor=#000000 align=center><tr><td width=400 align=center><img src=$local width=390 height=300></td><td width=320 align=left valign=top>
<b>No. de Local:</b> $no_local<br>
<b>Responsable:</b> $responsable<br>
<b>Teléfono:</b> $telefono_local<br>
<b>Giro:</b> $giro<br>
<b>Horario:</b> $horario<br>
<b>E-Mail:</b> <a href=mailto:$email target=_blank><font color=red>$email</font></a><br><br>

<b>Información Extra / Descripción</b><br> $informacion
</td></tr>
</table>
";

}


/*
echo $row['nombre_comercial'];

echo "<b>".$nombre_campo."</b> : ".$valor_campo."<br>";
*/
}

echo "</table><br>";

}

if(!$found) {
	
	/*
echo "";
*/

}
/*
}
*/
?>

</font>
<br /><br />
</td></tr></table>
</p></td>
</tr>
</table>
<br />




</body>
</html>