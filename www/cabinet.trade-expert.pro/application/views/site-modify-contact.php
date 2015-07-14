<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action="/site/savecontact/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('contactdetails');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?></label>
  <div class="controls">
    <input id="telnum" name="telnum" type="text" value="<?php echo $telnum;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email');?></label>
  <div class="controls">
    <input id="email" name="email" type="text" value="<?php echo $email;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('skypeusername');?></label>
  <div class="controls">
    <input id="skype" name="skype" type="text" value="<?php echo $skype;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label"><?php echo lang('extracont');?></label>
  <div class="controls">                     
    <textarea id="extra" name="extra"><?php echo $extra;?></textarea>
  </div>
</div>
<button type="submit" class="btn btn-primary"><?php echo lang('btnSubInfo');?></button>
</fieldset>
</form>

        </div>
    </div>
</div>