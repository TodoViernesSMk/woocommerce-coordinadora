<?php namespace WCCoordinadora;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

include_once __DIR__ . '/lib/autoload.php';

/**
 * Plugin Name: Woocommerce Coordinadora
 * Plugin URI: https://dazzet.co
 * Description: Package tracking from Coordinadora Mercantil in Colombia
 * Version: 0.1
 * Author: Mario Yepes <mario.yepes@dazzet.co>
 */


// Initialize Woocommerce Settings page
Wordpress\Settings::instance()->start();

// Initialize Order meta box
Wordpress\Order::instance()->start();


