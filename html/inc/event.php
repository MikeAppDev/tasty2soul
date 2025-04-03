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
                        <h2><?php echo $event->title_event[0]->text; ?></h2>
                        <p><?php echo $event->status_event[0]->text; ?></p>
                        <p><?php echo $event->date_event[0]->text; ?></p>
                        <p><?php echo $event->description_event[0]->text; ?></p>
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