<script>
tinyMCE.init({
    mode : "textareas",
    language : "ru",
  width : "300", 
        height : "80",
    plugins : "jbimages,table,save,contextmenu,paste,code",
 
 theme_advanced_buttons1 : "save,|,bold,italic,underline,strikethrough,|,formatselect,|,jbimages",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,|,link,unlink,cleanup,code",
    theme_advanced_buttons3 : "tablecontrols,|,sub,sup,|,fullscreen,|,justifyleft,justifycenter,justifyright",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_blockformats : "p,h1,h2",
    theme_advanced_resizing : true,
    
    // Other options
    relative_urls : false
});
</script>
<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action="/site/savecontact/" method="post">
<fieldset>

<!-- Form Name -->
<legend><?php echo lang('contactdetails');?></legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('Tell');?></label>
  <div class="controls">
    <input id="telnum" name="telnum" type="text" value="<?php echo $telnum;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('email');?></label>
  <div class="controls">
    <input id="email" name="email" type="text" value="<?php echo $email;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label"><?php echo lang('skypeusername');?></label>
  <div class="controls">
    <input id="skype" name="skype" type="text" value="<?php echo $skype;?>" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label"><?php echo lang('extracont');?></label>
  <div class="controls">                     
    <textarea id="extra" name="extra"><?php echo $extra;?></textarea>
  </div>
</div>
<button type="submit" class="btn btn-primary"><?php echo lang('btnSubInfo');?></button>
</fieldset>
</form>

        </div>
    </div>
</div>