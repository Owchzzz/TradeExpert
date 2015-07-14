<div class="container">
    <div class="row">
        <div class="span12">
            <h3><?php echo lang('Subscription');?></h3>
            <?php echo lang('substime');?><br><br><br><br>   
            <form action="/client/subspay/" method="post">
                <fieldset>
                    <legend><?php echo lang('Subscription');?></legend>
                    <?php echo lang('months');?>:       
                    <select name="months" id="months" style="width:80px">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                    </input>
                    <input type="submit" class="btn btn-primary btn-mini" value="Subscribe" style="margin-left:15px">    
                </fieldset>
            </form>
        </div>
    </div>
</div>