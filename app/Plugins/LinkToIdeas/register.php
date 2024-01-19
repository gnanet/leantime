<?php

/**
 * LinkToIdeas
 *
 * Register Events here
 */

use Leantime\Core\Events;

Events::add_event_listener(
    //Register event listener
    "leantime.core.template.tpl.dashboard.home.afterWelcomeMessage",
    //Create function for the event
    function ($payload) {
        // code here
        echo"<div class='LinkToIdeas' style='margin-bottom:20px;'><br />";
        echo "<a href='/ideas/showBoards'><h1>Weiter zu den Ideen</h1></a>";
        echo "</div>";
    },
    4
);
