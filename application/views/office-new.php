<div class="container">
	<div class="row">
		<div class="span12">
			<form class="form-horizontal" action="/officelist/officenewsave/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('insertnewofis');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('ofis');?> <?php echo lang('Name');?></label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="Office Name" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">City</label>
  <div class="controls">
    <select id="city" name="city" class="input-xlarge">
      <option>Moscow</option>
      <option>Volgoda</option>
    </select>
	  <button type="input" class="btn btn-primary">
		  Save
	  </button>
  </div>
</div>

</fieldset>
</form>


		</div>
	</div>
</div>