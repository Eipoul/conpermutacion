	<?php include("funciones.php") ?>
    <?php include("calendario.php"); ?>
    <div class="bienvenidos">
    	BIENVENIDO: -Nombre-
		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
    </div>
    <div class="titulo">
        <h2>Finanzas</h2>
            <ul>
                <li class="azul-subtitulo">Dashboard</li>
                <li><a href="javascript:cargarDiv('#contenedor-modulo-2','metas.php'); javascript:AbrirModuloDos();">Metas</a></li>
            </ul>
    </div>
	<div class="movimientos">
        <input type="text" name="fecha_inicio" id="from" readonly="readonly" class="fecha-conta" placeholder="Del:">
        <input type="text" name="fecha_final" id="to" readonly="readonly" class="fecha-conta" placeholder="Al:">
    </div>
    <div class="finanzas">
    	<p><span class="azul-subtitulo">Ingresos:</span> $1,000.00 &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <span class="azul-subtitulo">Meta:</span> $9,000.00</p>
        <p><span class="azul-subtitulo">Ingresos / Meta:</span> 11%</p>
        <p><span class="azul-subtitulo">Egresos:</span> $1,000.00</p>
        <ul>
            <li>
                <p><span class="azul-subtitulo">General:</span></p>
            </li>
            <li>
                <p><span class="azul-subtitulo">Impuestos:</span></p>
            </li>
            <li>
                <p><span class="azul-subtitulo">Egresos / Ingresos:</span> 4%</p>
            </li>
        </ul>
       <p><span class="azul-subtitulo">Utilidad:</span> 4%</p>
    </div>
    <div class="grafica-finanzas">
    	<img src="img-provisional/finanzas.png" width="150" alt="">
    </div>
    <div class="comparacion-finanzas">
        <h3 class="azul-subtitulo">Comparación vs años anteriores</h3>
        <ul class="submenu-comparacion">
            <li><a href="">Ingresos</a></li>
            <li><a href="">Egresos</a></li>
            <li><a href="">Utilidad</a></li>
        </ul>
        <img src="img-provisional/grafica-comparacion.png" width="430" alt="">
    </div>
