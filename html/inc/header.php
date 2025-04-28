<?php
use Prismic\Dom\RichText;
?>

<header id="header" class="header">
    <?php echo RichText::asHtml($home[0]->data->title, $linkResolver); ?>
    <button><a href="<?= $home[0]->data->link_action->url ?? '#'; ?>" target='_blank'><?php echo RichText::asHtml($home[0]->data->call_to_action, $linkResolver); ?></a></button>
</header>