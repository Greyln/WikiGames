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
    <link rel="stylesheet" href="/frontend/style/Valo.css">
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
    <h1 class="titulo">WikiGames <img class="logowikigames" src="/frontend/img/favicon.ico" alt="logo-Wiki"></h1>
    <nav>
        <p class="logo-Wiki">WikiGames</p>
        <ul class="cont-ul">
 body type="checkbox" id="estrelaCheckbox">
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

            <div class="imagen-fondo">
                <div class="portada">
                    <h1>Valorant</h1>
                </div>

                <div class="contenedorGrilla2">
                    <div class="div10">
                        <p class="parrafoxd"> Introducion: </p>
                        <p class="parrafo10">Valorant es un shooter táctico en primera persona de estilo hero shooter,
                            desarrollado y publicado por Riot Games.
                            Se trata de un videojuego 5 vs 5 el cual se divide entre atacantes y defensores, los
                            atacantes tienen que plantar la spyke y lograr que explote mientras que los defensores
                            tienen que evitar esto o en su defecto desactivar la spyke y evitar que explote.
                            El juego se divide por 4 roles siendo estos: Centinela, iniciador, duelista y controlador.
                            Con distintos objetivos y habilidades cada uno lo que permite diversión y entretenimiento
                            durante mucho tiempo.
                        </p>
                    </div>
                </div>
                <div class="portal1">


                    <div class="image-grid">
                        <div class="image-item">
                            <a class="image-caption" href="#">
                                <a href="#agentes" class="scroll-link"><img src="./img/Games/valorant/agentes.png"
                                        alt="Imagen 1"></a>
                                <p class="image-caption">Agentes</p>
                            </a>
                        </div>
                        <div class="image-item">
                            <a class="image-caption" href="https://www.youtube.com/watch?v=EJR0rhvjGDk" target="_blank">
                                <img src="./img/Games/valorant/armas.png" alt="Imagen 2">
                                <p class="image-caption">Armas</p>
                            </a>
                        </div>

                        <div class="image-item">
                            <a class="image-caption" href="#">
                                <a href="#mapas" class="scroll-link"><img src="./img/Games/valorant/maps.jpg" alt="Imagen 5"></a>
                                <p class="image-caption">Mapas</p>
                            </a>
                        </div>
                        <div class="image-item">
                            <a class="image-caption"
                                href="https://www.youtube.com/watch?v=ufdgdD4ATUw&list=PLFm6NSJeDkOeS9ydwypCFPeGRZVztiNO4"
                                target="_blank">
                                <img src="./img/Games/valorant/mejorar_aim.jpg" alt="Imagen 6">
                                <p class="image-caption">Consejos</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="portal2">

                <div id="agentes" class="titulo2">
                    <h2>Guias de agentes</h2>
                </div>

                <div class="image-grid2">
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Astra_Artwork.png" alt="Imagen 1">
                        <p class="image-caption">Astra</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Breach_Artwork.png" alt="Imagen 2">
                        <p class="image-caption">Breach</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Brimstone_Artwork.png" alt="Imagen 3">
                        <p class="image-caption">Brimstone</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Chamber_Artwork.png" alt="Imagen 4">
                        <p class="image-caption">Chamber</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Cypher_Artwork.png" alt="Imagen 5">
                        <p class="image-caption">Cypher</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/147px-Deadlock_Artwork.png" alt="Imagen 6">
                        <p class="image-caption">Deadlock</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img//char/96px-Fade_Artwork.png" alt="Imagen 7">
                        <p class="image-caption">Fade</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Gekko_Artwork.png" alt="Imagen 8">
                        <p class="image-caption">Gekko</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Harbor_Artwork.png" alt="Imagen 9">
                        <p class="image-caption">Harbor</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Jett_Artwork.png" alt="Imagen 10">
                        <p class="image-caption">Jett</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-KAYO_Artwork.png" alt="Imagen 11">
                        <p class="image-caption">KAY/O</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Killjoy_Artwork.png" alt="Imagen 12">
                        <p class="image-caption">Killjoy</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Neon_Artwork.png" alt="Imagen 13">
                        <p class="image-caption">Neon</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Omen_Artwork.png" alt="Imagen 14">
                        <p class="image-caption">Omen</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Phoenix_Artwork.png" alt="Imagen 15">
                        <p class="image-caption">Phoenix</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Raze_Artwork.png" alt="Imagen 16">
                        <p class="image-caption">Raze</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Reyna_Artwork.png" alt="Imagen 17">
                        <p class="image-caption">Reyna</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Sage_Artwork.png" alt="Imagen 18">
                        <p class="image-caption">Sage</p>
                        <button class="btnpj">Ataque</button><a href="https://youtu.be/qtEDacdytI0?si=2Q0Cc_bKpBzXjd6J" target="_blank"><button
                            class="btnpj">Defensa</button></a>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Skye_Artwork.png" alt="Imagen 19">
                        <p class="image-caption">Skye</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Sova_Artwork.png" alt="Imagen 20">
                        <p class="image-caption">Sova</p>
                        <button class="btnpj">Ataque</button><button class="btnpj">Defensa</button>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Viper_Artwork.png" alt="Imagen 21">
                        <p class="image-caption">Viper</p>
                        <a href="https://www.youtube.com/watch?v=DsFUhRNg3N8&list=PLFm6NSJeDkOc1ViJeKYTzE4IwfhFDP4ms"
                            target="_blank"><button class="btnpj">Ataque</button></a>
                        <a href="https://www.youtube.com/watch?v=y5yrjPCq2WI&list=PLFm6NSJeDkOc3K707AHdUfPDlxlWSGjFM"
                            target="_blank"><button class="btnpj">Defensa</button></a>
                    </div>
                    <div class="image-item2">
                        <img src="./img/Games/valorant//char/163px-Yoru_Artwork.png" alt="Imagen 22">
                        <p class="image-caption">Yoru</p>
                        <a href="" target="_blank"><button class="btnpj">Ataque </button>
                        <a href="#" target="_blank"><button class="btnpj">Defensa</button></a>
                    </div>
                </div>
            </div>

            <div class="portal3">
                <div id="mapas" class="titulo2">
                    <h2>Mejores composiciones de agentes en cada Mapa</h2>
                </div>
                <div class="image-grid3">
                    <div class="image-item2">
                        <a>
                            <img src="./img/Games/valorant/map_ascent.png" alt="Imagen 1">
                            <p class="image-caption">Ascent</p>
                        </a>
                    </div>
                    <div class="image-item2">
                        <a>
                            <img src="./img/Games/valorant/map_bind.png" alt="Imagen 2">
                            <p class="image-caption">Bind</p>
                        </a>
                    </div>
                    <div class="image-item2">
                        <a>
                            <img src="./img/Games/valorant/map_haven.png" alt="Imagen 5">
                            <p class="image-caption">Haven</p>
                        </a>
                    </div>
                    <div class="image-item2">
                        <a>
                            <img src="./img/Games/valorant/map_lotus.png" alt="Imagen 7">
                            <p class="image-caption">Lotus</p>
                        </a>
                    </div>
                    <div class="image-item2">
                        <a>
                            <img src="./img/Games/valorant/map_split.png" alt="Imagen 9">
                            <p class="image-caption">Split</p>
                        </a>
                    </div>
                    <div class="image-item2">
                        <a>
                            <img src="./img/Games/valorant/map_sunset.png" alt="Imagen 10">
                            <p class="image-caption">Sunset</p>
                        </a>
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

    <script>
        // Selecciona todos los enlaces con la clase 'scroll-link'
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                // Obtén el ID de destino del enlace
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                // Calcula la distancia hasta el elemento destino
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

                // Realiza el scroll lento usando `window.scrollTo` con opciones
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    </script>

</body>


</html>