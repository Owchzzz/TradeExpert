<?php
?>

<div class="container">
    <div class="row">
        <div class="span12">
            
            <form class="form-horizontal" action="/users/saveedit?id=<?php echo $this->input->get('id');?>" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('edituserinfo');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username');?>:</label>
  <div class="controls">
    <input id="username" name="username" type="text" value="<?php echo $username;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email');?>: </label>
  <div class="controls">
    <input id="email" name="email" type="text" value="<?php echo $email;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?>: </label>
  <div class="controls">
    <input id="tel" name="tel" type="text" value="<?php echo $tel;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('Ofis');?> : </label>
  <div class="controls">
    <select id="company" name="company" class="input-xlarge">
        
            <option><?php echo $company;?></option>
        <?php echo $selectopt;?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('Subscription');?>: </label>
  <div class="controls">
    <select id="subscription" name="subscription" class="input-xlarge">
      <?php if($podpiska > 0):?>
      <option><?php echo lang('active');?></option>
      <option><?php echo lang('notactive');?></option>
     <?php else:?>
      <option><?php echo lang('notactive');?></option>
      <option><?php echo lang('active');?></option>
     <?php endif;?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('datecreated');?>: </label>
  <div class="controls">
    <input id="createdon" name="createdon" type="text" value="<?php echo $created_on;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('group');?>: </label>
  <div class="controls">
    <select id="group" name="group" class="input-xlarge">
        <option><?php echo $group;?></option>
    </select>
  </div>
</div>

<br>
<button type="submit" class="btn btn-primary btn-small"><?php echo lang('btnApply');?></button>
</fieldset>
</form>
        </div>
    </div>
</div>
