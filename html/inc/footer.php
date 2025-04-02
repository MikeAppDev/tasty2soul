<?php
use Prismic\Dom\RichText;
?>

<footer id="footer" class="footer">
    <?php echo RichText::asHtml($home[0]->data->title_footer, $linkResolver); ?>
    <?php echo RichText::asHtml($home[0]->data->descriptif_footer, $linkResolver); ?>
    <?php echo RichText::asHtml($home[0]->data->heure_footer, $linkResolver); ?>

    <div class="reseaux-container">
        <?php foreach ($home[0]->data->reseau as $reseau) { ?>
            <div class="reseau-item">
                <div class="reseau-item-content">
                    <img src="<?= $reseau->img_reseau->url; ?>" alt="<?= $reseau->img_reseau->alt; ?>">
                </div>
            </div>
        <?php } ?>
    </div>
</footer>
