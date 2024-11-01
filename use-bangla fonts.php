<?php
/**
 * Plugin Name: Use Bangla Fonts
 * Description: Bangla Font Collection for Gutenberg.
 * Author: osmansorkar
 * Author URI: http://fb.me/osmansorkar
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Bangla Font Gutenberg
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';