			<?php include("funciones.php") ?>
            <?php include("calendario.php"); ?>
            <div class="bienvenidos">
            	BIENVENIDO: -Nombre-
        		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
            </div>
             <div class="titulo">
                <h2>Contabilidad</h2>
                    <ul>
                        <li><a href="">Ingresos, egresos y movimientos</a></li>
                        <li><a href="javascript:cargarDiv('#contenedor-modulo-1','auditoria.php');">Auditoría</a></li>
                    </ul>
            </div>
            <div class="movimientos">
                <h3>Movimientos</h3>
                <input type="text" name="fecha_inicio" id="from" readonly="readonly" class="fecha-conta" placeholder="Del:">
                <input type="text" name="fecha_final" id="to" readonly="readonly" class="fecha-conta" placeholder="Al:">
                <div class="n-mov">
                    <a href="javascript:cargarDiv('#contenedor-modulo-2','nuevo_movimiento.php'); javascript:AbrirModuloDos();"><img src="img/mas.png" alt="Más"></a>
                    <a href="javascript:cargarDiv('#contenedor-modulo-2','nuevo_movimiento.php'); javascript:AbrirModuloDos();">Nuevo Movimiento</a>
                </div>
                <ul class="mov bg1">
                	<li>Tipo</li>
                	<li>Monto</li>
                	<li>Movimientos</li>
                	<li>Fecha</li>
                	<li>Estatus</li>
                </ul>
                <ul class="mov bg2">
                	<li>Ingreso</li>
                	<li>$34,000</li>
                	<li>Venta de...</li>
                	<li>04 Ago 2014</li>
                	<li>Por cobrar</li>
                </ul>
                <ul class="mov bg1">
                	<li>Ingreso</li>
                	<li>$34,000</li>
                	<li>Venta de...</li>
                	<li>04 Ago 2014</li>
                	<li>Cobrado</li>
                </ul>
                <ul class="mov bg2">
                	<li>Ingreso</li>
                	<li>$34,000</li>
                	<li>Venta de...</li>
                	<li>04 Ago 2014</li>
                	<li>Cobrado</li>
                </ul>
            </div>