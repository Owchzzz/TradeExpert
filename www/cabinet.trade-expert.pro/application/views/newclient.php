<form class="form-horizontal" action="/clients/addclient.html" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('newcustomer');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Login');?></label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="" class="input-xlarge" required="">
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('password');?></label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('ofis');?></label>
  <div class="controls">
    <select id="office" name="office" class="input-xlarge">
        <option></option>
      <?php echo $select;?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Family');?></label>
  <div class="controls">
    <input id="family" name="name" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?></label>
  <div class="controls">
    <input id="tel" name="tel" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>
	
<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email');?></label>
  <div class="controls">
    <input id="email" name="email" type="email" placeholder="" class="input-xlarge" required="">
   </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button type="submit" id="save" name="save" class="btn btn-success"><?php echo lang('add');?></button>
  </div>
</div>

</fieldset>
</form>
