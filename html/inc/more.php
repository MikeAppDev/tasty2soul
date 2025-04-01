<?php
use Prismic\Dom\RichText;
?>

<div id="more" class="more">
    <img src="/dist/assets/img/boisson01.jpg" alt="more">
    <div class="more-content">
        <?php echo RichText::asHtml($home[0]->data->title_more, $linkResolver); ?>
        <div class="description">
            <?php echo RichText::asHtml($home[0]->data->description_1_more, $linkResolver); ?>
        </div>
        <?php echo RichText::asHtml($home[0]->data->description_2_more, $linkResolver); ?>
        <?php echo RichText::asHtml($home[0]->data->description_3_more, $linkResolver); ?>


    </div>
</div>