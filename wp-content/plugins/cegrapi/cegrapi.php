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

// TYPES in Submenu ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/event.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/schedule.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/registration.php';

// TYPES in Menu ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/management.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/settings.php';

// POSTMETA POST ************************************************
//include ABSPATH . '/wp-content/plugins/cegrapi/includes/postmeta-post.php';


// OBJECTS *************************************************
$event = new event();
$schedule = new schedule();
$registration = new registration();
$management = new management();

register_activation_hook(__FILE__, array(
    $event, 'activate',
    $schedule, 'activate',
    $registration, 'activate',
    $management, 'activate'
));
register_deactivation_hook(__FILE__, array(
    $event, 'deactivate',
    $schedule, 'deactivate',
    $registration, 'deactivate',
    $management, 'deactivate'    
));
