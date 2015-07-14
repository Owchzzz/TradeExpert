<?php

class Loadrecommend extends CI_Model{
    public function load_all_rec(){
        $query=$this->db->get('recommendations');
        $output="";
        foreach($query->result() as $row){
            if($row->BuySell < 0){
                $cash=(-1*$row->BuySell);
                $addinfo='<span class="prise"><span class="color">SELL</span>'.$cash.'$</span>';
            }else{
                $cash=$row->BuySell;
                $addinfo='<span class="prise">BUY</span>'.$cash.'$</span>';
            }
            $output= $output."<li><h4>$row->Heading</h4>$row->Content $addinfo ".'<span class="date">'."$row->DateUpdated</span></li>";
        }
        
        return $output;
    }   
}