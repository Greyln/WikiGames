<?php
// Iniciar la sesión
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/frontend/style/pag2-15.css">
	<link rel="stylesheet" href="/frontend/style/footer.css">
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	<title>WikiGames</title>
	<base href="/frontend/index.html">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
	<link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
	<h1 class="titulo">WikiGames</h1>
		<p class="logo-Wiki">WikiGames</p>
		<ul class="cont-ul">
			<input type="checkbox" id="estrelaCheckbox">
			<label for="estrelaCheckbox"></label>
			<li><a href="./index.php" class="linkNavegador">Inicio</a></li>
			<li class="develop"><a href="./catalogo.php" class="linkNavegador">Catálogo</a>
			</li>
			<li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
			<li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
		</ul>
	</nav>

	<div class="main">
		<main class=pagg>
			<div class="portada">
				<h1>Las Skins</h1>
			</div>

			<div class="portal1">
				<div class="titulo2">
					<h2>Chromas</h2>
				</div>

				<div class="image-grid">

					<div class="div10">
						<p class="image-caption">
							Los aspectos cromáticos son versiones recoloreadas de los aspectos clásicos o adquiribles de un campeón en el juego.
							Pueden comprarse individualmente por 290 RP o como parte de un paquete Chroma Pack a un precio con descuento.
						</p>

						<p class="image-caption">
							Algunos cromas también pueden estar disponibles a la venta por 2000 BE o 195 RP cada uno durante eventos como Essence Emporium.
						</p>

						<p class="image-caption">
							Algunos cromas son más exclusivos y especiales, formando parte de eventos específicos como Night Blossom y Emberclaw.
							Estos cromas solo pueden desbloquearse a través de Hextech Crafting y tienen nombres distintivos.
						</p>

					</div>


					<div class="image-item">
						<img src="./img/Games/lol/skins_chromas.png" alt="Imagen 1">
					</div>

				</div>
			</div>

			<div class="portal2">

				<div class="titulo2">
					<h2>Champion skin</h2>
				</div>

				<div class="image-grid2">
					<div class="div10">
						<p class="image-caption2">
							En League of Legends, un aspecto de campeón se refiere a una variante de apariencia, que incluye un diseño alternativo y/o una combinación de colores diferente, disponible para cualquier campeón del juego.
						</p>

						<p class="image-caption2">
							La mayoría de los aspectos en League of Legends están disponibles para compra en la tienda Riot del cliente del juego utilizando RP.
							Sin embargo, algunos son de tiempo limitado, y unas pocas opciones no se pueden obtener después de su lanzamiento inicial.
						</p>

						<p class="image-caption2">
							Cada aspecto en League of Legends incluye un modelo y arte de presentación únicos.
							Algunos aspectos ofrecen adicionalmente efectos de partículas, voces en off y efectos de sonido distintivos para los campeones, lo que puede afectar el precio del aspecto.
						</p>
					</div>
					<div class="image-item2">
						<img src="./img/Games/lol/skins_yasuo.png" alt="Imagen 1">
					</div>
				</div>
			</div>

			<div class="portal3">

				<div class="titulo2">
					<h2>Ward skins</h2>
				</div>

				<div class="image-grid3">

					<div class="div10">
						<p class="image-caption2">
							Los diseños de los centinelas son cosméticos que alteran la apariencia de varios íconos relacionados con las ward en League of Legends.
							Esto incluye íconos de Stealth Ward, Stealth Wards, ícono de Totem Ward, íconos de Control Ward, íconos de Control, íconos de Farsight Ward y íconos de Zombie Wards colocados por el invocador.
						</p>

						<p class="image-caption2">
							Los aspectos de centinela fueron lanzados inicialmente como alquileres de 7 días, acumulables hasta 52 veces, y todos los alquileres activos se ejecutaban simultáneamente.
							Algunas skins de centinela originales también estaban disponibles para compra con IP (Puntos de Influencia).
							Sin embargo, un año después de su lanzamiento, Riot decidió convertirlos en cosméticos permanentes.
						</p>

					</div>

					<div class="image-item3">
						<img src="./img/Games/lol/wards.png" alt="Imagen 1">
					</div>
				</div>

			</div>

		</main>

	</div>
	<footer class="pie-pagina">
		<div class="grupo-1">
			<div class="box">
				<figure>
					<a href="#">
						<img src="./img/favicon.ico" alt="Logo de la pagina">
					</a>
				</figure>
			</div>
			<div class="box">
				<h2>SOBRE NOSOTROS</h2>
				<p>Presentamos nuestra innovadora página de videojuegos, fruto de un trabajo colaborativo y dedicado.
					Ofrecemos una experiencia única en el mundo de los videojuegos, con una plataforma atractiva y fácil
					de usar. Disponemos de una amplia selección de juegos de diversos géneros y plataformas.</p>
				<p></p>
			</div>
			<div class="box">
				<h2>SIGUENOS</h2>
				<div class="red-social">
					<a href="https://www.facebook.com" target="_blank" class="fa fa-facebook"></a>
					<a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram"></a>
					<a href="https://twitter.com/?lang=es" target="_blank" class="fa fa-twitter"></a>
					<a href="https://www.youtube.com/@Wikigames-kb5ig" target="_blank" class="fa fa-youtube"></a>
				</div>
			</div>
		</div>
		<div class="grupo-2">
			<small>&copy; 2024 <b>WikiGames</b> - Todos los Derechos Reservados.</small>
		</div>
	</footer>
</body>

</html>