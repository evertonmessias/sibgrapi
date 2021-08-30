<?php

/**
 * Plugin Name: SIBGRAPI
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin for SIBGRAPI site, include Schedule and Settings
 * Author: EvM.
 * Version: 1.0
 * Text Domain: sibgrapi
 * Plugin for SIBGRAPI site
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

// CLASS ************************************************
include ABSPATH . '/wp-content/plugins/sibgrapi/includes/class.php';

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/sibgrapi/includes/functions.php';

// POSTMETA ************************************************
include ABSPATH . '/wp-content/plugins/sibgrapi/includes/postmeta_schedule.php';
//include ABSPATH . '/wp-content/plugins/sibgrapi/includes/postmeta_post.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/sibgrapi/includes/settings.php';

// ABOUT ************************************************
include ABSPATH . '/wp-content/plugins/sibgrapi/includes/about.php';


// OBJETO *************************************************
if (class_exists('sibgrapi')) {
	$ag = new sibgrapi();
	register_activation_hook(__FILE__, array($ag, 'activate'));
	register_deactivation_hook(__FILE__, array($ag, 'deactivate'));
}
