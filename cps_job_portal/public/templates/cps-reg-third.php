<?php
?>
<form class="form-horizontal" id="cps_multireg_3">
<fieldset>

<div class="form-group">
  <label class="control-label" for="cn_profile_headline">Profile Headline</label>  
  <div>
  <input id="cn_profile_headline" name="cn_profile_headline" type="text" placeholder="" class="form-control input-md">

  <span class="multireg_val_error"></span>
    
  </div>
</div>

<div class="form-group">
  <label class="control-label" for="cn_skills">Skills</label>
  <div>
    <select id="cn_skills" name="cn_skills[]" class="form-control" multiple="multiple">

      <option value="Web Development">Web Development</option>
      <option value="Web Designing">Web Designing
</option>
    </select>
    <span class="multireg_val_error"></span>
  </div>
</div>

<div class="form-group">
  <label class="control-label">Education</label>

  <div class="input-group">  

  <div class="col-sm-4">

  <label class="control-label" for="cn_latest_edu">Qualification</label>
  <input id="cn_latest_edu" name="cn_latest_edu" type="text" placeholder="e.g. B.E." class="form-control input-md">
  <span class="multireg_val_error"></span>   
  </div>

  <div class="col-sm-4">

  <label class="control-label" for="cn_college">College</label>
  <input id="cn_college" name="cn_college" type="text" placeholder="" class="form-control input-md"> 
  <span class="multireg_val_error"></span> 
  </div>

  <div class="col-sm-4">
  <label class="control-label" for="cn_grad_year">Year</label>
  <input id="cn_grad_year" name="cn_grad_year" type="number"  min="1900" placeholder="e.g. 1900" class="form-control input-md">  
  <span class="multireg_val_error"></span> 
  </div>

  </div>

</div>

<div class="form-group">
  <label class="control-label" for="cn_reg_btn3"></label>
  <div>
    <button id="cn_reg_btn3" name="cn_reg_btn3" class="btn btn-primary">Continue</button>
  </div>
</div>

</fieldset>
</form>
