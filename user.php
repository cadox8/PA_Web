<?php
require "pa/db.php";

if (isset($_GET['name']) && is_string($_GET['name'])) {
    $aid = $_GET['name'];
} else {
    header("Location: http://projectalpha.es/comunidad.php");
}
$resultado = $mysql->query("SELECT * FROM pa_datos WHERE `name` ='$aid'");
$fila = $resultado->fetch_object();

$logrosQuery = $mysql->query("SELECT * FROM pa_logros WHERE `user` ='$aid'");
$logros = $logrosQuery->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "static/head.html"; ?>
</head>

<body>

    <?php include "static/header.html"; ?>

    <section class="section">
        <div class="container">
            <h1 class="title is-2 mid"><span class="icon is-large" style="color: purple"><i class="fa fa-id-card-o"></i></span> Estadísticas de <span style="color: #205bbc"><?php echo $aid; ?></span></h1><hr>
            <div class="columns">
                <div class="column is-2">
                    <?php if ($aid == "Sphero") $aid = "xFortesquex"; ?>
                    <img src="https://crafatar.com/renders/body/<?php echo $aid?>?overlay">
                    <p class="mid" id="rank"></p><br>
                </div>
                <div class="column is-5">
                    <h1 class="title is-3 mid">General</h1><hr>
                    <ul>
                        <li class="is-stats"><span class="icon"><i class="fa fa-calendar blue"></i></span> Jugando desde <span class="right is-colored"><?php echo date("d/m/Y", strtotime($fila->timeJoin)); ?></span></li>
                        <li class="is-stats"><span class="icon"><i class="fa fa-calendar caviar"></i></span> Última conexión <span class="right is-colored"><?php echo date("d/m/Y", strtotime($fila->lastConnect)); ?></span></li>
                        <li class="is-stats"><span class="icon"><i class="fa fa-circle-o-notch purple"></i></span> Monedas <span class="right is-colored"><?php echo $fila->coins; ?></span></li>
                        <li class="is-stats"><span class="icon"><i class="fa fa-balance-scale caviar"></i></span> Karma <span class="right is-colored"><?php echo $fila->karma; ?></span></li>
                    </ul>
                </div>
                <div class="column">
                    <h1 class="title is-3 mid">TOA</h1><hr>
                    <ul>
                        <li class="is-stats"><span class="icon"><i class="fa fa-window-minimize red"></i></span> Piso Máximo <span class="right is-colored"><?php echo $fila->maxPiso; ?></span></li>
                        <li class="is-stats"><span class="icon"><i class="fa fa-certificate green"></i></span> Nivel <span class="right is-colored"><?php echo $fila->lvl; ?></span></li>
                        <li class="is-stats" id="kit"></li>
                        <li class="is-stats"><span class="icon"><i class="fa fa-dot-circle-o orange"></i></span> Zenys <span class="right is-colored"><?php echo $fila->zeny; ?></span></li>
                    </ul>
                </div>
            </div>

            <div class="columns">
                <div class="column is-2"></div>
                <nav class="column">
                    <h1 class="title is-3 mid">Logros</h1><hr>
                    <p id="logro" class="important"></p>
                    <p id="desc"></p>
                    <br>
                    <nav class="level">
                        <div class="level-left">
                            <?php
                            $count = $logrosQuery->num_rows;
                            for ($i = 1; $i <= $count; $i++) {
                                echo '<div class="level-item">';
                                echo '<a class="image is-64x64" onclick="loadLogro(\''.$i.'\')"><img src="/img/logros/'.$i.'.png" id="'.$i.'"></a>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="js/rango.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById("rank").innerHTML = getColor(<?php echo $fila->grupo; ?>);
            document.getElementById("kit").innerHTML = getKit(<?php echo $fila->kit; ?>);
        };

        var latestID = 0;
        function loadLogro(id) {
            $.getJSON("logros.json", function(json) {
                document.getElementById("logro").innerHTML = json[id].nombre;
                document.getElementById("desc").innerHTML = json[id].desc;
            });
            if (latestID !== 0) document.getElementById(latestID).style.border = "";
            document.getElementById(id).style.border = "1px double red";
            latestID = id;
        }
    </script>
    <?php
    include "static/footer.html";
    $resultado->free();
    $logrosQuery->free();
    ?>

</body>

</html>
