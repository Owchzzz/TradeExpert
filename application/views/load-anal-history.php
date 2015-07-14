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

		</div>
	<div class="span8 offset2"><table>
	<span><th><?php echo lang('auth');?></th><th><?php echo lang('con');?></th><th><?php echo lang('date');?></th></span>