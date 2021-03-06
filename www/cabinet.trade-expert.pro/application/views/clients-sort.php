<div class="row">
    <div class="span4">
    	<a href="/clients/newclient.html" class="btn btn-success"><i class="icon-white icon-user"></i> <?php echo lang('btnnewClient');?></a>
		
		<form class="form-horizontal" action="/clients/sort/" method="post">
<fieldset>
	<legend>Filters</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Family');?></label>
  <div class="controls">
    <input id="familia" name="familia" type="text" value="<?php echo $name;?>" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?></label>
  <div class="controls">
    <input id="tel" name="tel" type="text" value="<?php echo $tel;?>" class="input-medium">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('Ofis');?></label>
  <div class="controls">
    <select id="office" name="office" class="input-medium">
    <option><?php if($office != "") echo $office;?></option>
    <option></option>
      <?php echo $select;?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('Subscription');?></label>
  <div class="controls">
    <select id="podpiska" name="podpiska" class="input-medium">
     <?php if($subscription=="Active"):?>
      <option>Active</option>
      <option>Not Active</option>
     <?php else:?>
      <option>Not Active</option>
      <option>Active</option>
     <?php endif;?>
    </select>
  </div>
</div>

<!-- Appended checkbox -->
<div class="control-group">
  <label class="control-label"><?php echo lang('StartReg');?></label>
  <div class="controls">
    <div class="input-append">
      <input id="startreg" name="startreg" class="span2" type="text" value="<?php echo $startreg;?>">
      <span class="add-on">
        <input type="checkbox" name="startregcb" id="startregcb">
      </span>
    </div>
    
  </div>
</div>

<!-- Appended checkbox -->
<div class="control-group">
  <label class="control-label"><?php echo lang('EndReg');?></label>
  <div class="controls">
    <div class="input-append">
      <input id="endreg" name="endreg" class="span2" type="text" value="<?php echo $endreg;?>">
      <span class="add-on">
        <input type="checkbox" name="endregcb" id="endregcb">
      </span>
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('ID');?></label>
  <div class="controls">
    <input id="id" name="id" type="text" value="<?php echo $id;?>" class="input-medium">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button type="submit" id="button1id" name="button1id" class="btn btn-success"><?php echo lang('btnApply');?></button>
    <button id="button2id" name="button2id" class="btn btn-warning"><?php echo lang('btnCancel');?></button>
  </div>
</div>

</fieldset>
</form>

        </div>
    <div class="span8">
<table class="table">
    <thead><tr><th>id</th><th><?php echo lang('Login');?></th><th><?php echo lang('Name');?></th><th><?php echo lang('Login');?></th><th><?php echo lang('RegDate');?></th></tr></thead>
    <tbody>

	
