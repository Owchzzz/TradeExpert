<style>
    #report {
        color: red;        
    }
    </style>
<script>
    function createoffice() {
var formData = {
"officename":$("#officename").val()
, "city":$("#city").val()
, "login":$("#login").val()
, "password":$("#password").val()
};
$.ajax({
url:'models/offices.php'
, type:'POST'
, data:'jsoncreateoffice=' + $.toJSON(formData)
, success: function(res) {
if (res == "true"){
window.location="/officelist.html";
}else{
$("#report").empty();
$("#report").append(res);
}
}
});
return false;
}

</script>

<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>New office</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Name of Office</label>
  <div class="controls">
    <input id="officename" name="officename" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">City</label>
  <div class="controls">
    <input id="city" name="city" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">Login</label>
  <div class="controls">
    <input id="login" name="login" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label">Password</label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="" class="input-xlarge">
    
  </div>
</div>

</fieldset>
</form>
<center>
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button onclick="createoffice();" id="save" name="save" class="btn btn-success">Save</button>
  </div>
</div>
<div id="report"></div>
</center>