<?php

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
    <title>Titre de la page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/dist/assets/img/favicon.ico" />
    <link rel="stylesheet" href="/dist/assets/styles/main.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<body class="home">
    <!-- Header -->
    <?php require_once('./inc/header.php'); ?>
    <!-- ======= -->

    <main>
        <div class="container">
            <!-- About -->
            <?php require_once('./inc/about.php'); ?>
            <!-- ======= -->
		</div>
            <!-- Separate -->
            <?php require_once('./inc/separate.php'); ?>
            <!-- ======= -->
        <div class="container">
            <!-- More -->
            <?php require_once('./inc/more.php'); ?>
            <!-- ======= -->

            <!-- Tab -->
            <?php require_once('./inc/tab.php'); ?>
            <!-- ======= -->
		</div>
    </main>

    <!-- modal player -->
    <footer id="footer" class="footer">
        <div class="container">
            Je suis le footer
        </div>
    </footer>

    <script src="/dist/assets/js/bundle.js"></script>
</body>
</html>