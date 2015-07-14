<form class="form-horizontal" action="/models/clients.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>New Customer</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Login</label>
  <div class="controls">
    <input id="login" name="login" type="text" placeholder="" class="input-xlarge" required="">
	  <input name="newuser" type="hidden">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label">Password</label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Office</label>
  <div class="controls">
    <select id="office" name="ofis" class="input-xlarge">
      <option>Vologda</option>
      <option>Moscow</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Family</label>
  <div class="controls">
    <input id="family" name="name" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Tel number</label>
  <div class="controls">
    <input id="tel" name="tel" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>
	
<!-- Text input-->
<div class="control-group">
  <label class="control-label">E-Mail</label>
  <div class="controls">
    <input id="email" name="email" type="email" placeholder="" class="input-xlarge" required="">
   </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button id="save" name="save" class="btn btn-success">Add</button>
  </div>
</div>

</fieldset>
</form>
