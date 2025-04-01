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
        <section class="intro">
            <div class="container">
                <div class="intro-content">
                    <h1><?= $galerie->galerie_title[0]->text ?></h1>
                    <h2><?= $galerie->galerie_desc[0]->text ?></h2>
                    <div class="desc">
                        <p><?= $galerie->galerie_desc_2[0]->text ?></p>
                    </div>
                </div>
            </div>
        </section>

    <section class="video">
        <div class="container">
            <div class="video-content">
                <h2><?= $galerie->video_title[0]->text ?></h2>
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <?php foreach($galerie->video_card as $i => $card) { ?>
                            <li class="glide__slide video-item">
                                <video src="<?= $card->video_item->url ?>" ></video>
                                <p><?= $card->video_desc[0]->text ?></p>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><</button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section class="photo" id="photo">
            <div class="container">
                <div class="photo-content">
                    <div class="photo-inner">
                        <div class="photo-block">
                            <div class="photo-block-inner">
                                <h2>Photo</h2>
                                <div class="photo-block-inner-content">
                                    <div class="photo-grid">
                                        <?php
                                        $item_per_page = 6;
                                        $total_items = count($galerie->photo_card);
                                        $total_pages = ceil($total_items / $item_per_page);

                                        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                        $start_index = ($current_page - 1) * $item_per_page;
                                        $end_index = $start_index + $item_per_page;

                                        for ($i = $start_index; $i < $end_index && $i < $total_items; $i++) {
                                            $card = $galerie->photo_card[$i];
                                        ?>
                                        
                                        <div class="photo-grid-item">
                                            <img class="photo-img" src="<?= $card->image->url ?>" alt="<?= $card->image->alt ?>">
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="pagination">
                                    <?php
                                        // Afficher les liens de pagination
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            if ($i == $current_page) {
                                                echo "<span class='current'>$i</span>";
                                            } else {
                                                echo "<a href='?page=$i#photo'>$i</a>";
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php require_once('../inc/footer.php'); ?>
    <!-- ======= -->

    
    <!-- Glide -->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://unpkg.com/@glidejs/glide"></script>
    <script src="https://unpkg.com/@glidejs/glide/dist/glide.min.js"></script>

    <script>
    new Glide('.glide',{
            autoplay: 10000,
            perView: 2,
            type: 'carousel',
            perTouch: 1,
            perSwipe: '|',
            rewind: false,
            breakpoints:{
                760: {
                    perView: 1,
                    perSwipe: '|',
                    perTouch: 1,
                    type: 'carousel',
                }
            }
        }).mount()
    </script>
    <!-- ======= -->

    <script src="/dist/assets/js/bundle.js"></script>
</body>
</html>