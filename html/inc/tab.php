<?php
use Prismic\Dom\RichText;
?>

<div id="tab" class="tab">
    <div class="tab-content">
        <?php foreach ($home[0]->data->tabone as $tab) { ?>
            <div class="tab-item">
                <div class="tab-item-content">
                    <img src="<?= $tab->img_tabone->url; ?>" alt="<?= $tab->img_tabone[0]->alt; ?>">
                    <h2><?php echo $tab->title_tabone[0]->text; ?></h2>
                    <p><?php echo $tab->descriptif_tabone[0]->text; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

