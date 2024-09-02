<?php
namespace Aihimel\CatalogModeForWoocommerce;

defined( 'ABSPATH' ) || exit;

final class CatalogModeForWoocommerce {
	private static CatalogModeForWoocommerce $instance;
	private static array $container = [];

	private function __construct() {}

	public static function get_instance( string $key = '' ) {
		if ( empty( self::$instance ) ) {
			self::$instance = new CatalogModeForWoocommerce();
		}
		if ( ! empty( $key) ) {
			if ( isset( self::$container[ $key ] ) ) {
				return self::$container[ $key ];
			} else {
				wp_trigger_error( __METHOD__, __( 'Object with key ' . $key . ' does not exist.', 'catalog-mode-for-woocommerce' ) );
			}
		} else {
			return self::$instance;
		}
		return false;
	}
}
