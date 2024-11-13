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
    <link rel="stylesheet" href="/frontend/style/pag2.css">
    <link rel="stylesheet" href="/frontend/style/footer.css">
    <title>WikiGames</title>
    <base href="/frontend/index.html">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
    <h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
 body
        <p class="logo-Wiki">WikiGames</p>
        <ul class="cont-ul">
            <input type="checkbox" id="estrelaCheckbox">
            <label for="estrelaCheckbox"></label>
            <li><a href="./index.php" class="linkNavegador">Inicio</a></li>
            <li class="develop"><a href="./catalogo.php" class="linkNavegador">Catalogo</a>
            </li>
            <li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
            <li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
        </ul>
    </nav>

    <div class="main">
        <main class=pagg>
            <div class="portada">
                <h1>League of Legends</h1>
            </div>

            <div class="contenedorGrilla2">
                <div class="div10">
                    <p class="parrafoxd"> Introducion: </p>
                    <p class="parrafo10">Es un videojuego multijugador de arena de batalla en línea o también conocido como moba desarrollado y publicado por Riot Games.
                        Con +170 personajes para usar cada uno con un kit de habilidades totalmente distinto al anterior y con un estilo de juego único.
                        Cada uno con funciones, línea y objetivos dentro del juego distintas al resto.
                    </p>
                </div>
            </div>

            <div class="portal1">
                <div class="titulo2">
                    <h2>Contenido</h2>
                </div>

                <div class="image-grid">
                    <div class="image-item">
                        <a href="#">
                            <img src="./img/Games/lol/champions.png" alt="Imagen 1">
                            <p class="image-caption">Campeones</p>
                        </a>
                    </div>
                    <div class="image-item">
                        <a href="#">
                            <img src="./img/Games/lol/runas.jpg" alt="Imagen 2">
                            <p class="image-caption">Runas</p>
                        </a>
                    </div>
                    <div class="image-item">
                        <a href="./games/lol/gamemodes.php">
                            <img src="./img/Games/lol/game_modes.png" alt="Imagen 3">
                            <p class="image-caption">Modos de juegos</p>
                        </a>
                    </div>
                    <div class="image-item">
                        <a href="./games/lol/lol_skins.php">
                            <img src="./img/Games/lol/skins.jpg" alt="Skins">
                            <p class="image-caption">Skins</p>
                        </a>
                    </div>
                    <div class="image-item">
                        <a href="./games/lol/maps.php">
                            <img src="./img/Games/lol/maps.jpg" alt="Mapas">
                            <p class="image-caption">Mapas</p>
                        </a>
                    </div>
                    <div class="image-item">
                        <a href="#">
                            <img src="./img/Games/lol/consejos.jpg" alt="Consejos">
                            <p class="image-caption">Consejos</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="portal2">

                <div class="titulo2">
                    <h2>Mejores campeones para cada linea</h2>
                </div>

                <div class="image-grid2">
                    <div class="image-item2">
                        <p class="image-caption">TOP</p>
                        <img src="./img/Games/lol/champs/Jax.jpg" alt="Imagen 1">
                        <p class="image-caption">Jax</p>
                    </div>
                    <div class="image-item2">
                        <p class="image-caption">Jungla</p>
                        <img src="./img/Games/lol/champs/Nidalee.jpg" alt="Imagen 2">
                        <p class="image-caption">Nidalee</p>
                    </div>
                    <div class="image-item2">
                        <p class="image-caption">MID</p>
                        <img src="./img/Games/lol/champs/Annie.jpg" alt="Imagen 3">
                        <p class="image-caption">Annie</p>
                    </div>
                    <div class="image-item2">
                        <p class="image-caption">ADC</p>
                        <img src="./img/Games/lol/champs/Aphelios.jpg" alt="Imagen 4">
                        <p class="image-caption">Aphelios</p>
                    </div>
                    <div class="image-item2">
                        <p class="image-caption">SOPORTE</p>
                        <img src="./img/Games/lol/Milio.jpg" alt="Imagen 5">
                        <p class="image-caption">Milio</p>
                    </div>
                </div>
            </div>

            <div class="portal3">
                <div class="titulo2">
                    <h2>Mapas</h2>
                </div>
                <div class="image-grid3">
                    <div class="image-item2">
                        <img src="./img/Games/lol/map_summoners_rift.png" alt="Imagen 1">
                        <p class="image-caption">Grieta del Invocador</p>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/lol/map_aram.png" alt="Imagen 2">
                        <p class="image-caption">Aram</p>
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