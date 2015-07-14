<script>
tinyMCE.init({
    mode : "textareas",
    language : "ru",
  width : "300", 
        height : "550",
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
			<form class="form-horizontal" action="/site/edithomesave/" method="post">
			<fieldset>

<!-- Form Name -->
<legend><?php echo lang('pagecontent');?></legend>


<!-- Textarea -->
<div class="control-group">

  <div class="controls">                     
    <textarea id="content" name="content"><?php $query=$this->db->get_where('posts',array('page' =>'home'),1);
		$row=$query->row();
		echo $row->content;
		?></textarea>
  </div>
</div>

				<div class="control-group">
					<label class="control-label"> </label>
					<div class="controls">
						<button type="submit" class="btn btn-primary">
							<?php echo lang('submitnewpost');?>
						</button>
					</div>
				</div>
</fieldset>
</form>

		</div>
	</div>
</div>