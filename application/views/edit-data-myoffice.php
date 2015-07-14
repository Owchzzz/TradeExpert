<div class="container">
    <div class="row">
        <div class="span12">
        <form class="form-horizontal" action="/clients/saveedit?id=<?php echo $this->input->get('id');?>" method="post">
<fieldset>

<!-- Form Name -->
<legend>Client Edit</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username');?></label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="" class="input-xlarge" value="<?php echo $username;?>" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('password');?></label>
  <div class="controls">
    <input id="password" name="password" type="text" placeholder="" class="input-xlarge" value="<?php echo $pword;?>" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Name');?></label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="" value="<?php echo $fname;?>"class="input-xlarge">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('Ofis');?></label>
  <div class="controls">
    <select id="office" name="office" readonly="" class="input-xlarge">
        <option><?php echo $ofis;?></option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('Subscription');?></label>
  <div class="controls">
    <select id="podpiska" name="podpiska" class="input-xlarge">
    <?php if($podpiska==1):?>
      <option><?php echo lang('active');?></option>
      <option><?php echo lang('notactive');?></option>
     <?php endif;?>
     <?php if($podpiska==0):?>
     <option><?php echo lang('notactive');?></option>
      <option><?php echo lang('active');?></option>
     <?php endif;?>
    </select>
  </div>
</div>
<button type="submit" class="btn btn-primary"><?php echo lang('btnSubmit');?></button>
</fieldset>
</form>

        </div>
    </div>
</div>