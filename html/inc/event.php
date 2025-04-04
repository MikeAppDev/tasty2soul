<?php
use Prismic\Dom\RichText;
?>

<div id="event" class="event">
    <a target='_blank' href="https://my.weezevent.com/tasty-2-soul-brunch-karaoke-special-hiphop-soul-rnb">
    <?php
        foreach ($home[0]->data->eventone as $event) {

            $eventDate = new DateTime($event->date_event[0]->text);
            $currentDate = new DateTime();

            // Comparer les dates
            if ($eventDate >= $currentDate) {
                ?>
                <div class="event-item">
                    <div class="event-item-content">
                        <h2><?= $event->title_event[0]->text; ?></h2>
                        <p><?= $event->status_event[0]->text; ?></p>
                        <p><?= $event->date_event[0]->text; ?></p>
                        <p class="address"><?= $event->adress_event[0]->text; ?></p>
                        <p class="horaires"><?= $event->horaires_event[0]->text; ?></p>
                        <p><?= $event->description_event[0]->text; ?></p>
                    </div>
                </div>
                <?php
            } else {
                ?>
                    <h2>Restez connectés pour découvrir nos prochains événements !</h2>
                <?php
            }
        }
    ?>
    </a>
</div>
