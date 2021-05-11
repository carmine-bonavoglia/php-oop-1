<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity - Mediaset Play</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- CDN FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- LINK GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="navbar-dx">
            <img src="img/mplayinf-logo-complete@2.png" alt="Infinity Mediaset Play">
            <ul>
                <li><a href="#">Catalogo<i class="fas fa-sort-down"></i></a></li>
                <li><a href="#">Dirette Tv<i class="fas fa-sort-down"></i></a></li>
                <li><a href="#">Scopri Infinity+</a></li>
            </ul>
        </div>
        <div class="navbar-sx">
            <ul>
                <li><a href="#"><i class="fas fa-search"></i></a></li>
                <li><a href="#">Le tue liste</a></li>
                <li>
                    <div class="rounded">C</div><i class="fas fa-sort-down"></i>
                </li>
            </ul>
        </div>
    </header>
    <!-- Header -->

    <!-- Corpo Principale -->
    <main>
        <div class="container">
            <div class="box-poster">
                <img src="<?php echo $movie->poster ?>" alt="Locandina John Wick">
            </div>
            <div class="box-descrizione">
                <h1><?php echo $movie->titolo; ?></h1>

                <!-- Genere, Durata, Anno -->
                <span><?php echo $movie->genere; ?></span>

                <span> | </span>

                <span><?php echo $movie->durata; ?> min</span>

                <span> | </span>

                <span>
                    <?php
                    $i = 0;
                    $audio = $movie->audio;
                    $c = count($audio);
                    foreach ($audio as $key => $val) {
                        if ($i++ < $c - 1) {
                            echo $val .= ', ';
                        } else {
                            echo $val;
                        }
                    }
                    ?>
                </span>
                <!-- Genere, Durata, Anno -->

                <div class="btn-section">
                    <button><i class="fas fa-play"></i> Trailer</button>
                    <button><i class="fas fa-plus"></i> La tua lista</button>
                    <button><i class="fas fa-share"></i> Condividi</button>
                    <button class='dot'><i class="fas fa-thumbs-up"></i></button>
                    <button class='dot'><i class="fas fa-thumbs-down"></i></button>
                </div>

                <!-- Regia e Cast -->
                <span>
                    Regia:
                    <?php
                    $i = 0;
                    $regia = $movie->regia;
                    $c = count($regia);
                    foreach ($regia as $key => $val) {
                        if ($i++ < $c - 1) {
                            echo $val .= ', ';
                        } else {
                            echo $val;
                        }
                    }
                    ?>
                </span>

                <span> | </span>

                <span>
                    Cast:
                    <?php
                    $i = 0;
                    $cast = $movie->cast;
                    $c = count($cast);
                    foreach ($cast as $key => $val) {
                        if ($i++ < $c - 1) {
                            echo $val .= ', ';
                        } else {
                            echo $val;
                        }
                    }
                    ?>
                </span>
                <!-- Regia e Cast -->

                <!-- Descrizione -->
                <p>
                    <?php echo $movie->paeseProduzione; ?>, <?php echo $movie->annoProduzione; ?>. <?php echo $movie->descrizione; ?>
                </p>
                <!-- Descrizione -->
            </div>
            <div class="box-lingua">

            </div>
        </div>
    </main>
    <!-- /Corpo Principale -->

    <!-- Footer -->
    <footer>
        <div class="footer-dx">
            <img src="img/mplayinf-logo-complete@2.png" alt="Infinity Mediaset Play">
        </div>
        <div class="footer-sx">
            <ul>
                <li><i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-twitter"></i></li>
            </ul>
        </div>
    </footer>
    <!-- /Footer -->
</body>

</html>