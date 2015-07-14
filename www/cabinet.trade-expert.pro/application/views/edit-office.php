<form class="form-horizontal" action="/officelist/officeeditsave?id=<?php echo $this->input->get('id');?>" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('EditOfis');?></legend>
<?php 
	$id = $this->input->get('id');
	$this->db->where('id',$id);
	$query=$this->db->get('offices',1,0);
foreach($query->result() as $row):
?>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('ofisname');?></label>
  <div class="controls">
    <input id="name" name="name" type="text" value="<?php echo $row->name;?>" class="input-xlarge" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('plan');?></label>
  <div class="controls">
    <input id="name" name="plan" type="plan" value="<?php echo $row->plan;?>" class="input-xlarge" required="">
    
  </div>
</div>


<!-- Select Basic -->
<div class="control-group">
  <label class="control-label"><?php echo lang('city');?></label>
  <div class="controls">
    <select id="city" name="city" class="input-xlarge">
      <option>Moscow</option>
      <option>Volgoda</option>
    </select>
	  <button type="input" class="btn btn-primary">
		  <?php echo lang('btnSaveEdit');?>
	  </button>
  </div>
</div>
<?php endforeach;?>
</fieldset>