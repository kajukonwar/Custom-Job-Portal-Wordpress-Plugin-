<?php
?>
<form class="form-horizontal" id="cps_multireg_4">
<fieldset>

<div class="form-group">
  <label class="control-label" for="cn_is_happy_current_career">Are you happy With The Career You Are In?</label>
  <div> 
    <label class="radio-inline" for="cn_is_happy_current_career-1">
      <input type="radio" name="cn_is_happy_current_career" id="cn_is_happy_current_career-1" value="Yes">
      
    <span class="multireg_val_error"></span>
      Yes
    </label> 
    <label class="radio-inline" for="cn_is_happy_current_career-2">
      <input type="radio" name="cn_is_happy_current_career" id="cn_is_happy_current_career-2" value="No">
      No
    </label>

  </div>
</div>

</fieldset>
</form>


<?php

/**
 * The fourth multi reg form is split into parts
 * This file contains the initial part
 * based on conditions , other parts are loaded
 */


/*************************************************
**************************************************
THIS IS THE FIRST PART
***************************************************
*/

/*
<form class="form-horizontal" id="cps_multireg_4">
<fieldset>

<div class="form-group">
  <label class="control-label" for="cn_is_happy_current_career">Are you happy With The Career You Are In?</label>
  <div> 
    <label class="radio-inline" for="cn_is_happy_current_career-1">
      <input type="radio" name="cn_is_happy_current_career" id="cn_is_happy_current_career-1" value="1">
      Yes
    </label> 
    <label class="radio-inline" for="cn_is_happy_current_career-2">
      <input type="radio" name="cn_is_happy_current_career" id="cn_is_happy_current_career-2" value="2">
      No
    </label>
  </div>
</div>

</fieldset>
</form>
*/




/*******************************************
********************************************
THIS IS LOADED IF PREVIOUS ANSWER IS "YES"
********************************************
*/




/*******************************************
********************************************
THIS IS LOADED IF PREVIOUS ANSWER IS "NO"
********************************************
*/

/*

<div class="form-group">
  <label class="control-label" for="cn_wants_new_career">Would You Like A Career Shift?</label>
  <div> 
    <label class="radio-inline" for="cn_wants_new_career-1">
      <input type="radio" name="cn_wants_new_career" id="cn_wants_new_career-1" value="1">
      Yes
    </label> 
    <label class="radio-inline" for="cn_wants_new_career-2">
      <input type="radio" name="cn_wants_new_career" id="cn_wants_new_career-2" value="2">
      No
    </label>
  </div>
</div>

*/


/*****************************************************
******************************************************
THIS IS LOADED IF PREVIOUS ANSWER IS "YES"
******************************************************
*/

/*
<div class="form-group">
  <label class="control-label" for="cn_preferred_career_line">What Career Line Would You Like To Move To?</label>  
  <div>
  <input id="cn_preferred_career_line" name="cn_preferred_career_line" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_reg_btn4"></label>
  <div>
    <button id="cn_reg_btn4" name="cn_reg_btn4" class="btn btn-primary">Continue</button>
  </div>
</div>
*/

/*********************************************
**********************************************
THIS IS LOADED IF PREVIOUS ANSWER IS "NO"
**********************************************
*/

/*
<div class="form-group">
  <label class="control-label" for="cn_preferred_career_feature">What would you want that you don't have in your present job</label>
  <div>
    <select id="cn_preferred_career_feature" name="cn_preferred_career_feature" class="form-control" multiple="multiple">
      <option value="1">Sat and Sun off</option>
      <option value="2">Better Package</option>
      <option value="3">No Excessive Pressure</option>
      <option value="4">Ability to Make Decisions</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_reg_btn4"></label>
  <div>
    <button id="cn_reg_btn4" name="cn_reg_btn4" class="btn btn-primary">Continue</button>
  </div>
</div>
*/
?>