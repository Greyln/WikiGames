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
	<link rel="stylesheet" href="/frontend/style/footer.css">
	<link rel="stylesheet" href="/frontend/style/nosotros.css">
	<title>WikiGames</title>
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Ubuntu:wght@300&display=swap');
	</style>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	</style>
	<link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
    <h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
    <nav>
        <p class="logo-Wiki">WikiGames</p>
        <ul class="cont-ul">
            <li><a href="./index.php" class="linkNavegador">Inicio</a></li>
            <li class="develop"><a href="./catalogo.php" class="linkNavegador">Catálogo</a>
            </li>
            <li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
            <li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
        </ul>
    </nav>

    <div class="portada">
        <h1>WikiGames</h1>
    </div>

    <div class="contenedorGrilla2">
        <div class="div10">
            <p class="parrafo10">Nuestro equipo se enorgullece de presentarles nuestra innovadora página de videojuegos.
                Este apasionante proyecto ha sido el resultado de un arduo trabajo colaborativo. Estamos encantados de
                ofrecerles una experiencia única y emocionante, donde podrán sumergirse en el fascinante mundo de los
                videojuegos.
                Nuestra página ha sido diseñada con gran dedicación y atención al detalle para brindarles a nuestros
                usuarios una plataforma atractiva y fácil de navegar.
                Aquí encontrarán una amplia selección de juegos de diferentes géneros y plataformas, desde emocionantes
                aventuras de acción hasta desafiantes rompecabezas y cautivadores juegos de rol. Además, nos esforzamos
                por mantenernos actualizados con las últimas novedades y lanzamientos en la industria de los
                videojuegos, para que siempre estén al tanto de las tendencias más recientes.</p>
        </div>

        <div class="div30">
            <a href="https://www.youtube.com/@Wikigames-kb5ig" target="_blank"><video class="video" width="720"
                    height="340" loop autoplay muted>
                    <source src="./videos/Consejos para ganar duelos en valorant.mp4" type="video/mp4">
                    <source src="./videos/Consejos para ganar duelos en valorant.ogg" type="video/ogg">
                </video>
            </a>
        </div>
    </div>

    <center>
        <h1 class="SubtituloJuegos">Desarrolladores de la pagina </h1>
    </center>
    <div class="parent">

        <div class="div1">
            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Joaquin_pixar.jpg" alt="foto">
                    <h3>Joaquin Andreis</h3>
                </div>
                <div class="face back">
                    <h3>Progamador y Diseñador</h3>
                    <p>Desarrollador Web (Líder)</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Maco_pixar.jpg" alt="foto">
                    <h3>Mateo Baez</h3>
                </div>
                <div class="face back">
                    <h3>Progamador y Diseñador</h3>
                    <p>Desarrollador Web y encargado de la documentación</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Boland_pixar.jpg" alt="foto">
                    <h3>Facundo Boland</h3>
                </div>
                <div class="face back">
                    <h3>Creador de contenido</h3>
                    <p>Tester y creador de contenido</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parent">

        <div class="div1">
            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Motomoto_pixar.jpg" alt="foto">
                    <h3>Agustin Miyazono</h3>
                </div>
                <div class="face back">
                    <h3>Tester</h3>
                    <p>Tester y data entry</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Dhani_pixar.jpg" alt="foto">
                    <h3>Danilo Casagrande</h3>
                </div>
                <div class="face back">
                    <h3>Progamador y administrador</h3>
                    <p>Administrador base de datos</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Maco_pixar.jpg" alt="foto">
                    <h3>Marco Zapana</h3>
                </div>
                <div class="face back">
                    <h3>Administrador base de datos</h3>
                    <p>Hizo la base de datos fium</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face front">
                    <img src="./img/Team/Guardia.jpg" alt="foto">
                    <h3>Agustin Guardia</h3>
                </div>
                <div class="face back">
                    <h3>Programador de frontend y backend</h3>
                    <p>Hizo la logica y funcionalidad para las preferencias</p>
                    <div class="link">
                        <a href="#">Mas</a>
                    </div>
                </div>
            </div>
        </div>
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
                    <a href="https://www.instagram.com/wikii_games/" target="_blank" class="fa fa-instagram"></a>
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