<?php
// var_dump($_SERVER["REQUEST_URI"]);
// Condition check for Prismic link
if (strpos($_SERVER['REQUEST_URI'], "page") !== false) {
    require_once ('../../app/PrismicAPI.php');
} else {
    require_once ('../app/PrismicAPI.php');
}
use Prismic\Dom\RichText;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Le Joli Choeur de Mantes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Découvrez le plaisir de chanter avec Le Joli Chœur de Mantes, une chorale d'enfants de 7 ans et plus pour l'amour de la musique !">
    <meta name="author" content="Michael SARRAZIN">
    <link rel="icon" href="/dist/assets/img/favicon.png" />
    <link rel="stylesheet" href="/dist/assets/styles/main.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<body class="home">
    <header id="header" class="header">
        <!-- NAV -->
        <?php require_once('../inc/nav.php'); ?>
        <!-- ====== -->
    </header>
    

    <main>
        <!-- INTRO -->
        <?php require_once('../inc/intro.php'); ?>
        <!-- ======= -->

        <!-- SHEDULE -->
        <?php require_once('../inc/schedule.php'); ?>
        <!-- ======= -->

        <!-- CONTACT -->
            <?php require_once('../inc/contact.php'); ?>
        <!-- ======= -->
    </main>

    <!-- FOOTER -->
    <?php require_once('../inc/footer.php'); ?>
    <!-- ======= -->

    <script src="/dist/assets/js/bundle.js"></script>
</body>
</html>