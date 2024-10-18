<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Guitar Shop</title>
	<link rel="stylesheet" type="text/css" href="../css/stylemPro.css" />
</head>

<body>
	<header>
		<div class="container-hero">

			<div class="container hero">

				<div class="container-logo">
					<i class="fa-solid fa-music"></i>
					<h1 class="logo"><a href="/">Guitar Shop</a></h1> <!--div Guitar Shop -->
				</div>

				<div class="container-user">
					<i class="fa-solid fa-user" onclick="location.href='../php/indexLog.php' "></i>
					<!--usuario font awesome-->
					<i class="fa-solid fa-database"></i>
				</div>

			</div>
		</div>

		<div class="container-navbar">
			<nav class="navbar container">

				<i class="fa-solid fa-bars"></i>

				<ul class="menu">
					<li><a href="../index/indexPrin.html">Inicio</a></li>
					<li><a href="../php/indexPr.php">Productos</a></li>
					<li><a href="../php/indexCa.php">Categorias</a></li>
					<li><a href="../php/indexPrr.php">Proveedores</a></li>
					<li><a href="../php/indexMa.php">Marca</a></li>
					<li><a href="../php/indexUb.php">Ubicacion</a></li>
				</ul>

			</nav>
		</div>

	</header>

	<!----------------------------Header------------------>


	<!-- ........... Seccion ................. -->

	<main class="main-content">



		<section class="container top-products">

			<h1 class="heading-1">Procedimientos Productos</h1>


			<!-- sec 1 -->
			<div class="container-products">

				<div class="card-product">


					<div class="content-card-product">


						<section class="form-register">
							
							<form method="post">
								
				

							Marcas de productos: <input type="text" name="marca">
					


							<input type="submit" value="Enviar">
						

							<table>

							<tr class="tab1">
						
								<td>Nombre</td>
								<td>Descripcion</td>
								<td>PCompra</td>
								<td>PVenta</td>
			
							</tr>
							

							<?php 

							include 'conexionbd.php';

							$Marca= $_POST['marca'];
							
							$TablaV = mysqli_query($conexion,"CALL rutiMar('$Marca')") // conexion a la bd y despues la consulta
							or die (mysqli_error($conexion));// si existe un error
							
							while($fila=mysqli_fetch_array($TablaV)){


						?>
					
						<tr class="tab2">

							<td class="tab3"><?php echo $fila['nomProduc'] ?></td>
							<td class="tab3"><?php echo $fila['desProduc'] ?></td>
							<td class="tab3"><?php echo $fila['pCompra'] ?></td>
							<td class="tab3"><?php echo $fila['pVenta'] ?></td>
				
		
						</tr>

						<?php 
						}
						mysqli_free_result($TablaV); 
						mysqli_close($conexion);
						?>
						</table>


						</section>

					</div>

				</div>

			</div>


		</section>

	</main>


	<!--------------------- Seccion footer------------------------>

	<footer class="footer">
		<div class="container container-footer">
			<div class="menu-footer">
				<div class="contact-info">
					<p class="title-footer">Información de Contacto</p>
					<ul>
						<li>
							Dirección: Boulevard Universitario S/N Valle Escondido,
							Río San Javier, 54500 Cd López Mateos, Méx.
						</li>
						<li>Teléfono: 55 5827 0361</li>
						<li>EmaiL: alexR@support.com</li>
					</ul>
					<div class="social-icons">
						<span class="facebook">
							<i class="fa-brands fa-facebook-f"></i>
						</span>
						<span class="twitter">
							<i class="fa-brands fa-twitter"></i>
						</span>
						<span class="youtube">
							<i class="fa-brands fa-youtube"></i>
						</span>
						<span class="pinterest">
							<i class="fa-brands fa-pinterest-p"></i>
						</span>
						<span class="instagram">
							<i class="fa-brands fa-instagram"></i>
						</span>
					</div>
				</div>

				<div class="information">
					<p class="title-footer">Información</p>
					<ul>
						<li><a href="#">Acerca de Nosotros</a></li>
						<li><a href="#">Información Delivery</a></li>
						<li><a href="#">Politicas de Privacidad</a></li>
						<li><a href="#">Términos y condiciones</a></li>
						<li><a href="#">Contactános</a></li>
					</ul>
				</div>

				<div class="my-account">
					<p class="title-footer">Mi cuenta</p>

					<ul>
						<li><a href="#">Mi cuenta</a></li>
						<li><a href="#">Historial de ordenes</a></li>
						<li><a href="#">Lista de deseos</a></li>
						<li><a href="#">Boletín</a></li>
						<li><a href="#">Reembolsos</a></li>
					</ul>
				</div>

				<div class="newsletter">
					<p class="title-footer">Boletín informativo</p>

					<div class="content">
						<p>
							Suscríbete a nuestros boletines ahora y mantente al
							día con nuevas colecciones y ofertas exclusivas.
						</p>
						<input type="email" placeholder="Ingresa el correo aquí...">
						<button>Suscríbete</button>
					</div>
				</div>
			</div>

			<div class="copyright">
				<p>
					Desarrollado por Programación para el mundo &copy; 2022
				</p>

				<img src="../img/payment.png" alt="Pagos">
			</div>
		</div>
	</footer>

	<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>

</html>







<!--.......................................-->
