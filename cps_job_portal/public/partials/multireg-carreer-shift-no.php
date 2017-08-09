<?php
?>
<div class="form-group">
  <label class="control-label" for="cn_preferred_career_feature">What would you want that you dont have in your present job</label>
  <div>
    <select id="cn_preferred_career_feature" name="cn_preferred_career_feature[]" class="form-control" multiple="multiple">
      <option value="Sat and Sun off">Sat and Sun off</option>
      <option value="Better Package">Better Package</option>
      <option value="No Excessive Pressure">No Excessive Pressure</option>
      <option value="Ability to Make Decisions">Ability to Make Decisions</option>
    </select>

    <span class="multireg_val_error"></span>
    
  </div>
</div>

<?php
  //hidden input is added to identify which conditional fields are passed to validation
?>
<div class="form-group">
<input type="hidden" name="cps_reg_fourth_conditional" value="3">
</div>


<div class="form-group">
  <label class="control-label" for="cn_reg_btn4"></label>
  <div>
    <button id="cn_reg_btn4" name="cn_reg_btn4" class="btn btn-primary">Continue</button>
  </div>
</div>