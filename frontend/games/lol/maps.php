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
    <link rel="stylesheet" href="/frontend/style/pag2-5.css">
    <link rel="stylesheet" href="/frontend/style/footer.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>WikiGames</title>
    <base href="/frontend/index.html">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    </style>
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body class="body">
    <h1 class="titulo">WikiGames</h1>
    <nav>
        <p class="logo-Wiki">WikiGames</p>
        <ul class="cont-ul">
            <input type="checkbox" id="estrelaCheckbox">
            <label for="estrelaCheckbox"></label>
            <li><a href="./index.php " class="linkNavegador">Inicio</a></li>
            <li class="develop"><a href="./catalogo.php " class="linkNavegador">Catalogo</a>
            </li>
            <li><a href="./nosotros.php" class="linkNavegador">Nosotros</a></li>
            <li><a href="./usuario.php" class="linkNavegador">Mi cuenta</a></li>
        </ul>
    </nav>

    <div class="main">
        <main class=pagg>
            <div class="portada">
                <h1>Mapas</h1>
            </div>

            <div class="portal1">
                <div class="titulo2">
                    <h2>La Grieta del invocador</h2>
                </div>

                <div class="image-grid">

                    <div class="div10">
                        <p class="image-caption">El objetivo de La Grieta del Invocador es simple: destruir el nexo enemigo.
                            Para llegar a ello, los campeones deben atravesar las diferentes lineas o carriles (lanes) donde combatirán contra los campeones enemigos para destruir las torretas,
                             dos por linea (cuatro por linea en total), hasta llegar a la base enemiga.
                             La fuerza de las torretas crece según su cercanía al nexo.
                        </p>

                        <p class="image-caption">
                                En el mapa existen 3 líneas: Top , Mid y Bot ; además de la jungla.
                        </p>

                        <p class="image-caption">
                                Top:
                                En esta línea es la más solitaria del mapa.
                                La línea de top es perfecta para personajes con muy buena resistencia, por ejemplo: Garen, Poppy, Jax y Darius.
                        </p>

                        <p class="image-caption">
                                Mid:
                                En esta línea los jugadores se enfrentan en un uno contra uno.
                                Los personajes con mucho daño mágico son perfectos para línea, por ejemplo: Veigar y Katarina.
                        </p>

                        <p class="image-caption">
                                Bot:
                                Bot es la línea mas cooperativa de las tres. Depende de dos personajes en específico.
                                Es necesario un personaje con mucho daño físico que se encargue de matar a los rivales, por ejemplo: Jinx y Kalista
                                También se necesita el personaje soporte que ayude al de daño protegiendo o ayudando a matar. Por ejemplo: Janna y Taric
                        </p>

                        <p class="image-caption">
                                Jungla:
                                La jungla esta llena de oscuridad y monstruos para matar. El territorio de la jungla es perfecto para esconderse en la maleza y atacar a los rivales en una línea desde la maleza por sorpresa.
                                Personajes de aguante y buen daño  son perfectos para la jungla ya que podrán matar monstruos tranquilos y tener mas posibilidades de supervivencia. Por ejemplo: Zac Zac y Warwick.
                        </p>
                    </div>


                    <div class="image-item">
                        <img src="./img/Games/lol/map_summoners_rift.png" alt="Imagen 1">
                    </div>

                </div>
            </div>

            <div class="portal2">

                <div class="titulo2">
                    <h2>Howling Abyss</h2>
                </div>

                <div class="image-grid2">
                    <div class="div10">
                        <p class="image-caption2">
                            En ARAM, los jugadores son asignados aleatoriamente a un campeón y deben luchar en un solo carril en el mapa Howling Abyss.
                            El mapa Howling Abyss en ARAM es más pequeño que los mapas estándar de League of Legends, y la única senda disponible es el carril central.
                            Este modo de juego se centra en combates intensos y acción constante, ya que los equipos se enfrentan directamente.
                        </p>

                        <p class="image-caption2">
                            El mapa consta de un nexo, dos torretas de nexo, un inhibidor, una torreta inhibidora y una torreta adicional a cada lado.
                             Los arbustos se encuentran en la parte superior del carril, con dos reliquias de salud y algunos poros.
                        </p>
                    </div>

                    <div class="image-item2">
                        <img src="./img/Games/lol/map_aram.png" alt="Imagen 1">
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