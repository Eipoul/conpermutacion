				 <?php include("calendario.php"); ?>
                <form class="form-movimiento">
                <div class="titulo-mod2">
                    <h2><input type="text" class="titulo-input" placeholder="NUEVO MOVIMIENTO"></h2>
                    <span>Cuenta contable afectada</span>
                </div>
                
                    <select class="form-movimiento-fs" name="" id="">
                    	<option value="">Tipo de movimiento</option>
                    </select>
                    <select class="form-movimiento-fs2" name="fecha" id="datepicker">
                    	<option value="">Fecha del movimiento</option>
                    </select>
                    <div class="iconos-holder">
                        <a href=""><img src="iconos/calendario.png" alt="Calendario" title="Escoger Fecha" class="icono"></a>
                        <a href=""><img src="iconos/etiqueta.png" alt="Etiqueta" title="Etiquetar Movimiento" class="icono"></a>
                        <a href=""><img src="iconos/clip.png" alt="Clip" title="Adjuntar Archivo" class="icono"></a>
                    </div>
                    <select class="select-normal estatus" name="" id="">
                        <option value="">Estatus</option>
                    </select>
                    <div class="circulo"></div>
                    <select class="select-normal gasto-deducible" name="" id="">
                        <option value="">Gasto deducible</option>
                    </select>
                    <div class="circulo"></div>
                    <select class="select-normal aplica-iva" name="" id="">
                        <option value="">Aplica IVA</option>
                    </select>
                    <select class="select-normal moneda" name="" id="">
                        <option value="">Moneda</option>
                    </select>
                    <textarea name="" id="" cols="30" rows="8" placeholder="Descripción:"></textarea>
                    <input type="text" class="input-txt-form" placeholder="Monto total">
                    <input type="text" class="input-txt-form" placeholder="Tipo de cambio">
                    <input type="text" class="input-txt-form" placeholder="Monto I.V.A.">
                    <input type="text" class="input-txt-form last-input-txt-form" placeholder="Monto Nominal">
                    <div class="circulo fl-left"></div>
                    <input type="text" class="full-input-txt-form" placeholder="Número de factura / folio xml">
                    <div class="circulo fl-left"></div>
                    <input type="text" class="med1-input-txt-form" placeholder="Nombre/razón social cliente/proveedor">
                    <input type="text" class="med2-input-txt-form" placeholder="RFC cliente/proveedor">
                    <div class="circulo"></div>
                    <select class="select-normal nacionalidad" name="" id="">
                        <option value="">Nacionalidad</option>
                    </select>
                    <select class="select-normal forma-de-pago" name="" id="">
                        <option value="">Forma de pago</option>
                    </select>
                    <select class="select-normal aplica-reembolso" name="" id="">
                        <option value="">Aplica Reembolso</option>
                    </select>
                    <div class="file-holder">
                        <a href=""><img src="iconos/clip.png" alt="Clip" title="Adjuntar Archivo" class="icono"></a>
                        <a href=""><img src="iconos/archivo.png" alt="Archivo" title="Archivo Adjunto" class="icono2"></a>
                        <div class="fl-left archivo-name">Factura 1.xml</div>
                        <a href=""><img src="iconos/eliminar.png" alt="Eliminar" title="Eliminar Archivo" class="icono"></a>
                    </div><br/><br/><br/><br/>
                    <input type="text" class="input-txt-form-tag" placeholder="Etiqueta" />
                    <textarea name="" id="" cols="30" rows="10" placeholder="Observaciones:"></textarea>
                </form>