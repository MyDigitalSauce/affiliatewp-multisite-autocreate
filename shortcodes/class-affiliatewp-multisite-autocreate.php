<?php
/**
 *
 * @author     Taylor Digital <support@taylordigital.com>
 */
class AffiliateWP_Multisite_AutoCreate_Shortcodes {

	private $plugin_name;
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = '1.0.6';

		add_shortcode( 'affiliatewp_tester', array($this, 'tester_shortcode_func') );

	}

	public function affiliatewp_tester_shortcode_func( $atts ) {

		// wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . '../public/css/public.css', array( ), $this->version, 'all' );

	  ob_start();
		?>
		<div>
			affiliatewp_tester_shortcode_func test
		</div>
		<?php
	  $output_string = ob_get_contents();
	  ob_get_clean();

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . '../public/js/public.js', array( 'jquery' ), $this->version, false );
		

	  return $output_string;

	}

}