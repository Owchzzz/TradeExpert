<legend><?php echo lang('savesuccess');?></legend>
<form action="/analytics/save_newmessage" method="post">
	
<textarea style="margin: 0px 0px 10px; width: 750px; height: 183px;" name="content" id="content"></textarea><br>
	<button type="submit" class="btn btn-success">
		<i class="icon-white icon-share-alt"></i> <?php echo lang('submitnewpost');?> 
	</button>
</form>