<?php
/**
 * Plugin Name: Catalogs for WooCommerce
 * Version: 1.0.0
 * Description: Manage vacation mode for your WooCommerce store
 * Author: Aftabul Islam
 * Author URI: https://profiles.wordpress.org/aihimel
 * Author Email: toaihimel@gmail.com
 * Text Domain: catalogs-for-woocommerce
 * License: GPv3-or-later
 * Requires Plugins: woocommerce
 */

use Aihimel\CatalogForWoocommerce\CatalogForWoocommerce;

defined( 'ABSPATH' ) || exit;

require_once 'vendor/autoload.php';

CatalogForWoocommerce::get_instance();
