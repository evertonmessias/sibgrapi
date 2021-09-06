<?php

/**
 * Plugin Name: SIBGRAPI Portal
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin SIBGRAPI Portal, include Event, Schedule, Management and Settings
 * Author: EvM.
 * Version: 1.0
 * Text Domain: SIBGRAPI Portal
 * Plugin SIBGRAPI Portal
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/functions.php';

// TYPES ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/event.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/schedule.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/registration.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/settings.php';

// POSTMETA POST ************************************************
//include ABSPATH . '/wp-content/plugins/cegrapi/includes/postmeta-post.php';


// OBJECTS *************************************************
$event = new event();
$schedule = new schedule();
$registration = new registration();

register_activation_hook(__FILE__, array(
    $event, 'activate',
    $schedule, 'activate',
    $registration, 'activate'
));
register_deactivation_hook(__FILE__, array(
    $event, 'deactivate',
    $schedule, 'deactivate',
    $registration, 'deactivate'    
));
