<?php

/**
 * Plugin Name: SIBGRAPI PORTAL
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin SIBGRAPI PORTAL, include Event, Schedule, Management and Settings
 * Author: EvM.
 * Version: 1.0
 * Text Domain: SIBGRAPI PORTAL
 * Plugin SIBGRAPI PORTAL
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

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/settings.php';

// POSTMETA POST ************************************************
//include ABSPATH . '/wp-content/plugins/cegrapi/includes/postmeta-post.php';


// OBJECTS *************************************************
$event = new event();
$schedule = new schedule();
//*************************************************************CRIAR REGISTRATION AQUI */

register_activation_hook(__FILE__, array(
    $event, 'activate',
    $schedule, 'activate'    
));
register_deactivation_hook(__FILE__, array(
    $event, 'deactivate',
    $schedule, 'deactivate'    
));
