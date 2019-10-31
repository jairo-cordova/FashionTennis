<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Fashion Tennis</title>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
	
				<nav id="nav">
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>
						<li><a href="catalogo.php">Catálogo</a></li>
						<li><a href="pedidos.php">Pedidos</a></li>
						<li><a href="contactanos.php">Contáctanos</a></li>
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<h2>Fashion Tennis</h2>
				<p>Contamos con la mejor calidad en tennis<br /> siente la comodidad de ellos</p>
				<ul class="actions">
					<li><a href="#" class="button special big">Registrate</a></li>
				</ul>
			</section>
			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Tennis </h2>
						</header>
						<div>
						<table>
							<tr>
								<th>ID</th>
								<th>NOMBRE</th>
								<th>DESCRIPCION</th>
								<th>PRECIO</th>
								<th></th>
							</tr>
							<?php
							 include_once 'conexion.php';
							 $mysqlConexion=new mysqli($hostDb,$usuarioDb,$claveDb,$nombreDb);
							$mysqlQuerry="SELECT *FROM tennis";
							$Resultado=&$mysqlConexion-query($mysqlQuerry);
							while($row=$Resultado->fetch_assoc())
							{
								?>
								<tr>
								<td><?php echo $row["ID"]; ?>   </td>
								<td><?php echo $row["NOMBRE"]; ?></td>
								<td><?php echo $row["DESCRIPCION"]; ?></td>
								<td><?php echo $row["PRECIO"]; ?></td>
								</tr>
								
								<?php
							}
							?>
						</table>
						</div>
					</div>
				</section>
		
		
		
		
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; UNACH</li>
						<li>Design: <a href="#">LSC</a></li>
						
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
		    <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>