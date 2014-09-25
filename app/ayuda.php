			<?php include("funciones.php") ?>
            <div class="bienvenidos">
            	BIENVENIDO: -Nombre-
        		<span class="text-right"><?php echo date_es("d / F / Y");  ?></span>
            </div>
             <div class="titulo">
                <h2>Ayuda</h2>
                    <ul>
                        <li class="link-activo-sm">Preguntas frecuentes</li>
                        <li><a href="javascript:cargarDiv('#contenedor-modulo-1','ayuda-secciones.php');">Secciones</a></li>
                    </ul>
            </div>
            <div id='cssmenu'>
            <ul>
               <li><a href='#'><span>Pregunta 1</span></a>
                  <ul>
                     <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, dolorum necessitatibus expedita blanditiis ad accusantium ducimus quis reiciendis ex voluptate. Consectetur, vitae, eos numquam cupiditate possimus expedita alias quo aliquam.</li>
                  </ul>
               </li>
               <li><a href='#'><span>Pregunta 2</span></a>
                  <ul>
                  	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, dolorum necessitatibus expedita blanditiis ad accusantium ducimus quis reiciendis ex voluptate. Consectetur, vitae, eos numquam cupiditate possimus expedita alias quo aliquam.</li>
                  </ul>
               </li>
               <li><a href='#'><span>Pregunta 3</span></a>
                  <ul>
                  	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, dolorum necessitatibus expedita blanditiis ad accusantium ducimus quis reiciendis ex voluptate. Consectetur, vitae, eos numquam cupiditate possimus expedita alias quo aliquam.</li>
                  </ul>
               </li>
               <li><a href='#'><span>Pregunta 4</span></a>
                  <ul>
                  	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, dolorum necessitatibus expedita blanditiis ad accusantium ducimus quis reiciendis ex voluptate. Consectetur, vitae, eos numquam cupiditate possimus expedita alias quo aliquam.</li>
                  </ul>
               </li>
            </ul>
            </div>
            <script>
				$(document).ready(function(){
					$('#cssmenu > ul > li ul').each(function(index, element){
					  var count = $(element).find('li').length;
					  var content = '';
					  $(element).closest('li').children('a').append(content);
					});			
					$('#cssmenu ul ul li:odd').addClass('odd');
					$('#cssmenu ul ul li:even').addClass('even');
					$('#cssmenu > ul > li > a').click(function() {

					  var checkElement = $(this).next();
					
					  $('#cssmenu li').removeClass('active');
					  $(this).closest('li').addClass('active'); 
					
					  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
						$(this).closest('li').removeClass('active');
						checkElement.slideUp('normal');
					  }
					  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
						$('#cssmenu ul ul:visible').slideUp('normal');
						checkElement.slideDown('normal');
					  }
					
					  if($(this).closest('li').find('ul').children().length == 0) {
						return true;
					  } else {
						return false; 
					  }
					
					});	
				
				});
			</script>
         