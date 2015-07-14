<div class="container">
    <div class="row">
        <div class="span12">
        <form class="form-horizontal" action="/client/pay/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('Credit-Payment');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Credit-Amt');?></label>
  <div class="controls">
    <input id="creditamt" name="creditamt" type="text" placeholder="<?php echo lang('Credit-Amt');?>" class="input-xlarge" required="">
    
  </div>
</div>
<button type="submit" class="btn btn-primary"><?php echo lang('btnSubmit');?></btn>
</fieldset>
</form>

        </div>
    </div>
</div>