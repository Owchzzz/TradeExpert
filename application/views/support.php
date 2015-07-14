<form class="form-horizontal" action="/support/post/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('helpndsupport');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('inquireheader');?></label>
  <div class="controls">
    <input id="header" name="header" type="text" placeholder="Enter Title of complaint/question here" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label"><?php echo lang('complaincontent');?></label>
  <div class="controls">                     
    <textarea id="content" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary"><?php echo lang('send');?></button>
</div>

</fieldset>
</form>
