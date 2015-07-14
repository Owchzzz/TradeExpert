<?php
class Supportquery extends CI_Model{
    public function sendpost(){
        $header=$this->input->post('header');
        $msg=$this->input->post('content');
        $sender=$this->zilla_auth_model->get_user_id();
        $this->db->where('id',$sender);
        $query=$this->db->get('zilla_users');
        foreach($query->result() as $row){
            $ofis=$row->company;
        }
        $data=array('Header'=>$header,'Message'=>$msg,'Office'=>$ofis,'ClientID'=>$sender);
        $this->db->insert('support_questions',$data);
        redirect('/support/success/','refresh');
        die();
    }
}