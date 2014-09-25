<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jon Otazua</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/nivo-slider.css" rel="stylesheet" type="text/css">
<link href="default/default.css" rel="stylesheet" type="text/css">
<link href="css/jquery.modal.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.modal.js"></script>
<script type="text/javascript" src="js/froogaloop.js"></script>
<script type="text/javascript">$(window).load(function(){$('#slider').nivoSlider();});</script>
</head>
<body>
	
	<header>
        <div class="main-wrapper">
            <h1>
            	<a href="javascript:$.scrollTo('#inicio',800, {offset:-150} );">
                	<img src="img/logo.png" alt="Jon Otazua Logo" width="267">
                </a>
                <span class="oculto">Jon Otazua - Editor / Assistant Editor</span>
            </h1>
            <nav>
                <ul>
                    <li><a href="javascript:$.scrollTo('#work',800, {offset:-110} );">WORK</a></li>
                    <li><a href="javascript:$.scrollTo('#info',800, {offset:15} );">INFO</a></li>
                    <li><a href="javascript:$.scrollTo('#contact',800, {offset:280} );">CONTACT</a></li>
                </ul>
            </nav>
        </div>
	</header> 
    <div id="espacio-top"></div>
    <div class="main-wrapper">
    	<section id="inicio">
                <div class="slider">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="slider/1.jpg" alt="Img 1" title="#img1" />
                            <img src="slider/2.jpg" alt="Img 2" title="#img2" />
                        </div>
                        <div id="img1" class="nivo-html-caption">
                            SILENT
                        </div>
                        <div id="img2" class="nivo-html-caption">
                            MAGIC HOUR
                        </div>
                    </div>
                </div>
        </section>
    	<section id="work">
    		<ul>
    			<li class="first">
                	<div id="modal1" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/71104290?api=1&player_id=video1" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="javascript:$.scrollTo('#work',800, {offset:-130} );" rel="">
                	<div class="hover">Magic Hour | Coming soon<!-- <img src="img/play.png" width="11" height="14" alt="Play"> --></div>
                	<img src="img/1_magic_hour.png" width="244" alt="Magic Hour" class="absolute"></a>
                </li>
    			<li>
                	<div id="modal2" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/71104290?api=1&player_id=video2" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="#modal2" rel="modal:open" class="click">
                	<div class="hover">Silent | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/2_silent.png" alt="Silent" width="244" class="absolute"></a>
                </li>
    			<li>
                	<div id="modal3" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/66124766?api=1&player_id=video3" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="#modal3" rel="modal:open" class="click">
               		<div class="hover">Chevy Flashback | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/3_chevy_flashback.png" alt="Chevy Flashback" width="244" class="absolute"></a>
                </li>
    			<li>
                	<div id="modal4" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/49930806?api=1&player_id=video4" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="#modal4" rel="modal:open" class="click">
                	<div class="hover">Husky's Easy Girl | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/4_husky.png" alt="Husky" width="244" class="absolute"></a>
                </li>
    			<li class="first">
                	<div id="modal5" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/37162831?api=1&player_id=video5" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <a href="#modal5" rel="modal:open" class="click">
                	<div class="hover">Know the glow | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/5_knowtheglow.png" alt="Know the Glow" width="244" class="absolute"></a>
                </li>
    			<li>
                	<div id="modal6" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/37194656?api=1&player_id=video6" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="#modal6" rel="modal:open" class="click">
                	<div class="hover">Oasis Imagery Reel | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/6_oasis.png" alt="Oasis" width="244" class="absolute"></a>
                </li>
    			<li>
                	<div id="modal7" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/41501772?api=1&player_id=video7" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="#modal7" rel="modal:open" class="click">
                	<div class="hover">Old Rivalry | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/7_oldrivalry.png" alt="Old Rivalry" width="244" class="absolute"></a>
                </li>
    			<li>
                	<div id="modal8" style="display:none;" class="vimeo-video">
                    	<iframe class="turbomodal" src="//player.vimeo.com/video/15601664?api=1&player_id=video8" width="800" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                	<a href="#modal8" rel="modal:open" class="click">
                	<div class="hover">Xilitla Trailer | <img src="img/play.png" width="11" height="14" alt="Play"></div>
                	<img src="img/8_xilitla.png" alt="Xilitla" width="244" class="absolute"></a>
                </li>
    		</ul>
    	</section>
        <section id="info">
        	<img class="jon" src="img/jon_otazua.png" width="204" alt="Jon Otazua"><br/>
            <a href="javascript:$.scrollTo('#info',800, {offset:500} );"><img src="img/flecha.png" width="19" alt="Flecha"></a>
        	<p>“I believe in the power of images as an engine for empathy, and I am eager to learn what I can about the art of the moving image.</p>
        	<p>My aim is to hone my skills and learn what I can about audio-visual storytelling. Ultimately, I want to focus on the stories I believe<br/> need to be told, and I hope to find like-minded collaborators along the way.</p>
        	<p>Nothing I have done is representative of what I want to do.” <br/>-Jon</p>
            <nav>
            	<ul>
            		<li><div class="ch1">|</div>
                    	<ul class="primero">
                    		<li>Credit List</li>
            				<li class="raya">
                            	<div class="flecha-arriba flecha-1"></div>
                                <a href="pdf/credit_list.pdf" target="_blank">View</a><div class="raya_abajo"></div>
                            </li>
            				<li><a href="pdf/credit_list.pdf.zip">Download</a></li>
            			</ul>
            		</li>
                    <li><div class="ch2">|</div>
                    	<ul>
                        	<li>Assistant Editor Resume</li>
                            <li class="raya">
                            	<div class="flecha-arriba flecha-2"></div>
                                <a href="pdf/assistant_editor_resume.pdf" target="_blank">View</a><div class="raya_abajo-2"></div>
                            </li>
            				<li><a href="pdf/assistant_editor_resume.pdf.zip">Download</a></li>
                    	</ul>
                    </li>
                    <li>
                    	<ul class="primero">
                        	<li><img src="img/imdb_logo.png" width="37" alt="IMDb - Jon Otazua"></li>
                            <li class="imdb">
                            	<div class="flecha-arriba flecha-3"></div>
                                <a href="http://www.imdb.com/name/nm4387964/" target="_blank">GO</a>
                            </li>
                        </ul>
                    </li>
            	</ul>
            </nav>
        </section>
        <section id="contact">
            <?php if (!isset($_POST['email'])) { ?>
        	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        		<div class="row">
                	<div class="col1">NAME:</div>
        			<div class="col2"><input type="text" name="nombre"></div>
                </div>
        		<div class="row">
                	<div class="col1">MAIL:</div>
        			<div class="col2"><input type="text" name="email"></div>
        		</div>
                <div class="row">
                	<div class="col1">MESSAGE:</div>
        			<div class="col2"><textarea name="" id="" name="comentario"></textarea></div>
        		</div>
                <div class="row">
                	<div class="col1"></div>
                	<div class="col2">
                    	<input type="submit" value="SUBMIT">
                    </div>
                </div>
        	</form>
            <?php }else{
				  $mensaje="Contact Form - Jon Otazua";
				  $mensaje.= "\nName: ". $_POST['nombre'];
				  $mensaje.= "\nMail: ".$_POST['email'];
				  $mensaje.= "\n\nMessage: ".$_POST['comentario'];
				  $destino2= "contacto@rombomedia.com.mx";
				  $asunto = "Contact Form - Jon Otazua - Nombre: ".$_POST['nombre'];
				  mail($destino2,$asunto,$mensaje,"FROM: $remitente");
				?>
				  <div class="conocenos">
				  Thank you, your message has been sent.
				  </div>	  
			<?php } ?>
        </section>
        
    </div>
    <footer>
        <div class="content">
            Content copyright 2014. All rights reserved
        </div>
        <div class="icon">
            <a href="javascript:$.scrollTo('#inicio',800, {offset:-150} );"><img src="img/jonotazua_monogram.png" alt="Jon Otazua Monogram" width="15"></a>
        </div>
    </footer>
 <script type="text/javascript">
 $(document).ready(function() {  
        $('.close-modal').click(function() {
            $('#modal2').remove();
        });
    });
 jQuery(document).ready(function($) {
   $('body').live('click',function(){
    if($('div.vimeo-video').is(':visible')){
        var resourceVideo = $('iframe').attr('src');
        $('iframe').attr('src','').attr('src',resourceVideo);
        };
    })
});
</script>
<script>
            (function(){

                // Listen for the ready event for any vimeo video players on the page
                var vimeoPlayers = document.querySelectorAll('iframe'),
                    player;

                for (var i = 0, length = vimeoPlayers.length; i < length; i++) {
                    player = vimeoPlayers[i];
                    $f(player).addEvent('ready', ready);
                }

                /**
                 * Utility function for adding an event. Handles the inconsistencies
                 * between the W3C method for adding events (addEventListener) and
                 * IE's (attachEvent).
                 */
                function addEvent(element, eventName, callback) {
                    if (element.addEventListener) {
                        element.addEventListener(eventName, callback, false);
                    }
                    else {
                        element.attachEvent(eventName, callback, false);
                    }
                }

                /**
                 * Called once a vimeo player is loaded and ready to receive
                 * commands. You can add events and make api calls only after this
                 * function has been called.
                 */
                function ready(player_id) {
                    // Keep a reference to Froogaloop for this player
                    var container = document.getElementById(player_id).parentNode.parentNode,
                        froogaloop = $f(player_id),
                        apiConsole = container.querySelector('.console .output');

                    /**
                     * Prepends log messages to the example console for you to see.
                     */
                    function apiLog(message) {
                        apiConsole.innerHTML = message + '\n' + apiConsole.innerHTML;
                    }

                    /**
                     * Sets up the actions for the buttons that will perform simple
                     * api calls to Froogaloop (play, pause, etc.). These api methods
                     * are actions performed on the player that take no parameters and
                     * return no values.
                     */
                    function setupSimpleButtons() {
                        var buttons = container.querySelector('div dl.simple'),
                            playBtn = buttons.querySelector('.play'),
                            pauseBtn = buttons.querySelector('.pause'),
                            unloadBtn = buttons.querySelector('.unload');

                        // Call play when play button clicked
                        addEvent(playBtn, 'click', function() {
                            froogaloop.api('play');
                        }, false);

                        // Call pause when pause button clicked
                        addEvent(pauseBtn, 'click', function() {
                            froogaloop.api('pause');
                        }, false);

                        // Call unload when unload button clicked
                        addEvent(unloadBtn, 'click', function() {
                            froogaloop.api('unload');
                        }, false);
                    }

                    /**
                     * Sets up the actions for the buttons that will modify certain
                     * things about the player and the video in it. These methods
                     * take a parameter, such as a color value when setting a color.
                     */
                    function setupModifierButtons() {
                        var buttons = container.querySelector('div dl.modifiers'),
                            seekBtn = buttons.querySelector('.seek'),
                            volumeBtn = buttons.querySelector('.volume'),
                            loopBtn = buttons.querySelector('.loop'),
                            colorBtn = buttons.querySelector('.color'),
                            randomColorBtn = buttons.querySelector('.randomColor');

                        // Call seekTo when seek button clicked
                        addEvent(seekBtn, 'click', function(e) {
                            // Don't do anything if clicking on anything but the button (such as the input field)
                            if (e.target != this) {
                                return false;
                            }

                            // Grab the value in the input field
                            var seekVal = this.querySelector('input').value;

                            // Call the api via froogaloop
                            froogaloop.api('seekTo', seekVal);
                        }, false);

                        // Call setVolume when volume button clicked
                        addEvent(volumeBtn, 'click', function(e) {
                            // Don't do anything if clicking on anything but the button (such as the input field)
                            if (e.target != this) {
                                return false;
                            }

                            // Grab the value in the input field
                            var volumeVal = this.querySelector('input').value;

                            // Call the api via froogaloop
                            froogaloop.api('setVolume', volumeVal);
                        }, false);

                        // Call setLoop when loop button clicked
                        addEvent(loopBtn, 'click', function(e) {
                            // Don't do anything if clicking on anything but the button (such as the input field)
                            if (e.target != this) {
                                return false;
                            }

                            // Grab the value in the input field
                            var loopVal = this.querySelector('input').value;

                            //Call the api via froogaloop
                            froogaloop.api('setLoop', loopVal);
                        }, false);

                        // Call setColor when color button clicked
                        addEvent(colorBtn, 'click', function(e) {
                            // Don't do anything if clicking on anything but the button (such as the input field)
                            if (e.target != this) {
                                return false;
                            }

                            // Grab the value in the input field
                            var colorVal = this.querySelector('input').value;

                            // Call the api via froogaloop
                            froogaloop.api('setColor', colorVal);
                        }, false);

                        // Call setColor with a random color when random color button clicked
                        addEvent(randomColorBtn, 'click', function(e) {
                            // Don't do anything if clicking on anything but the button (such as the input field)
                            if (e.target != this) {
                                return false;
                            }

                            // Generate a random color
                            var colorVal = Math.floor(Math.random() * 16777215).toString(16);

                            // Call the api via froogaloop
                            froogaloop.api('setColor', colorVal);
                        }, false);
                    }

                    /**
                     * Sets up actions for buttons that will ask the player for something,
                     * such as the current time or duration. These methods require a
                     * callback function which will be called with any data as the first
                     * parameter in that function.
                     */
                    function setupGetterButtons() {
                        var buttons = container.querySelector('div dl.getters'),
                            timeBtn = buttons.querySelector('.time'),
                            durationBtn = buttons.querySelector('.duration'),
                            colorBtn = buttons.querySelector('.color'),
                            urlBtn = buttons.querySelector('.url'),
                            embedBtn = buttons.querySelector('.embed'),
                            pausedBtn = a.querySelector('.paused'),
                            getVolumeBtn = buttons.querySelector('.getVolume'),
                            widthBtn = buttons.querySelector('.width'),
                            heightBtn = buttons.querySelector('.height');

                        // Get the current time and log it to the API console when time button clicked
                        addEvent(timeBtn, 'click', function(e) {
                            froogaloop.api('getCurrentTime', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('getCurrentTime : ' + value);
                            });
                        }, false);

                        // Get the duration and log it to the API console when time button clicked
                        addEvent(durationBtn, 'click', function(e) {
                            froogaloop.api('getDuration', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('getDuration : ' + value);
                            });
                        }, false);

                        // Get the embed color and log it to the API console when time button clicked
                        addEvent(colorBtn, 'click', function(e) {
                            froogaloop.api('getColor', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('getColor : ' + value);
                            });
                        }, false);

                        // Get the video url and log it to the API console when time button clicked
                        addEvent(urlBtn, 'click', function(e) {
                            froogaloop.api('getVideoUrl', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('getVideoUrl : ' + value);
                            });
                        }, false);

                        // Get the embed code and log it to the API console when time button clicked
                        addEvent(embedBtn, 'click', function(e) {
                            froogaloop.api('getVideoEmbedCode', function (value, player_id) {
                                // Use html entities for less-than and greater-than signs
                                value = value.replace(/</g, '&lt;').replace(/>/g, '&gt;');

                                // Log out the value in the API Console
                                apiLog('getVideoEmbedCode : ' + value);
                            });
                        }, false);

                        // Get the paused state and log it to the API console when time button clicked
                        addEvent(pausedBtn, 'click', function(e) {
                            froogaloop.api('paused', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('paused : ' + value);
                            });
                        }, false);

                        // Get the paused state and log it to the API console when time button clicked
                        addEvent(getVolumeBtn, 'click', function(e) {
                            froogaloop.api('getVolume', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('volume : ' + value);
                            });
                        }, false);

                        // Get the paused state and log it to the API console when time button clicked
                        addEvent(widthBtn, 'click', function(e) {
                            froogaloop.api('getVideoWidth', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('getVideoWidth : ' + value);
                            });
                        }, false);

                        // Get the paused state and log it to the API console when time button clicked
                        addEvent(heightBtn, 'click', function(e) {
                            froogaloop.api('getVideoHeight', function (value, player_id) {
                                // Log out the value in the API Console
                                apiLog('getVideoHeight : ' + value);
                            });
                        }, false);
                    }
					/**
                     * Adds listeners for the events that are checked. Adding an event
                     * through Froogaloop requires the event name and the callback method
                     * that is called once the event fires.
                     */
                    function setupEventListeners() {
                        var checkboxes = container.querySelector('.listeners'),
                            loadProgressChk = checkboxes.querySelector('.loadProgress'),
                            playProgressChk = checkboxes.querySelector('.playProgress'),
                            playChk = checkboxes.querySelector('.play'),
                            pauseChk = a.querySelector('.pause'),
                            finishChk = checkboxes.querySelector('.finish'),
                            seekChk = checkboxes.querySelector('.seek');

                        function onLoadProgress() {
                            if (loadProgressChk.checked) {
                                froogaloop.addEvent('loadProgress', function(data) {
                                    apiLog('loadProgress event : ' + data.percent + ' : ' + data.bytesLoaded + ' : ' + data.bytesTotal + ' : ' + data.duration);
                                });
                            }
                            else {
                                froogaloop.removeEvent('loadProgress');
                            }
                        }

                        function onPlayProgress() {
                            if (playProgressChk.checked) {
                                froogaloop.addEvent('playProgress', function(data) {
                                    apiLog('playProgress event : ' + data.seconds + ' : ' + data.percent + ' : ' + data.duration);
                                });
                            }
                            else {
                                froogaloop.removeEvent('playProgress');
                            }
                        }

                        function onPlay() {
                            if (playChk.checked) {
                                froogaloop.addEvent('play', function(data) {
                                    apiLog('play event');
                                });
                            }
                            else {
                                froogaloop.removeEvent('play');
                            }
                        }

                        function onPause() {
                            if (pauseChk.checked) {
                                froogaloop.addEvent('pause', function(data) {
                                    apiLog('pause event');
                                });
                            }
                            else {
                                froogaloop.removeEvent('pause');
                            }
                        }

                        function onFinish() {
                            if (finishChk.checked) {
                                froogaloop.addEvent('finish', function(data) {
                                    apiLog('finish');
                                });
                            }
                            else {
                                froogaloop.removeEvent('finish');
                            }
                        }

                        function onSeek() {
                            if (seekChk.checked) {
                                froogaloop.addEvent('seek', function(data) {
                                    apiLog('seek event : ' + data.seconds + ' : ' + data.percent + ' : ' + data.duration);
                                });
                            }
                            else {
                                froogaloop.removeEvent('seek');
                            }
                        }

                        // Listens for the checkboxes to change
                        addEvent(loadProgressChk, 'change', onLoadProgress, false);
                        addEvent(playProgressChk, 'change', onPlayProgress, false);
                        addEvent(playChk, 'change', onPlay, false);
                        addEvent(pauseChk, 'change', onPause, false);
                        addEvent(finishChk, 'change', onFinish, false);
                        addEvent(seekChk, 'change', onSeek, false);

                        // Calls the change event if the option is checked
                        // (this makes sure the checked events get attached on page load as well as on changed)
                        onLoadProgress();
                        onPlayProgress();
                        onPlay();
                        onPause();
                        onFinish();
                        onSeek();
                    }

                    /**
                     * Sets up actions for adding a new clip window to the page.
                     */
                    function setupAddClip() {
                        var button = container.querySelector('.addClip'),
                            newContainer;

                        addEvent(button, 'click', function(e) {
                            // Don't do anything if clicking on anything but the button (such as the input field)
                            if (e.target != this) {
                                return false;
                            }

                            // Gets the index of the current player by simply grabbing the number after the underscore
                            var currentIndex = parseInt(player_id.split('_')[1]),
                                clipId = button.querySelector('input').value;

                            newContainer = resetContainer(container.cloneNode(true), currentIndex+1, clipId);

                            container.parentNode.appendChild(newContainer);
                            $f(newContainer.querySelector('iframe')).addEvent('ready', ready);
                        });

                        /**
                         * Resets the duplicate container's information, clearing out anything
                         * that doesn't pertain to the new clip. It also sets the iframe to
                         * use the new clip's id as its url.
                         */
                        function resetContainer(element, index, clipId) {
                            var newHeading = element.querySelector('h2'),
                                newIframe = element.querySelector('iframe'),
                                newCheckBoxes = element.querySelectorAll('.listeners input[type="checkbox"]'),
                                newApiConsole = element.querySelector('.console .output'),
                                newAddBtn = element.querySelector('.addClip');

                            // Set the heading text
                            newHeading.innerText = 'Vimeo Player ' + index;

                            // Set the correct source of the new clip id
                            newIframe.src = 'http://player.vimeo.com/video/' + clipId + '?api=1&player_id=player_' + index;
                            newIframe.id = 'player_' + index;

                            // Reset all the checkboxes for listeners to be checked on
                            for (var i = 0, length = newCheckBoxes.length, checkbox; i < length; i++) {
                                checkbox = newCheckBoxes[i];
                                checkbox.setAttribute('checked', 'checked');
                            }

                            // Clear out the API console
                            newApiConsole.innerHTML = '';

                            // Update the clip ID of the add clip button
                            newAddBtn.querySelector('input').setAttribute('value', clipId);

                            return element;
                        }
                    }

                    setupSimpleButtons();
                    setupModifierButtons();
                    setupGetterButtons();
                    setupEventListeners();
                    setupAddClip();

                    // Setup clear console button
                    var clearBtn = container.querySelector('.console button');
                    addEvent(clearBtn, 'click', function(e) {
                        apiConsole.innerHTML = '';
                    }, false);

                    apiLog(player_id + ' ready!');
                }
            })();
        </script>
</body>
</html>