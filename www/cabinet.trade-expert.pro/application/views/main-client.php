<?php echo $this->session->userdata('loginid');?>
<?php echo $this->session->userdata('loginname');?>
<h3><?php echo lang('dash');?></h3>
<div class="container">
    <div class="row">
        
        <div class="span3">
            <h4><?php echo lang('noti');?></h4>
            <hr>
            <?php if($notis != "") echo $notis;?>
        </div>
        <div class="span2 pull-right">
    		<?php echo lang('Mypnts');?> - <?php echo $credit;?>  <a href="/client/addcredit/" class="btn btn-success btn-mini"><i class="icon-white icon-plus-sign"></i> <?php echo lang('addcred');?></a><br>
        </div>
    </div>
</div>