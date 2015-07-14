<div class="Container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action="/users/regnew/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('reguser');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username');?></label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="Enter Username Here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('password');?></label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="Enter pasword here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('group');?></label>
  <div class="controls">
    <select id="group" name="group" class="input-xlarge">
        <?php echo $output;?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email');?></label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="Enter Email Here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?></label>
  <div class="controls">
    <input id="tel" name="tel" type="text" placeholder="+6390000000" class="input-xlarge" required="">
    
  </div>
</div>

<button type="submit" class="btn btn-primary btn-small"><?php echo lang('btnSubmitNew');?></button>

</fieldset>
</form>

        </div>
    </div>
</div>