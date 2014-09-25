			<?php include("funciones.php") ?>
            <div class="bienvenidos">
            	BIENVENIDO: -Nombre-
        		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
            </div>
             <div class="titulo">
                <h2>Parametrización</h2> 
            </div>
            <div class="form-logo">
                <form class="form-movimiento">
                        <input type="file" class="titulo-input" placeholder="Logo">
                        <input type="submit" value="Cargar logo" class="submit" />
                        <img src="img/logo.png" />
                 </form>
             </div>
             <div class="condiciones-cobro">
             	<h2>Condiciones de cobro</h2>
                <p>1% del ingreso <br/>mensual registrado</p><div class="info-bubble">?</div>
             </div>
             <div class="condiciones-cobro">
             	<h2>Datos de cobro</h2>
                <img src="img/paypal.jpg" width="152" alt="PayPal" class="paypal"><input type="submit" value="Cambiar tarjeta" class="submit tarjeta-pp" />
             </div>
             <div class="condiciones-cobro">
             	<h2><div class="info-bubble">?</div>Datos de facturación</h2>
                <br/>
                <form class="form-movimiento">
                	<input type="text" class="m1-inp" placeholder="Razón social">
                    <input type="text" class="m2-inp" placeholder="Dirección (calle)">
                    <input type="text" class="m1-inp" placeholder="RFC">
                    <input type="text" class="m2-inp" placeholder="Estado">
                    <input type="text" class="m1-inp" placeholder="Correo electrónico">
                    <input type="text" class="m2-inp" placeholder="Municipio">
                    <div class="consulta-fact"><a href="javascript:cargarDiv('#contenedor-modulo-2','facturas.php'); javascript:AbrirModuloDos();">Consulta de facturas anteriores</a></div>
                    <input type="text" class="m2-inp" placeholder="País">
                    <input type="text" class="m2-inp" placeholder="Código Postal">
               </form>
             </div>
         