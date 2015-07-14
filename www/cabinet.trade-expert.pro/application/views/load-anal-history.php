<style>
	table{
		width:94%;
	}
	th{
		background-color:#D6D6FF;
	}
	td{
		text-align:center;
		padding:3px;
	}
</style>
<div class="container">
	<div class="row">
	<div class="span2">
    <?php if ($this->zilla_auth_model->get_user_group() != 3):?>
		<a href="/analytics.html" class="btn btn-success"><i class="icon-white icon-plus"></i> <?php echo lang('btnSubmitNew');?></a>
    <?php endif;?>
		<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Filter</legend>

<!-- Text input-->
	<div class="control-group" >
  <label class="control-label"><?php echo lang('auth');?></label>
  <div class="controls">
    <input id="author" name="author" type="text" placeholder="author name" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('year');?></label>
  <div class="controls">
    <select id="year" name="year" class="input-xlarge">
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('month');?></label>
  <div class="controls">
    <select id="month" name="month" class="input-xlarge">
      <option><?php echo lang('jan');?></option>
      <option><?php echo lang('feb');?></option>
      <option><?php echo lang('mar');?></option>
      <option><?php echo lang('apr');?></option>
      <option><?php echo lang('may');?></option>
      <option><?php echo lang('jun');?></option>
      <option><?php echo lang('jul');?></option>
      <option><?php echo lang('au');?></option>
      <option><?php echo lang('sep');?></option>
      <option><?php echo lang('oct');?></option>
      <option><?php echo lang('nov');?></option>
      <option><?php echo lang('dec');?></option>
    </select>
  </div>
</div>

</fieldset>
</form>

		</div>
	<div class="span8 offset2"><table>
	<span><th><?php echo lang('auth');?></th><th><?php echo lang('con');?></th><th><?php echo lang('date');?></th></span>