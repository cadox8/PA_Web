<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "static/head.html"; ?>
</head>

<body>

    <?php include "static/header.html"; ?>

    <!-- Page -->
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-9"> <!-- News -->
                    <h1 class="title is-2 has-text-centered"><span class="icon is-large" style="color: red"><i class="fa fa-newspaper-o"></i></span> Noticias</h1><hr>
                    <?php
                    $rss = new DOMDocument();
                    $rss->load('http://projectalpha.es/foro/index.php?forums/noticias.2/index.rss');
                    $feed = array();

                    foreach ($rss -> getElementsByTagName('item') as $node) {
                        $item = array (
                            'title' => $node -> getElementsByTagName('title') -> item(0) -> nodeValue,
                            'desc' => $node -> getElementsByTagName('encoded') -> item(0) -> nodeValue,
                            'link' => $node -> getElementsByTagName('link') -> item(0) -> nodeValue,
                            'date' => $node -> getElementsByTagName('pubDate') -> item(0) -> nodeValue,
                            'author' => $node -> getElementsByTagName('author') -> item(0) -> nodeValue,
                        );
                        array_push($feed, $item);
                    }

                    for($x = 0; $x < 3; $x++) {
                        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
                        $link = $feed[$x]['link'];
                        $description = $feed[$x]['desc'];
                        $date = date('d-m-Y', strtotime($feed[$x]['date']));
                        $author = $feed[$x]['author'];

                        if ($title == null || $title == "") continue;

                        echo '<p><strong><a href="'.$link.'">'.$title.'</a></strong><br />';
                        echo '<p>'.$description.'</p>';
                        echo '<small><em>Escrito el '.$date.' por '.str_replace(")", " ", str_split($author, 21)[1]).'</em></small></p>';
						echo '<hr>';
                    }
                    ?>
                </div>

                <div class="column is-3"> <!-- Twitter -->
                    <h1 class="title is-2 has-text-centered"><span class="icon is-large" style="color: #00aced"><i class="fa fa-twitter"></i></span> Twitter</h1><hr>

                    <a class="twitter-timeline" data-theme="light" data-height="650" data-chrome="noheader nofooter noborders noscrollbar"
                       href="https://twitter.com/ProjectAlphaSV"></a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </section>

    <?php include "static/footer.html"; ?>

</body>

</html>
