<?php

class Multireg_Db {


	private $_passed= false;

	private $_errors= array();

	/**
	 * Save multireg form data as buddypress user meta
	 * buddypress xprofile fields are created in WP backend
	 * We are just updating them here
	 * @return bool true on success , false on failure
	 */
	public function save($user_data=NULL, $form_step=NULL) {



		if(!empty($user_data && !empty( $form_step ))) {

			$multireg_xprofile_fields= cps_multireg_custom_xprofile($form_step);

			foreach($user_data as $field_name=>$field_value) {

    			 $current_user = wp_get_current_user();

				//update xprofile field data

    			 //check if inpur field from user data exists in predefined global array
    			 // this is used to prevent errors for the hidden fields whose purpose is only to identify form step number 
    			 if(array_key_exists($field_name, $multireg_xprofile_fields)) {


    			 	if(!xprofile_set_field_data($multireg_xprofile_fields[$field_name], $current_user->ID,  $field_value)) {


					$this->setErrors($field_name);
				  }


    			 }
			}


			if(empty( $this->errors() )) {

				$this->_passed= true;
			}
		}

		return $this;
	}


	/**
	 * 
	 */

	 public function passed() {

	 	return $this->_passed;
	 } 


	 /**
	  *
	  * 
	  */
	 public function errors() {

	 	return $this->_errors;
	 }

	 /**
	  *
	  * @param string $field_name form input field name
	  */

	 public function setErrors($field_name) {

	 	$this->_errors[]= $field_name;

	 }
}
