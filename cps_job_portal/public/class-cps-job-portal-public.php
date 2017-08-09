<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       www.coffeepost.in
 * @since      1.0.0
 *
 * @package    Cps_Job_Portal
 * @subpackage Cps_Job_Portal/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cps_Job_Portal
 * @subpackage Cps_Job_Portal/public
 * @author     Kaju Konwar <kaju.k2@gmail.com>
 */
class Cps_Job_Portal_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
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
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cps_Job_Portal_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cps_Job_Portal_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cps-job-portal-public.css', array(), $this->version, 'all' );
		
		//multistep registration
		wp_enqueue_style( 'cps-job-portal-multi-reg', plugin_dir_url( __FILE__ ) . 'css/multistep-reg.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cps_Job_Portal_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cps_Job_Portal_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cps-job-portal-public.js', array( 'jquery' ), $this->version, true );

		//multi step registration form

		wp_enqueue_script( 'cps-job-portal-multi-reg', plugin_dir_url( __FILE__ ) . 'js/multistep-reg.js', array( 'jquery' ), $this->version, true );

		wp_localize_script( 'cps-job-portal-multi-reg', 'multi-reg-ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ));


	}

	/**
	 * Register the shortcodes 
	 * @since 1.0.0
	 */

	public function register_shortcodes() {

		add_shortcode( 'cps_multi_reg', array( $this, 'cps_multistep_reg' ) );

		add_shortcode( 'cps_reg_2', array( $this, 'cps_reg_Second' ) );
		add_shortcode( 'cps_reg_3', array( $this, 'cps_reg_Third' ) );
		add_shortcode( 'cps_reg_4', array( $this, 'cps_reg_Fourth' ) );
	}


	/**
	 * Process shortcode cps_multi_reg
	 * Checks which step/template to load by 
	 checking the BP xprofile fields
	 */

	public function cps_multistep_reg() {
		
    	$current_user = wp_get_current_user();

    	//check if second step is completed
    	foreach(cps_multireg_custom_xprofile('2') as $field_name=> $field_value) {

    		$cps_bp_field= xprofile_get_field_data( $field_value, $current_user->ID );

    		if(empty( $cps_bp_field )) {

    			return $this->show_multireg_second();

    		}
    	}

    	//check if third step is completed
    	foreach(cps_multireg_custom_xprofile('3') as $field_name=> $field_value) {

    		$cps_bp_field= xprofile_get_field_data( $field_value, $current_user->ID );

    		if(empty( $cps_bp_field )) {

    			return $this->show_multireg_third();
    		}
    	}



    	//all completed

    	
		
	}


	/**
	 * Process shortcode cps_reg_2
	 * @since 1.0.0
	 */
	public function cps_reg_Second() {

		return $this->show_multireg_second();
		
	}


	/**
	 * Process shortcode cps_reg_3
	 * @since 1.0.0
	 */
	public function cps_reg_Third() {
		return $this->show_multireg_third();
	}

	/**
	 * Process shortcode cps_reg_4
	 * @since 1.0.0
	 */
	public function cps_reg_Fourth() {
		return $this->show_multireg_fourth();
	}

	/**
	 * Show multi step registration form step 2
	 */

	private function show_multireg_second() {
		ob_start();

		include coffeepost_get_template( 'cps-reg-second', 'templates' );

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}

	/**
	 * Show multi step registration form step 3
	 */

	private function show_multireg_third() {
		ob_start();

		include coffeepost_get_template( 'cps-reg-third', 'templates' );

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}

	/**
	 * Show multi step registration form step 4
	 */

	private function show_multireg_fourth() {
		ob_start();

		include coffeepost_get_template( 'cps-reg-fourth', 'templates' );

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}


	/**
	 * Show html on multi step registration complete tion
	 */

	private function show_multireg_complete() {
		ob_start();

		include coffeepost_get_template( 'cps-reg-complete', 'templates' );

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}


	/**
	 * Displays multireg form html
	 * 
	 */

	public function cps_multireg_show_template() {

		switch($_POST['current_form_id']) {

			case 2:

				echo $this->show_multireg_third();

				break;

			case 3:
				echo $this->show_multireg_fourth();
				break;

			case 4:

				echo $this->show_multireg_complete();
			
				break;

			default:

		}

		die();
	}


	/**
	 * Displays multireg conditional form html
	 * 
	 */

	public function cps_multireg_show_conditional_template($name) {

		ob_start();

		include coffeepost_get_template( $name, 'partials' );

		$output = ob_get_contents();

		ob_end_clean();

		return $output;
	}

    
    /**
	 * process multireg form conditional field selection
	 * 
	 */

	public function cps_multireg_process_conditional() {

	
		$field_value=$_POST['value'];

		switch($_POST['name']) {

			case 'cn_is_happy_current_career':
				//answer given is -yes
				if($field_value== "Yes") {

					echo  $this->cps_multireg_show_conditional_template('multireg-carreer-happy');
				}

				//answer given is --no
				if($field_value== "No") {
					echo  $this->cps_multireg_show_conditional_template('multireg-carreer-unhappy');
				}
				
				break;

			case 'cn_wants_new_career':

				//answer given is -yes
				if($field_value== "Yes") {

					echo  $this->cps_multireg_show_conditional_template('multireg-carreer-shift-yes');
				}

				//answer given is --no
				if($field_value== "No") {
					echo  $this->cps_multireg_show_conditional_template('multireg-carreer-shift-no');
				}
				
				break;

			default:

		}
		die();
	}


	/**
	 * Process multi step registration ajax requests
	 */

	public function cps_process_multireg() {

		parse_str($_POST['data'], $f_data);
	
		$validate=new Multireg_Validate();
				
		if($validate->validate($f_data,$_POST['formId'])->passed() ) {

			//$response= array('status'=>'pass');

			//save to BP and show next forms
			
			$multireg_db=new Multireg_Db();

			if($multireg_db->save($f_data, $_POST['formId'])->passed()) {

				$response= array('status'=>'pass');
			} else {

				$error_fields = $multireg_db->errors();

				$response= array('status'=> 'error', 'fields'=> $error_fields);

			}
			
			

			echo json_encode($response);
					
		} else {

			//show errors
			$response=array('status'=>'fail', 'messages'=>$validate->errors());

			echo json_encode($response);
		}
		
		die();

	}

}
