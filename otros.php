<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Authors:" content="Jahir Gómez, Isaac Ehuan">

    <title>Carteles</title>

    <meta name="description" content="Somos una empresa dedicada a la confección de Uniformes para tu empresa, con calidad en la confección así como en el servicio">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

    <script language="javascript">

        function place(new_item){
            if (document.cookie && document.cookie != ""){
                var old_cookie = document.cookie;
                document.cookie = old_cookie + escape(new_item + "xxx");
            }
            else{
                document.cookie = "stuff=" + escape(new_item + "xxx");
            }
        }
        
    </script>

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
			<div class="col-md-12">
				<ul class="nav nav-pills">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ropa.html">Ropa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="otros.html">Otros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="carteles.html">Carteles</a>
					</li>
					<li class="nav-item dropdown ml-md-auto">
						 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Más opciones</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							 <a class="dropdown-item" href="iniciarSesion.html">Iniciar Sesión</a> <a class="dropdown-item" href="#">Configuración</a> <a class="dropdown-item" href="carrito.html">Carrito de compras</a>
							<div class="dropdown-divider">
							</div> <a class="dropdown-item" href="#">Cerrar Sesión</a>
						</div>
					</li>
				</ul>
				<br>
				<br>
				<div class="row">
					<div class="col-md-12">
						<h2> Artículos relacionados con ropa que tenemos para ti:</h2>
                        <br>
                        <br>
					</div>
					<div class="col-md-4" align="center">
						<div class="card" style="width: 18rem; text-align: center;">
                            <img src="img/taza.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Tazas</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="javascript:place(4)" class="btn btn-primary">Añadir al carrito</a>
                            </div>
                        </div>
                        <br>
					</div>
					<div class="col-md-4" align="center">
						<div class="card" style="width: 18rem; text-align: center;">
                            <img src="img/termo_vinil.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Termos de Vinil</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="javascript:place(5)" class="btn btn-primary">Añadir al carrito</a>
                            </div>
                        </div>
                        <br>
					</div>
					<div class="col-md-4" align="center">
						<div class="card" style="width: 18rem; text-align: center;">
                            <img src="img/termo_sublimado.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Termos Sublimados</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="javascript:place(6)" class="btn btn-primary">Añadir al carrito</a>
                            </div>
                        </div>
                        <br>
					</div>
				</div>
				<br>
			</div>
		</div>
		<br>
    	<script src="js/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/scripts.js"></script>
  	</body>

  	<footer>
		<div class="row">
			<div class="col-md-12 ">
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