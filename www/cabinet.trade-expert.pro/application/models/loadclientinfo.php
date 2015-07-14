<?php

class Loadclientinfo extends CI_Model{
    public function load_client_data(){
        $credit=0;
        if($this->zilla_auth_model->logged_in()){
            $userid=$this->zilla_auth_model->get_user_id();
            $this->db->where('id',$userid);
            $query=$this->db->get('users');
            foreach($query->result() as $row){
                $credit=$row->credit;
            }
        }
        else{
            $credit=0;
            redirect('/zillaauth/login');
            die();
        }
        
        return $credit;
    }   
}