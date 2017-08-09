<?php
/**
 * Globally-accessible functions
 *
 * @since 		1.0.0
 *
 */

function cps_multireg_custom_xprofile($form_step) {



	//custom multireg input name to BP xprofile field name relationship
    $multireg_xprofile= array(

    							'step2'=> array( 


									'cn_desired_job_type'=> 'Desired Job Type',
									'cn_present_industry'=>'Present Industry',
									'cn_functional_area'=>'Functional Area',
									'cn_experience'=> 'Total Experience',
									'cn_current_salary'=> 'Present Salary' ,
									'cn_current_salary_type'=> 'Salary Type',

									'cn_expected_salary'=> 'Expected package For a New Role'
    								) ,


    							'step3'=> array( 

    								'cn_profile_headline'=> 'Profile Headline',
									'cn_skills'=>'Skills',
									'cn_latest_edu'=> 'Latest Education',
									'cn_college'=> 'College',
									'cn_grad_year'=> 'Year'
    								),
    							'step4'=> array( 

    								'cn_is_happy_current_career'=> 'Are you happy With The Career You Are In?',

									'cn_wants_new_career'=> 'Would You Like A Career Shift?',

									'cn_preferred_career_line'=> 'What Career Line Would You Like To Move To',

									'cn_preferred_career_feature'=>"What would you want that you dont have in your present job"
    								)

								);

    	   $step="step".$form_step;

    return $multireg_xprofile[$step];
}



function coffeepost_get_template($name, $location) {

	
	$template = plugin_dir_path( dirname( __FILE__ ) ) . 'public/'.$location.'/' . $name . '.php';
	return $template;
}