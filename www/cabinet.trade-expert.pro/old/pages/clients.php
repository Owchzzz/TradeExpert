<div class="row">
    <div class="span4">
		<a href="/newclient.html" class="btn btn-success"><i class="icon-white icon-user"></i> New Customer</a>
		
        <form class="form-horizontal">
<fieldset>
	<legend>Filters</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label">Family</label>
  <div class="controls">
    <input id="familia" name="familia" type="text" placeholder="" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Tel number</label>
  <div class="controls">
    <input id="tel" name="tel" type="text" placeholder="" class="input-medium">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Office</label>
  <div class="controls">
    <select id="office" name="office" class="input-medium">
      <option>Vologda</option>
      <option>Moscow</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label">Subscription</label>
  <div class="controls">
    <select id="podpiska" name="podpiska" class="input-medium">
      <option>Active</option>
      <option>Not Active</option>
    </select>
  </div>
</div>

<!-- Appended checkbox -->
<div class="control-group">
  <label class="control-label">Register after</label>
  <div class="controls">
    <div class="input-append">
      <input id="startreg" name="startreg" class="span2" type="text" placeholder="">
      <span class="add-on">
        <input type="checkbox">
      </span>
    </div>
    
  </div>
</div>

<!-- Appended checkbox -->
<div class="control-group">
  <label class="control-label">Register before</label>
  <div class="controls">
    <div class="input-append">
      <input id="endreg" name="endreg" class="span2" type="text" placeholder="">
      <span class="add-on">
        <input type="checkbox">
      </span>
    </div>
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">ID</label>
  <div class="controls">
    <input id="id" name="id" type="text" placeholder="numbers" class="input-medium">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success">Apply</button>
    <button id="button2id" name="button2id" class="btn btn-warning">Cancel</button>
  </div>
</div>

</fieldset>
</form>

        </div>
    <div class="span8">
<table class="table">
    <thead><tr><th>id</th><th>Login</th><th>Name</th><th>Office</th><th>Registration Date</th></tr></thead>
    <tbody>
<?
$result = $db->query("select * from clients order by id ASC");
	while ($row = $db->fetch($result)){ 
	echo "<tr><td>".$row['id']."</td><td>".$row['login']."</td><td>".$row['name']."</td><td>".$row['ofis']."</td><td>".$row['datareg']."</td></tr>";
	}
?>
    
    </tbody></table>
        </div>
   </div>