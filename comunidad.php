<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "static/head.html"; ?>
    <link href="css/form.css" rel="stylesheet">
</head>

<body>

    <?php include "static/header.html"; ?>

    <!-- Page -->
    <section class="hero is-outlined">
        <div class="hero-body">
            <div class="container">
                <form action="user.php" method="GET">
                    <div class="field" id="form">
                        <input type="text" name="name" id="name" placeholder="Buscar un jugador" />
                        <button class="button is-form" id="search">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <h1 class="title is-2 has-text-centered" id="team"><span class="icon is-large" style="color: purple"><i class="fa fa-thumbs-o-up"></i></span> Vótanos</h1><hr>
                    <p class="mid">
                        <a class= href='https://www.40servidoresmc.es' target='_blank'>Servidores de Minecraft</a><br>
                        <a href='https://www.40servidoresmc.es/projectalpha' target='_blank'><img style='max-width:170px;' src='https://www.40servidoresmc.es/img/botonvota.png' alt='Servidores de Minecraft 40servidoresMC., Vota por ProjectAlpha'></a>
                    </p>
                    <br>
                    <br>
                    <h1 class="title is-2 has-text-centered" id="team"><span class="icon is-large" style="color: purple"><i class="fa fa-map"></i></span> DynMap</h1><hr>
                    <p class="mid">
                    <a class="button is-info ip mid" href="http://projectalpha.es:8123" target="_blank"><span class="icon" style="color: #ff5257; margin-right: 5px"><i class="fa fa-map"></i></span>Entra en nuestro DynMap</a>
                    </p>
                    <br>
                    <br>
                    <h1 class="title is-2 has-text-centered" id="team"><span class="icon is-large" style="color: orangered"><i class="fa fa-comment"></i></span> Foro</h1><hr>
                    <p class="justify">Nuestro foro es la mejor manera para aportar sugerencias, reportes, enterarte de las últimas noticias o simplemente hablar con la gente.</p><br>
                    <a class="button is-info ip mid" href="./foro" target="_blank"><span class="icon" style="color: yellow; margin-right: 5px"><i class="fa fa-comment"></i></span>Entra en nuestro Foro</a>
                </div>
                <div class="column is-1"></div>
                <div class="column">
                    <h1 class="title is-2 has-text-centered" id="team"><span class="icon is-large" style="color: #009e86"><i class="fa fa-coffee"></i></span> Equipo</h1><hr>

                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=Wikijito7" class="image is-64x64"><img src="https://crafatar.com/avatars/d2845f1f8903485694a1fba169eebba3?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Wiki</strong> <span class="tag is-danger">Admin</span> <span class="tag is-dev">Dev</span>
                                    <br>
                                    Wikijito es el creador de ProjectAlpha.<br>
                                    <small><a href="https://twitter.com/Wiky3567">Twitter</a></small>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=cadox8" class="image is-64x64"><img src="https://crafatar.com/avatars/c56cace3570147548c15948f64e4978e?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Cadox8</strong> <span class="tag is-dev">Dev</span> <span class="tag is-danger">Admin</span>
                                    <br>
                                    Cadox8 es el desarrollador principal de ProjectAlpha. <cite>*Break the rules, pay the price*</cite><br>
                                    <small><a href="https://twitter.com/cadox8">Twitter</a> <a href="http://cadox8.me">Web</a></small>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=irlwoolf666" class="image is-64x64"><img src="https://crafatar.com/avatars/d3d156d6885e4acfb5cdd532bfdbd268?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Irlwoolf666</strong> <span class="tag is-danger">Admin</span>
                                    <br>
                                    Irlwoof666 es un administrador de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=juantored" class="image is-64x64"><img src="https://crafatar.com/avatars/44464441d2e3416b8f64807cb7be0c40?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Juantored</strong> <span class="tag is-info">Moderador</span>
                                    <br>
                                    Juantored es un moderador de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=jonimelavo2000" class="image is-64x64"><img src="https://crafatar.com/avatars/a553684d37554f2fa0a30b9cf14b4212?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Jonimelavo2000</strong> <span class="tag is-info">Moderador</span>
                                    <br>
                                    Jonimelavo2000 es un moderador de ProjectAlpha.<br>
									<small><a href="https://twitter.com/unaitutzi">Twitter</a></small>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=Sphero" class="image is-64x64"><img src="https://crafatar.com/avatars/38fcc53f72a14f5d9710a19cde31b4c4?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Sphero</strong> <span class="tag is-info">Moderador</span>
                                    <br>
                                    Sphero es un moderador de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>

                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=SrJonh" class="image is-64x64"><img src="https://crafatar.com/avatars/5f122502e6d14660a5d251c59b1ca206?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>SrJonh</strong> <span class="tag is-warning">Builder</span>
                                    <br>
                                    SrJonh es el constructor principal de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>
					<article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=XSword2400" class="image is-64x64"><img src="https://crafatar.com/avatars/854d5581fb8b45b78bbb1d5de6faabed?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>XSword2400</strong> <span class="tag is-warning">Builder</span>
                                    <br>
                                    XSword2400 es un constructor de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>
					<article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=ojoclon" class="image is-64x64"><img src="https://crafatar.com/avatars/2d8a3debe1484fb6b817ce2420c62419?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>ojoclon</strong> <span class="tag is-warning">Builder</span>
                                    <br>
                                    ojoclon es un constructor de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="media">
                        <figure class="media-left">
                            <a href="user.php?name=Rahu8" class="image is-64x64"><img src="https://crafatar.com/avatars/94bda4b84d854445abcf16301ee39b51?default=MHF_Steve&overlay"></a>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>Rahu8</strong> <span class="tag is-warning">Builder</span>
                                    <br>
                                    Rahu8 es un constructor de ProjectAlpha.<br>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <br>

    <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <?php include "static/footer.html"; ?>

</body>

</html>