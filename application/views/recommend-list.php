<div class="container">
    <div class="row">
        <div class="span3">
            <!--Form New-->
            <form class="form-horizontal" action="/recommendation/addnewpost/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('addnewrecommend');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('heading');?></label>
  <div class="controls">
    <input id="head" name="head" type="text" placeholder="Enter Header Here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Prepended checkbox -->
<div class="control-group">
  <label class="control-label"><?php echo lang('buy');?></label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on">
        <label class="checkbox">
          <input type="checkbox">
        </label>
      </span>
      <input id="buy" name="buy" class="span2" type="text" placeholder="Enter Buy here">
    </div>
    
  </div>
</div>

<!-- Prepended checkbox -->
<div class="control-group">
  <label class="control-label"><?php echo lang('sell');?></label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on">
        <label class="checkbox">
          <input type="checkbox">
        </label>
      </span>
      <input id="sell" name="sell" class="span2" type="text" placeholder="Enter Sell here">
    </div>
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label"><?php echo lang('cont');?></label>
  <div class="controls">                     
    <textarea id="content" name="content"></textarea>
  </div>
</div>
<button type="submit" class="btn btn-primary"><?php echo lang('btnSubmitNew');?>/button>
</fieldset>
</form>

            <!--End Form-->
        </div>
        <div class="span6 offset3">
        <table>
            <tr><th><?php echo lang('ID');?></th><th><?php echo lang('heading');?></th><th><?php echo lang('cont');?></th><th><?php echo lang('buy');?>/<?php echo lang('sell');?></th><th><?php echo lang('dateupdated');?></th><tr>
            <?php echo $output;?>
        </table>
        </div>
    </div>
</div>