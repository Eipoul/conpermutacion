			<?php include("funciones.php") ?>
            <div class="bienvenidos">
            	BIENVENIDO: -Nombre-
        		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
            </div>
             <div class="titulo">
                <h2>Ayuda</h2>
                    <ul>
                        <li><a href="javascript:cargarDiv('#contenedor-modulo-1','ayuda.php');">Preguntas frecuentes</a></li>
                        <li class="link-activo-sm">Secciones</li>
                    </ul>
            </div>
            <div id="slider" class="nivoSlider">
                <img src="img-ayuda/toystory.jpg" alt="" />
                <img src="img-ayuda/nemo.jpg" alt="" />
            </div>
            <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
			<script type="text/javascript">
            $(document).ready(function() {
                $('#slider').nivoSlider();
            });
            </script>
            