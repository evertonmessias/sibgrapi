<?php

/**
 * Plugin Name: CEGRAPI
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin CEGRAPI for SIBGRAPI site, include Schedule, Management and Settings
 * Author: EvM.
 * Version: 1.0
 * Text Domain: SIBGRAPI
 * Plugin CEGRAPI for SIBGRAPI site
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/functions.php';

// TYPES ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/management.php';
include ABSPATH . '/wp-content/plugins/cegrapi/includes/types/schedule.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/cegrapi/includes/settings.php';

// POSTMETA POST ************************************************
//include ABSPATH . '/wp-content/plugins/cegrapi/includes/postmeta-post.php';

// OBJECTS *************************************************
$schedule = new schedule();
$management = new management();

register_activation_hook(__FILE__, array(
    $schedule, 'activate',
    $management, 'activate'
));
register_deactivation_hook(__FILE__, array(
    $schedule, 'deactivate',
    $management, 'deactivate'
));
