<h3>List of Users</h3>
<div class="container">

    <div class="row">
        <div class="span3">
        <a href="/users/add/" class="btn btn-success"><?php echo lang('newuser');?></a>
        <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('filter');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('username');?></label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="Username here" class="input-xlarge">
    
  </div>
</div>

<!-- Button Drop Down -->
<div class="control-group">
  <label class="control-label"><?php echo lang('group');?></label>
  <div class="controls">
    <div class="input-append">
      <input id="group" name="group" class="span2" placeholder="Current Group" type="text">
      <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">
          
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="#"><?php echo lang('administrators');?></a></li>
          <li><a href="#"><?php echo lang('analyst');?></a></li>
          <li><a href="#"><?php echo lang('members');?></a></li>
          <li><a href="#"><?php echo lang('clients');?></a></li>
        </ul>
      </div>
    </div>
  
  
  
</div>

</fieldset>
</form>
    </div>
    <div class="span5 offset3">
  <table>
  <tr><th><?php echo lang('username');?></th><th><?php echo lang('group');?></th></tr>
  <?php echo $users;?>
  </table>
  
  </div>
        </div>
    </div>
</div>