<?php
if (isset($_GET['juego']) && is_string($_GET['juego'])) {
    $aid = $_GET['juego'];
} else {
    header("Location: http://projectalpha.es/juegos.php");
}

$name = "Error de modo de juego";
$desc = "Error de modo de juego";
$more = "No hay información disponible";
switch ($aid) {
    case "rg":
        $name = "RageGames";
        $desc = $name." es un frenético juego en el que tendrás que eliminar a tus adversarios con flechas y arcos, tomahawks y cuchillos. Cada `kill` te dará puntos y cada `muerte` te los quitará.";
        $more = "<p>Cuchillo: +20 puntos.<br>Arco: +30 puntos.<br>Hacha: +50 puntos si matas,-25 puntos si te matan.</p>";
        break;
    case "toa":
        $name = "Tower Of Ancients";
        $desc = "En ".$name." (".strtoupper($aid).") tendrás que alcalzar el niver más bajo de una torre donde te esperan infinidad de Mobs y Bosses dispuestos a no dejarte pasar. Únete a tus amigos para, combinando las clases, poder llegar mucho más lejos.";
        $more = "Los Archimagos aún no quieren revelar los secretos que aquí aguardan...";
        break;
    case "cr":
        $name = "Creativo";
        $desc = "Aaaah, el Creativo, un sitio de paz y tranquilidad destinado para dar rienda suelta a tu imaginación y poder construir cuanto se quiera.";
        $more = "Además de poder construir lo que quieras, se suelen hacer eventos de construcción y de algún minijuegos, como el escondite.";
        break;
    case "sr":
        $name = "Survival";
        $desc = "El Survival es un modo de juego donde se pondrán a prueba tus habilidades a la hora de jugar al Minecraft, a la vez de que te diviertes con los eventos y con el resto de jugadores";
        $more = "Aquí publicaremos (además de en el foro), los eventos de este mundo, junto con sus fechas y ganadores.";
        break;
}
$fi = new FilesystemIterator('./img/games/'.$aid, FilesystemIterator::SKIP_DOTS)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/slider.css" rel="stylesheet">
    <?php include "static/head.html"; ?>
</head>

<body>

    <?php include "static/header.html"; ?>

    <section class="hero is-outlined">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1 mid"><?php echo $name; ?></h1><hr>
                <?php echo $desc; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <h1 class="title is-2 has-text-centered" id="team"><span class="icon is-large" style="color: #009e86"><i class="fa fa-picture-o"></i></span> Imágenes</h1><hr>

                    <div class="carousel" data-flickity='{ "lazyLoad": true, "autoPlay": true }'>
                        <?php
                        for ($i = 1; $i <= iterator_count($fi); $i++) {
                            echo '<div class="carousel-cell">';
                            echo '<img class="carousel-cell-image is-centered" data-flickity-lazyload="img/games/'.$aid.'/'.$i.'.png"/></img>';
                            echo '</div>';
                        }
                        ?>
                    </div>

                </div>

                <div class="column is-4">
                    <h1 class="title is-2 has-text-centered" id="team"><span class="icon is-large" style="color: gold"><i class="fa fa-file "></i></span> Más información</h1><hr>
                    <p>
                        <?php echo $more; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/slider.js"></script>
    <?php include "static/footer.html"; ?>

</body>

</html>