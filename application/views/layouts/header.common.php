<?php ?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inicio</title>


	<!--  Bootstrap 4.6 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/dd4396edd6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?= base_url('assets/') ?>style.css">

	<style type="text/css">
		/* cambiar el color de fondo a la barra */
		.navbar-notaria {
			background-color: #621132;
			margin-bottom: 0px;
		}

		.image-circle {
			border-radius: 20px;
			margin: 20px;
		}

		.wrapper {
			display: flex;
			width: 100%;
			align-items: stretch;
		}
		.text-nav-notaria{
			font-family: "Poppins", Arial, sans-serif;
		}

	</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-notaria ">
	<div class="navbar-header">
		<a href="<?= base_url() ?>">
			<img src="<?= base_url('uploader/images/') ?>logo.png" alt="Logotipo" width="150px">
		</a>

	</div>

	<div class="navbar-notaria">
		<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa-solid fa-bars text-light"></i>
		</button>
	</div>


	<div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav  mr-auto text-light">
			<li class="nav-item d-none d-sm-block d-lg-none">
				<a class="nav-link  " href="<?= base_url('index.php/Escritorio')?>"> <strong> <span class="text-light"><i class="fa-solid fa-house mr-1"></i> Inicio</span></strong></a>
			</li>
			<li class="nav-item d-none d-sm-block d-lg-none">
				<a class="nav-link" href="<?= base_url('index.php/Menu/tramites')?>"> <strong> <span class="text-light"><i class="fa-solid fa-dollar-sign mr-1"></i> Trámites</span></strong></a>
			</li>
			<li class="nav-item d-none d-sm-block d-lg-none">
				<a class="nav-link" href="<?= base_url('index.php/Menu/movimientos')?>"> <strong> <span class="text-light"><i class="fa-solid fa-arrow-right-arrow-left mr-1"></i> Movimientos</span></strong></a>
			</li>
			<li class="nav-item d-none d-sm-block d-lg-none">
				<a class="nav-link" href="<?= base_url('index.php/Menu/caja')?>"> <strong> <span class="text-light"><i class="fa-solid fa-cash-register mr-1"></i> Caja</span></strong></a>
			</li>
			<li class="nav-item d-none d-sm-block d-lg-none">
				<a class="nav-link" href="#"> <strong> <span class="text-light"><i class="fa-solid fa-chart-column mr-1"></i> Reportes</span></strong></a>
			</li>
			<li class="nav-item d-none d-sm-block d-lg-none">
				<a class="nav-link" href="#"> <strong> <span class="text-light"><i class="fa-solid fa-gear mr-1"></i> Ajustes</span></strong></a>
			</li>
		</ul>
		<form class="form-inline mr-3">
			<ul class="navbar-nav  mr-auto text-light">
				<li class="nav-item dropdown">

					<a class="nav-link text-light mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div class="d-none d-sm-block d-md-block d-lg-none text-nav-notaria"> <i class="fa-solid fa-bell mr-1"></i><strong> Notificaciones </strong>  </div>
						<div class="d-none d-lg-block "> <i class="fa-solid fa-bell "></i></div>
					</a>
					<!-- ------------------------------------------------ -->
					<!-- DROPDOWN NOTIFICACIONES-->
					<!-- ------------------------------------------------ -->
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<span class="h6 ml-4">Notificaciones</span>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>

						<a class="dropdown-item" href="#">Something else here</a>
					</div>
					<!-- ------------------------------------------------ -->
					<!-- END DROPDOWN NOTIFICACIONES-->
					<!-- ------------------------------------------------ -->
				</li>

				<li class="nav-item mr-4">
					<a href="#" class="nav-link text-light">
					<div class="d-none d-sm-block d-md-block d-lg-none text-nav-notaria"> <i class="fa-solid fa-circle-question mr-1"></i><strong> Ayuda </strong>  </div>
					<div class="d-none d-lg-block "> <i class="fa-solid fa-circle-question "></i></div>
					</a>
				</li>
				<li class="nav-item mr-4">
					<a href="#" class="nav-link text-light">
					<div class="d-none d-sm-block d-md-block d-lg-none text-nav-notaria"> <i class="fa-solid fa-folder-open mr-1"></i><strong> Formatos </strong>  </div>
					<div class="d-none d-lg-block "> <i class="fa-solid fa-folder-open "></i></div>
					</a>
				</li>
				<li class="nav-item mr-4">
					<a href="#" class="nav-link text-light">
					<div class="d-none d-sm-block d-md-block d-lg-none text-nav-notaria"> <i class="fa-solid fa-magnifying-glass mr-1"></i><strong> Busquedas </strong>  </div>
					<div class="d-none d-lg-block"> <i class="fa-solid fa-magnifying-glass"></i></div>
					</a>
				</li>

			</ul>
			<ul class="navbar-nav  mr-auto text-light">
				<li class="nav-link nav-item ">
					<img src="<?= base_url('uploader/images/') ?>user-color.png" alt="Foto de usuario" width="45px"
						 class="image-circle">
					<span class="text-light"><?= "Nombre de usuario" ?></span>
				</li>
			</ul>


		</form>
	</div>


</nav>


<div class="wrapper d-flex align-items-stretch">
	<nav id="sidebar">

		<div class="pt-5">
			<div class="ml-3 mr-3">
				<ul class="list-unstyled components mb-5">
					<li>
						<a href="<?= base_url('index.php/Escritorio/')?>"> <i class="fa-solid fa-house mr-3"></i> Escritorio</a>
					</li>
					<li>
						<a href="#tramitesMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
									class="fa-solid fa-file-invoice-dollar mr-3"></i> Trámites</a>
						<ul class="collapse list-unstyled" id="tramitesMenu">
							<li>
								<a href="#"><i class="fa-solid fa-caret-right mr-3"></i> Nuevo trámite</a>
							</li>
							<li>
								<a href="#"><i class="fa-solid fa-caret-right  mr-3"></i> Consultar/Modificar
									trámite</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#MovimientosMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
									class="fa-solid fa-dollar-sign mr-3"></i> Movimientos</a>
						<ul class="collapse list-unstyled" id="MovimientosMenu">
							<li>
								<a href="#"><i class="fa-solid fa-caret-right mr-3"></i> Nuevo recibo</a>
							</li>
							<li>
								<a href="#"><i class="fa-solid fa-caret-right  mr-3"></i> Consultar/Modificar
									recibos</a>
							</li>
							<li>
								<a href="#"><i class="fa-solid fa-caret-right  mr-3"></i> Corte de caja</a>
							</li>
							<li>
								<a href="#"><i class="fa-solid fa-caret-right  mr-3"></i> Salida de caja</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"> <i class="fa-solid fa-chart-column mr-3"></i> Reportes</a>
					</li>

				</ul>


			</div>

		</div>

	</nav>








