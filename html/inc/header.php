<?php
use Prismic\Dom\RichText;
?>

<header id="header" class="header">
    <h1> <?php echo RichText::asHtml($home[0]->data->title, $linkResolver); ?> </h1>
    <button><?php echo RichText::asHtml($home[0]->data->call_to_action, $linkResolver); ?></button>
</header>