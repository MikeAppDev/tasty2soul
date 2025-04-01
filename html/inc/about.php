<?php
use Prismic\Dom\RichText;
?>

<div id="about" class="about">
     <?php echo RichText::asHtml($home[0]->data->title_about, $linkResolver); ?>
    <?php echo RichText::asHtml($home[0]->data->descriptif_about, $linkResolver); ?>
</div>