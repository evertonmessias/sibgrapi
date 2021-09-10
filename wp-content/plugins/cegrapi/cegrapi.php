<?php

/**
 * Plugin Name: SIBGRAPI
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin SIBGRAPI, include Event, Schedule, Management and Settings
 * Author: EvM.
 * Version: 1.0
 * Text Domain: SIBGRAPI
 * Plugin SIBGRAPI
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/functions.php';

// TYPES ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/event.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/committee.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/management.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/registration.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/schedule.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/settings.php';

// POSTMETA POST ************************************************
//include ABSPATH . '/wp-content/plugins/cegrapi/includes/postmeta-post.php';


// OBJECTS *************************************************
$event = new event();
$committee = new committee();
$management = new management();
$schedule = new schedule();
$registration = new registration();


register_activation_hook(__FILE__, array(
    $event, 'activate',
    $committee, 'activate',
    $management, 'activate',
    $schedule, 'activate',
    $registration, 'activate'    
));

register_deactivation_hook(__FILE__, array(
    $event, 'deactivate',
    $committee, 'deactivate',
    $management, 'deactivate',
    $schedule, 'deactivate',
    $registration, 'deactivate'        
));
