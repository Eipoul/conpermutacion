	<?php include("funciones.php") ?>
    <div class="bienvenidos">
    	BIENVENIDO: -Nombre-
		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
    </div>
    <div class="titulo">
         <h2>Tesorería</h2>
         <ul>
            <li class="azul-subtitulo" style="border:none; margin-right:none; padding-right:none;">Valores</li>
         </ul>
    </div>
     <p class="subT">Registrar saldo en bancos:<img class="puntoAmarillo" src="img/puntoAmarillo.png" alt=""></p>

    <div>
        <select class="select-normalR estatus tesoreria" name="" id="">
        <option value="">Banco</option>
        </select>
        <input type="text" class="form-movimientoR" placeholder="Monto">
        <input type="text" class="form-movimientoR2" placeholder="al:">
        <div class="iconoCalendario"><img class="calendario" src="img/calendario.png" alt="" style="margin-right: 60px;"></div>

    </div>

    <p class="subT">Pago de dividendos (dividendos a socios de la empresa):<img class="puntoAmarillo" src="img/puntoAmarillo.png" alt=""></p>
    <input type="text" class="form-movimientoR" placeholder="Monto">
    <input type="text" class="form-movimientoR2" placeholder="al:">
    <div class="iconoCalendario"><img class="calendario" src="img/calendario.png" alt="" style="margin-right: 160px;"></div>

    <p class="subT">Registrar saldo de inversiones:<img class="puntoAmarillo" src="img/puntoAmarillo.png" alt=""></p>
    <div>
        <select class="select-normalR estatus tesoreria" name="" id="">
        <option value="">Institución</option>
        </select>
        <input type="text" class="form-movimientoR" placeholder="Monto">
        <input type="text" class="form-movimientoR" placeholder="al:">
        <div class="iconoCalendario"><img class="calendario" src="img/calendario.png" alt="" style="margin-right: 60px;"></div>
    </div>
    <div class="linea">
        
    </div>

    <div class="cajaIzquierda">
        <div class="izquierda">
            <p>Bancos<img class="puntoAmarillo" src="img/puntoAmarillo.png" alt=""></p>
            <p>**** **** **** *123</p>
            <p>**** **** **** *456</p>
            <p>****@****</p>
        </div>
        <div class="derecha">
            <p>Banamex</p>
            <p>Banorte</p>
            <p>Paypal</p>
        </div>
        <input style="width: 170px;" type="text" class="form-movimientoR2 test" placeholder="Nueva cuenta">
        <div class="test"><input style="width: 170px;" type="text" class="form-movimientoR2" placeholder="Institución"></div>
        <img class="mas2" src="img/mas2.png" alt="">
    </div>
    <div class="lineaVertical"></div>
    <div class="cajaDerecha">
        <div class="">
            <p>Inversiones<img class="puntoAmarillo" src="img/puntoAmarillo.png" alt=""></p>
            <p>**** **** **** *789</p>
        </div>
        <div class="derecha2">
            <p>Actinver</p>
        </div>
        <div class="test2">
            <input style="width: 170px;" type="text" class="form-movimientoR2 test" placeholder="Nueva cuenta">
            <div class="test"><input style="width: 170px;" type="text" class="form-movimientoR2" placeholder="Institución"></div>
            <img class="mas2" src="img/mas2.png" alt="">
        </div>
    </div>