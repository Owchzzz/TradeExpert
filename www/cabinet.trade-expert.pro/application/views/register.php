<form class="form-horizontal" action="/register/newuser/" method="post" style="margin-left:110px">
<fieldset>

<!-- Form Name -->
<legend style="font-size:13pt"><?php echo lang('regform');?>:</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username');?>:</label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="Enter Username Here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('password');?>:</label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="Enter Password Here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email');?></label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="Enter Email here (required)" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?></label>
  <div class="controls">
    <input id="tel" name="tel" type="text" placeholder="Enter Tel Number" class="input-xlarge">
    
  </div>
</div>

<input type="submit" value="register">
</fieldset>
</form>
