<?php
/**
 * Plugin Name: Catalog Mode for WooCommerce
 * Version: 1.0.0
 * Description: Manage vacation mode for your WooCommerce store
 * Author: Aftabul Islam
 * Author URI: https://profiles.wordpress.org/aihimel
 * Author Email: toaihimel@gmail.com
 * Text Domain: catalog-mode-for-woocommerce
 * License: GPv3-or-later
 */

use Aihimel\CatalogModeForWoocommerce\CatalogModeForWoocommerce;

defined( 'ABSPATH' ) || exit;

require_once 'vendor/autoload.php';

CatalogModeForWoocommerce::get_instance();
