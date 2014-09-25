<?php include("funciones.php"); ?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>easy admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/styleR.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
<script src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("nav a").click(function(event){
      $(".modulo1").addClass("modulo1-active");
	  $(".modulo2").removeClass("modulo2-active");
	  
   });
});
function AbrirModuloDos() {
      $('.modulo2').addClass('modulo2-active');
}
</script>
<script>
function cargarDiv(div,url)
{
      $(div).load(url);
}
</script>
</head>
<body>
	<div class="wrapper-general">
		<header>
			<h1><img src="img/logo.png" alt="Logo Easy Admin"><span class="oculto">Easy Admin</span></h1>
			<nav>
				<ul>
					<li><a id="nav-responsive" href="javascript:cargarDiv('#contenedor-modulo-1','ayuda.php'); javascript:cargarDiv('#contenedor-modulo-2','nada.php');">Ayuda</a></li>
					<li><a href="javascript:cargarDiv('#contenedor-modulo-1','finanzas.php'); javascript:cargarDiv('#contenedor-modulo-2','nada.php');">Finanzas</a></li>
					<li><a href="javascript:cargarDiv('#contenedor-modulo-1','contabilidad.php');">Contabilidad</a></li>
					<li><a href="javascript:cargarDiv('#contenedor-modulo-1','tesoreria.php'); javascript:cargarDiv('#contenedor-modulo-2','nada.php');">Tesorería</a></li>
					<li><a href="javascript:cargarDiv('#contenedor-modulo-1','personal.php'); javascript:cargarDiv('#contenedor-modulo-2','nada.php');">Personal</a></li>
					<li><a href="javascript:cargarDiv('#contenedor-modulo-1','parametrizacion.php'); javascript:cargarDiv('#contenedor-modulo-2','nada.php');">Parametrización</a></li>
				</ul>
			</nav>
			<form action="" method="post" class="guardar">
            	<input type="image" src="img/guardar.png" class="guardar">
            </form>
		<div class="footer1"></div>
        </header>
        <section class="modulo1">
        <div id="contenedor-modulo-1">
        	
        </div>
        
        	<div class="footer2"></div>
        	<div class="footer3"></div>
        </section>
        <section class="modulo2">
        	<div id="contenedor-modulo-2">
                
            </div>
        	<div class="footer4"></div>
        	<div class="footer5"></div>
        </section>
        <div class="footer1"></div>
        <div class="footer5"></div>
	</div>
</body>
</html>