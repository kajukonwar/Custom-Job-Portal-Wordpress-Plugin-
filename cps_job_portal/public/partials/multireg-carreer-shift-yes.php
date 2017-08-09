<?php
?>
<div class="form-group">
  <label class="control-label" for="cn_preferred_career_line">What Career Line Would You Like To Move To?</label>  
  <div>
  <input id="cn_preferred_career_line" name="cn_preferred_career_line" type="text" placeholder="" class="form-control input-md">

  <span class="multireg_val_error"></span>
    
  </div>
</div>

<?php
	//hidden input is added to identify which conditional fields are passed to validation
?>
<div class="form-group">
<input type="hidden" name="cps_reg_fourth_conditional" value="2">
</div>


<div class="form-group">
  <label class="control-label" for="cn_reg_btn4"></label>
  <div>
    <button id="cn_reg_btn4" name="cn_reg_btn4" class="btn btn-primary">Continue</button>
  </div>
</div>