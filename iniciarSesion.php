<?php
session_start();

$_SESSION['sesiones'] = array();
echo($_SESSION['sesiones']);

echo('

    <!DOCTYPE html>
    <html lang="es">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Authors:" content="Jahir Gómez, Isaac Ehuan">
    
        <title>GOMOSA</title>
    
        <meta name="description" content="Somos una empresa dedicada a la confección de Uniformes para tu empresa, con calidad en la confección así como en el servicio">
    
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/estiloFormulario.css">
    
      </head>
    
      <header>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="page-header">
    					<table>
    						<tr>
    							<td>
    								<img alt="Logo gomosa" src="img/logo.jpg" width="15%" height="15%">
    							</td>
    							<td>
    								<h1>GOMOSA</h1>
    							</td>
    						</tr>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
      </header>
    
      	<body>
    		<div class="row">
    			<div class="container-fluid">
    				<section class="form-login">
                        <h5>Favor de iniciar sesión</h5>
                        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
                        <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
                        <input class="buttons" type="submit" name="" value="Ingresar">
                        <p><a href="registro.html">Registrarse</a></p>
                      </section>
    			</div>
    		</div>
    		<br>
        	<script src="js/jquery.min.js"></script>
        	<script src="js/bootstrap.min.js"></script>
        	<script src="js/scripts.js"></script>
      	</body>
    
      	<footer>
    		<div class="row">
    			<div class="col-md-12">
    				<h3>
    					Contáctanos:
    				</h3>
    				<div class="row">
    					<div class="col-md-3">
    
    						<address>
    							<abbr title="TELÉFONO"><strong>TEL:</strong> 99-93-22-76-11
    						</address>
    
    						<address>
    							<abbr title="WhatsApp"><strong>WA:</strong><br></abbr> <a href="https://wa.link/v6xavj">Chat de WhatsApp</a>
    						</address>
    					</div>
    					<div class="col-md-3">
    
    						<address>
    							<abbr title="Facebook"><strong>FB:</strong><br></abbr> <a href="https://www.facebook.com/GomosaUniformes">@GOMOSA UNIFORMES</a>
    						</address>
    					</div>
    					<div class="col-md-3">
    
    						<address>
    							<abbr title="Instagram"><strong>IG:</strong><br></abbr> <a href="https://www.instagram.com/gomosauniformes/">@gomosauniformes</a>
    						</address>
    					</div>
    					<div class="col-md-3">
    
    						<address>
    							<abbr title="Mail"><strong>Correo:</strong><br></abbr> <a href="mailto:gomosa.merida@hotmail.com">gomosa.merida@hotmail.com</a>
    						</address>
    					</div>
    				</div>
    				<p align="center">
    					&copy todos los derechos reservados.
    				</p>
    			</div>
    		</div>
      	</footer>
    </html>

')

?>