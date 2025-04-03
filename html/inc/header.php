<?php
use Prismic\Dom\RichText;
?>

<header id="header" class="header">
    <?php echo RichText::asHtml($home[0]->data->title, $linkResolver); ?>
    <button><a href="#event"><?php echo RichText::asHtml($home[0]->data->call_to_action, $linkResolver); ?></a></button>
</header>