<?php

class Siteinfo extends CI_Model{
    public function load_contactinfo(){
        $siteinfo=array();
        $query = $this->db->get('site_info');
        $total=1;
        foreach($query->result() as $row){
           array_push($siteinfo,$row->content);
        }
        return $siteinfo;
    }   
    
    
}