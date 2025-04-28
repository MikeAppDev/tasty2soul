<?php
use Prismic\Dom\RichText;
?>

<div id="event" class="event">
    <?php
    $events = array_reverse($home[0]->data->eventone);
    $eventDisplayed = false;

    foreach ($events as $event) {
        $eventDate = new DateTime($event->date_event[0]->text);
        $currentDate = new DateTime();

        if ($eventDate >= $currentDate) {
            $eventDisplayed = true;
            ?>
            <a target="_blank" href="<?= $event->link_event->url ?? '#'; ?>">
                <div class="event-item">
                    <div class="event-item-content">
                        <?php if (!empty($event->img_event->url)) : ?>
                            <img src="<?= $event->img_event->url; ?>" alt="<?= $event->img_event->alt ?? ''; ?>">
                        <?php endif; ?>

                        <?php if (!empty($event->status_event[0]->text)) : ?>
                            <p><?= $event->status_event[0]->text; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($event->date_event[0]->text)) : ?>
                            <p><?= $event->date_event[0]->text; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($event->horaires_event[0]->text)) : ?>
                            <p class="horaires"><?= $event->horaires_event[0]->text; ?></p>
                        <?php endif; ?>

                        <?php if (!empty($event->description_event[0]->text)) : ?>
                            <p><?= $event->description_event[0]->text; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
            <?php
        }
    }

    if (!$eventDisplayed) {
        ?>
        <h2>Restez connectés pour découvrir nos prochains événements !</h2>
        <?php
    }
    ?>
</div>
