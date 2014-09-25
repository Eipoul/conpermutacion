<?php include("funciones.php") ?>
    <div class="bienvenidos">
    	BIENVENIDO: -Nombre-
		<!--<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>-->
    </div>
    <div class="titulo">
        <h2>Contabilidad</h2>
        <ul>
            <li><a href="">Ingresos, egresos y movimientos</a></li>
            <li class="azul-subtitulo">Auditoría</li>
        </ul>
   </div>
</p>
    <div class="lAmarilla">
        <img class="puntoAmarillo2 mover" src="img/puntoAmarillo.png" alt="">
        <button class="lanzar" type="button">Lanzar conciliación manual</button>
    </div>
    <div class="segundaFila">
        <select class="select-normalR estatus mover" name="" id="">
        <option value="">Año fiscal</option>
        </select>
        <input type="text" class="form-movimientoR2 fMover auditoria" placeholder="al:">
        <div class="iconoCalendario"><img class="calendario cMover" src="img/calendario.png" alt="" style="margin-right: 160px;"></div>
    </div>
    <div class="contenedor">
        <div class="cajaTitulo">
            <p class="azul-subtitulo">Activos</p>
            <ul>
                <li>[Num Cta]: [$]</li>
                <li>[Num Cta]: [$]</li>
                <li>[Num Cta]: [$]</li>
                <li>Total: [$]</li>
            </ul>
        </div>
        <div class="lineaVertical2"></div>
        <div class="cajaTitulo">
            <p class="azul-subtitulo">Pasivos</p>
            <ul>
                <li>[Num Cta]: [$]</li>
                <li>[Num Cta]: [$]</li>
                <li>[Num Cta]: [$]</li>
                <li>Total: [$]</li>
            </ul>
        </div>
        <div class="lineaVertical2"></div>
        <div class="cajaTitulo">
            <p class="azul-subtitulo">Capital (bancos)</p>
            <ul>
                <li>[Num Cta]: [$]</li>
                <li>[Num Cta]: [$]</li>
                <li>[Num Cta]: [$]</li>
                <li>Total: [$]</li>
            </ul>
        </div>
    </div>
    
    <div class="resultadosAuditoria">
        <p class= "pResutados">Resultados</p>
        <p>Si el activos – pasivos  = campital, (+-) $100 de difeencia, entonces “Se tiene una conciliación aceptable con una diferrencia de “ [$] “ correspondiente a un mayor monto en” [activos o pasivos según corresponda – (+) activos (-) pasivos) (ver detalle de cuentas) Si la diferencia es mayor, “Alerta, se tiene una diferencia considerable de [$] en conciliación contable correspondiente a un mayor monto en” [activos o pasivos según corresponda – (+) activos (-) pasivos) (ver detalle de cuentas)</p>
        <p>Se tienen registradas [xx] reversiones (ver detalle para descargar)</p>
        <p>Se tienen [xx] errores en diferencia de montos en respuestas de transferencias  (ver detalle para descargar)</p>
        <p>Se tienen [xx] errores en diferencia de montos en respuestas de transferencias  (ver detalle para descargar) </p>
        <p>Se hicieron [x] transferencias de la cuenta [***1234] del banco [Banco] por un monto de [$], marcando una diferencia de [$] [faltantes/adicionales] en la cuenta  <span class="textoRojo">(notificación por cuenta existente)</span> (ver detalle de transferencias)</p>
    </div>