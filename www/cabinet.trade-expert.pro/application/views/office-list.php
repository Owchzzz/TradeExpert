<div class="container">
	<div class="row">
		<div class="span3">
			<a href="/officelist/addnewoffice" class="btn btn-success">New Office</a>
			<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('Filter');?></legend>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('city');?></label>
  <div class="controls">
    <select id="city" name="city" class="input-xlarge">
      <option>Moscow</option>
      <option>Volgoda</option>
    </select>
  </div>
</div>

</fieldset>
</form>

		</div>
		<div class="span6 offset3">
			<table style="width:80%;">
				<tr><th><?php echo lang('ID');?></th><th><?php echo lang('Name');?></th><th><?php echo lang('city');?></th><th><?php echo lang('actions');?></th></tr>
			