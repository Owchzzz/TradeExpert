<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action="/clients/submitfunds?id=<?php echo $this->input->get('id');?>" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('addfunds');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('credittoadd');?></label>
  <div class="controls">
    <input id="credit" name="credit" type="text" placeholder="Insert any whole integer here" class="input-xlarge" required="">
    <button type="submit" class="btn btn-success btn-small"><?php echo lang('btnAddFunds');?></button>
  </div>
</div>

</fieldset>
</form>

        </div>
    </div>
</div>