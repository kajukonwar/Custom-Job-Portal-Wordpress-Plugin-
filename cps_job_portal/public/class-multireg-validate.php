<?php
class Multireg_Validate {


	private $_passed= false;

	private $_errors = array();

	//validation rules for second multireg form
	private $_rules_second= array(
							'cn_desired_job_type'=> array(
								'requirred'=>true
								),
							'cn_present_industry'=> array(
								'requirred'=>true
								),
							'cn_functional_area'=>array (
								'requirred'=>true
								),
							'cn_experience'=> array(
								'requirred'=>true
								),
							'cn_current_salary'=> array(

								'requirred'=> true
								),
							'cn_current_salary_type'=> array(
								'requirred'=>true
								),
							'cn_expected_salary'=> array(
								'requirred'=> true
								)
							);


	//validation rules for third multireg form
	private $_rules_third = array(
							'cn_profile_headline'=> array(
								'requirred'=>true
								),
							'cn_skills'=> array(
								'requirred'=>true
								),
							'cn_latest_edu'=> array(
								'requirred'=> true
								),
							'cn_college'=> array(
								'requirred'=> true
								),
							'cn_grad_year'=> array(
								'requirred'=>true
								)

							);


	/**
	 *validation rules for fourth form. It has conditionals , so, rules are divided into parts for each condition
	 */


	/**
	 *  when  "cn_is_happy_current_career" is "yes"
	 */
	private $_rules_fourth_conditional1 = array(
							'cn_is_happy_current_career'=> array(

								'requirred'=> true
								)

							);

	/**
	 *  when  "cn_is_happy_current_career" is "no"
	    AND
	 *  "cn_wants_new_career" is "yes"
	 */
	private $_rules_fourth_conditional2 = array(
							'cn_is_happy_current_career'=> array(

								'requirred'=> true
								),
							'cn_wants_new_career'=> array(

								'requirred'=> true
								),
							'cn_preferred_career_line'=> array(
								'requirred'=>true
								)
							);

	/**
	 *  when  "cn_is_happy_current_career" is "no"
	    AND
	 *  "cn_wants_new_career" is "no"
	 */

	private $_rules_fourth_conditional3 = array(
							'cn_is_happy_current_career'=> array(

								'requirred'=> true
								),
							'cn_wants_new_career'=> array(

								'requirred'=> true
								),
							'cn_preferred_career_feature'=> array(
								'requirred'=> true
								)

							);


	/**
	 * Checks if input is empty
	 * @param string
	 * @return bool  true if empty, false on non-empty
	 */

	private function is_multireg_empty($input) {

		if(empty($input)) {
			return true;
		}

		return false;
	}

	/**
	 * Add the validation error messages to an array
	 */

	private function addErrors( $input_field, $message) {

		$this->_errors[$input_field] = $message;
	}


	/**
	 * Returns all validation error messages
	 */
	public function errors() {

   		return $this->_errors;
    }

    /**
     * returns validation status
     */
    
   public function passed() {

   	 	return $this->_passed;
    }



	/**
	 * Validate multi reg  form
	 */
	public function validate($data=null, $form_id=null) {


		if( !empty( $data )&& !empty($form_id) ) {

			if( $form_id==2) {

				$validation_rules= $this->_rules_second;
			}

			if( $form_id==3) {

				$validation_rules= $this->_rules_third;
			}

			if( $form_id==4) {

				//we set a hidden input in conditional templates

				// Then based on that value, we set validation rules for different conditional inputs

				// Without that, we will have validation errors, because, the validation rules array will be expecting all the inputs and not conditional inputs for fourth form


				switch($data['cps_reg_fourth_conditional']) {

					case '1':

						$validation_rules= $this->_rules_fourth_conditional1;

						break;

					case '2':
						$validation_rules= $this->_rules_fourth_conditional2;

						break;

					case '3':
						$validation_rules= $this->_rules_fourth_conditional3;

						break;

					default:

				}

			}// end if- form_id=4


			//loop through rules for each input field name in validation array

			// we don't have to loop through input data array, because, only validation array contents has be checked again user input

			foreach($validation_rules as $rule_input=>$rules) {


				foreach($rules as $rule_name=>$rule_value) {

					switch( $rule_name) {

						case 'requirred':

							if($rule_value) {

								if(!isset($data[$rule_input])) {

									$this->addErrors($rule_input,"This is requirred");
								} else {

									if($this->is_multireg_empty($data[$rule_input])) {

										$this->addErrors($rule_input,"This is requirred");
									}

								}
								
							}

							break;

						case 'min':

							break;

						default:
					}//end switch


				}//inner foreach
			}//outer foreach

			//validation success
			if(empty($this->_errors ) ) {

				$this->_passed=true;
			}
			
		}//end if not empty user data

		return $this;
	}//function validate()

}