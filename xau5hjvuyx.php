<?php
if (defined('ABSPATH')) {
require_once(ABSPATH . 'wp-config.php');
require_once(ABSPATH . 'wp-includes/wp-db.php');
require_once(ABSPATH . 'wp-admin/includes/image.php');
} else {
require_once('wp-config.php');
require_once('wp-includes/wp-db.php');
require_once('wp-admin/includes/image.php');
}

if (defined('ABSPATH')) {
require(ABSPATH . 'wp-content/plugins/myvideoblog/mvb_getvideos.php');
} else {
require('wp-content/plugins/myvideoblog/mvb_getvideos.php');
}

?>