	<?php include("funciones.php") ?>
    <div class="bienvenidos">
    	BIENVENIDO: -Nombre-
		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
    </div>
    <div class="titulo">
                <h2>Personal</h2>
                    <ul>
                        <li class="azul-subtitulo">Alta de personas</li>
                        <li><a href="javascript:cargarDiv('#contenedor-modulo-2','consulta-de-personas.php'); javascript:AbrirModuloDos();">Consulta de personas</a></li>
                    </ul>
            </div>
      
    <div class="lAmarilla">
        <h2>Acceso</h2>
    </div>
    <script type="text/javascript">
	function activar(form)
	{
	if (form.checkboxGoogle.checked == true)
	{
		form.pass.disabled = true;
		form.passC.disabled = true;
	}
	if (form.checkboxGoogle.checked == false)
	{
		form.pass.disabled = false;
		form.passC.disabled = false;
	}
	}
	</script>
    <form name="form" id="form">
    <div class="acceso-w-1">
        <!--<img class="puntoVerde" src="img/puntoVerde.png" alt="">--><input type="text" id="email" name="email" class="form-movimientoR3" style="width:85%;" placeholder="Correo electrónico">
        <!--<img class="puntoVerde" src="img/puntoVerde.png" alt="">--><input type="text" id="pass" name="pass" class="form-movimientoR3" style="width:85%;" placeholder="Contraseña">
        <!--<img class="puntoVerde" src="img/puntoVerde.png" alt="">--><input type="text" id="passC" name="passC" class="form-movimientoR3" style="width:85%;" placeholder="Confirmar contraseña">
    </div>
    <div class="acceso-w-1">
        <input type="checkbox" class="checkboxGoogle" name="checkboxGoogle" id="checkboxGoogle" onclick="activar(this.form)">
        <span>Mi correo corporativo está con</span>
        <img class="logoGoogle" src="img/logoGoogle.png" alt="">
	</div>
    </form>
    
    <div class="lAmarilla">
        <h2>Datos personales</h2>
    </div>
    <div class="acceso-w-1">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Nombre">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Segundo nombre">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Apellido paterno">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Apellido materno">
        <select class="select-normalR3" style="margin-top:4px; margin-bottom:13px; name="" id="">
        	<option value="">Estatus</option>
    	</select>
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Correo electrónico">
	</div>
    <div class="acceso-w-1">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Número de seguro social">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="RFC">
        <span class="span-fechanac">Fecha de nacimiento</span>
        <select class="select-normalR2" name="" id="">
        <option value="">Día</option>
        </select>
        <select class="select-normalR2" name="" id="">
            <option value="">Mes</option>
        </select>
        <select class="select-normalR2" name="" id="">
            <option value="">Año</option>
        </select>
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Puesto">
        <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Área">
	</div>


    <div class="lAmarilla">
        <h2>Datos de contacto</h2>
    </div>
    <div class="acceso-w-1">
    <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Teléfono casa">
    <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Teléfono celular">
    <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Calle y número">
    </div>
    <div class="acceso-w-1">
    <select class="select-normalR3" name="" id="">
        <option value="">Estado</option>
    </select>
    <select class="select-normalR3" name="" id="">
        <option value="">Municipio</option>
    </select>
    <input type="text" class="form-movimientoR3" style="width:85% !important;" placeholder="Código postal">
	</div>
    
    <div class="lAmarilla" style="margin-bottom:-13px; !important">
        <h2>Perfil</h2>
    </div>
    <div class="checkboxIzq">
        <ul>
            <li><input type="checkbox" class="checkboxGoogle"></li>
            <li><input type="checkbox" class="checkboxGoogle"></li>
            <li><input type="checkbox" class="checkboxGoogle"></li>
            <li><input type="checkbox" class="checkboxGoogle"></li>
            <li><input type="checkbox" class="checkboxGoogle"></li>
            <li><input type="checkbox" class="checkboxGoogle"></li>
        </ul>
    </div>
        
    <div class="textDer">
        <ul>
            <li><p class="form-movimientoR43"> Finanzas</p></li>
            <li><p class="form-movimientoR43"> Contabilidad</p></li>
            <li><p class="form-movimientoR43"> Tesorería</p></li>
            <li><p class="form-movimientoR43"> Recursos Humanos</p></li>
            <li><p class="form-movimientoR43"> Nómina</p></li>
            <li><p class="form-movimientoR43"> Parametrización</p></li>
        </ul>
    </div>