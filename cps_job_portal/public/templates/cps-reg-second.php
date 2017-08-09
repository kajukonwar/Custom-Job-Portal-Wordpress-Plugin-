<?php
?>

<form class="form-horizontal" id="cps_multireg_2">
<fieldset>

<div class="form-group">
  <label class="control-label" for="cn_desired_job_type">Desired Job Type</label>
  <div> 
    <label class="radio-inline" for="cn_desired_job_type-1">
      <input type="radio" name="cn_desired_job_type" id="cn_desired_job_type-1" value="Permanent">
      Permanent
    </label> 
    <label class="radio-inline" for="cn_desired_job_type-2">
      <input type="radio" name="cn_desired_job_type" id="cn_desired_job_type-2" value="Temporary">
      
      Temporary
    </label> 
    <label class="radio-inline" for="cn_desired_job_type-3">
      <input type="radio" name="cn_desired_job_type" id="cn_desired_job_type-3" value="Both">
      <span class="multireg_val_error"></span>
      Both
    </label>
    
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_present_industry">Present Industry</label>
  <div>
    <select id="cn_present_industry" name="cn_present_industry" class="form-control">
      <option value="0">Please select present industry</option>
      <option value="IT">IT</option>
      <option value="Banking">Banking</option>
    </select>
    <span class="multireg_val_error"></span>
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_functional_area">Functional Area</label>
  <div>
    <select id="cn_functional_area" name="cn_functional_area" class="form-control">
      <option value="0">Please select functional area</option>
      <option value="HR">HR</option>
      <option value="FInance">FInance</option>
    </select>
    <span class="multireg_val_error"></span>
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_experience">Total Experience</label>
  <div>
    <select id="cn_experience" name="cn_experience" class="form-control">
      <option value="0">Please select total experience</option>
      <option value="1 Year">1 Year</option>
      <option value="2 years">2 years</option>
    </select>
    <span class="multireg_val_error"></span>
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_current_salary">Present  Salary</label> 
  <div class="input-group"> 
  <div class="col-sm-8">
  
  <input id="cn_current_salary" name="cn_current_salary" type="number" min="0" placeholder="Enter Amount" class="form-control input-md">
  <span class="multireg_val_error"></span>
    
  </div>

  <div class="col-sm-4">
    
    <select id="cn_current_salary_type" name="cn_current_salary_type" class="form-control">
      <option value="0">Please select</option>
      <option value="Annualy">Annualy</option>
      <option value="Monthly">Monthly</option>
    </select>
    <span class="multireg_val_error"></span>

  </div>
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_expected_salary">Expected package For a New Role</label>  
  <div>
  
  <input id="cn_expected_salary" name="cn_expected_salary" type="number" min="0" placeholder="Enter Amount" class="form-control input-md">

  <span class="multireg_val_error"></span>
    
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_reg_btn2"></label>
  <div>
    <button id="cn_reg_btn2" name="cn_reg_btn2" class="btn btn-primary">Continue</button>
  </div>
</div>

</fieldset>
</form>
