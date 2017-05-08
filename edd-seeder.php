<?php
/**
 * Plugin Name: EDD Seeder
 *
 */

// don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

require_once 'vendor/autoload.php';


class EDD_Seeder{
	private $faker;
	private $order_count;
	private $customer_count;
	private $product_count;
	private $coupon_count;




	public static function init() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}



	function __construct() {
		$this->order_count = 20;
		$this->customer_count = 20;
		$this->product_count = 20;
		$this->coupon_count = 5;

		$this->faker = Faker\Factory::create();


//		$this->includes();

		add_action('admin_menu', [$this, 'register_settings_page']);
	}



	public function register_settings_page() {
		add_submenu_page(
			'tools.php',   //or 'options.php'
			'EDD Seeder',
			'EDD Seeder',
			'manage_options',
			'edd-seeder',
			[$this, 'edd_seeder_settings_page_callback']
        );
	}


	private function includes(){
		require_once __DIR__ . '/includes/class-customers-seeder.php';
		require_once __DIR__ . '/includes/class-product-seeder.php';
		require_once __DIR__ . '/includes/class-order-seeder.php';
		require_once __DIR__ . '/includes/class-coupon-seeder.php';

	}

	public function edd_seeder_settings_page_callback(){
		echo '<div class="wrap">';
			echo "<h2>EDD Seeder</h2>";
		require_once __DIR__ . '/includes/tools-page.php';
		echo '</div>';

	}




}



function edd_seeder() {
	return EDD_Seeder::init();
}

edd_seeder();