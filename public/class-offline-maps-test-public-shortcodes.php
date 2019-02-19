<?php

class Offline_Maps_Test_Public_Shortcodes {

	/**
	 * Undocumented variable
	 *
	 * @var [type]
	 */
	private $options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->options = get_option( 'offline-maps-test_options' );
		$this::add_shortocdes();
	}

	/**
	 * Undocumented function
	 *
	 * @since    1.0.0
	 */
	public function add_shortocdes() {

		add_shortcode( 'omt_stub', array( $this, 'omt_stub' ) );

    }

    /**
	 * Undocumented function
	 * 
	 * @since    1.0.0
	 *
	 * @param [type] $atts
	 * @return void
	 */
	public function omt_stub( $atts ){
		$atts = shortcode_atts(
            array(),
			$atts,
			'omt_stub'
		);

		ob_start();
		?>

		    <span><?= $this->options['stub'] ?></span>

		<?php
		return ob_get_clean();
    }
    
}