<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget. 
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory 
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in 
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @return string
 *
 * @package TribeEventsCalendar
 * @since  2.1
 * @author Modern Tribe Inc.
 *
 */
?>
<li>
    <div class="agendaLeftBox">
        <div class="agendaDag"><?php echo tribe_get_start_date(null, false, "d"); ?></div>
        <div class="agendaMaand"><?php echo tribe_get_start_date(null, false, "M"); ?></div>
    </div>
    <div class="agendaRightBox">
        <h4 class="entry-title">
            <a href="<?php echo tribe_get_event_link(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h4>
        <div class="agendaTijd">
            <?php
                echo tribe_get_start_date(null, false, "H:i");
                echo " - ";
                echo tribe_get_end_date(null, false, "H:i");
            ?>
        </div>
    </div>
</li>
