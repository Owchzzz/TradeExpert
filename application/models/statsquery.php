<?php

class Statsquery extends CI_Model{
    public function loadstats(){
        $this->db->where('group',3);
        $query=$this->db->get('zilla_users');
        $subs=0;
        $count=0;
        foreach($query->result() as $row){
            
            if($row->podpiska >= 0){
                if($row->podpiska_days>0){
                    $subs++;
                }
            }
            $count++;
        }
        
        $data=array('subs'=>$subs,'count'=>$count);
        return $data;
    }
}