<div class="container">
	<div class="row">
		<div class="span12">
<!--My Profile Form-->
			<form class="form-horizontal" action="/client/profilesave/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('myprof'); ?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username'); ?></label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="" class="input-xlarge" readonly="readonly" value="<?php echo $username?>" required="">
    <p class="help-block"><?php echo lang('yourusername'); ?></p>
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('password'); ?></label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="" value="<?php echo $password;?>" class="input-xlarge" required="">
    <p class="help-block"><?php echo lang('yourassword'); ?></p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('ofis'); ?></label>
  <div class="controls">
    <input id="datereg" name="datereg" type="text" placeholder="" readonly="readonly" value="<?php echo $company;?>" class="input-xlarge">
    <p class="help-block"><?php echo lang('youroffis'); ?></p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('dateregistered'); ?></label>
  <div class="controls">
    <input id="datereg" name="datereg" type="text" placeholder="" readonly="readonly" value="<?php echo $created_on;?>" class="input-xlarge">
    <p class="help-block"><?php echo lang('yourdateregistered'); ?></p>
  </div>
</div>



<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email'); ?></label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="" value="<?php echo $email;?>" class="input-xlarge">
    <p class="help-block"><?php echo lang('youremail'); ?></p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('connumber'); ?></label>
  <div class="controls">
    <input id="connumber" name="connumber" type="text" placeholder="" value="<?php echo $tel;?>" class="input-xlarge">
    <p class="help-block"><?php echo lang('yourconnumber'); ?></p>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label"><?php echo lang('status'); ?></label>
  <div class="controls">
	  <?php if($podpiska >= 1): ?>
	  <?php echo lang('subscribed'); ?> <font color="blue"><?php echo $podpiska;?></font>   <?php echo lang('months'); ?> <a href="/client/addcredit/" class="btn btn-warning btn-mini"><?php echo lang('addcred'); ?></a>
	  <?php endif?>
	  <?php if($podpiska == 0): ?>
	  <a href="/client/addcredit/" class="btn btn-success btn-mini"><?php echo lang('subnow'); ?></a>
	  <?php endif?>
  </div>
</div>
	<div class="control-group">
		<div class="controls">
			
<button type="submit" class="btn btn-primary">
		<?php echo lang('savechanges'); ?>
	</button>
		</div>
	</div>
</fieldset>
</form>

			
<!--End of Profile Form-->
		</div>
	</div>
</div>