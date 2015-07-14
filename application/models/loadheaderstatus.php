<?php

class Loadheaderstatus extends CI_Model{
    public function load_header(){
        if($this->session->userdata('state')){echo '<a href="/main/myprofile/" class="kabinet">Личный кабинет</a>';}
        else{echo '<a href="http://cabinet.trade-expert.pro/main/register/" class="kabinet">Личный кабинет</a>';}
        echo ' </div><!--header-->';
    }   
}