<?php

class Workerquery extends CI_Model{
    public function loadnoti(){
        $this->db->where('id',$this->zilla_auth_model->get_user_id());
        $query=$this->db->get('zilla_users');
        foreach($query->result() as $row){
            $company=$row->company;
        }
        
        $this->db->where('Office',$company);
        $query=$this->db->get('support_questions');
        $unviewed=array();
        $unresolved=array();
        $resolved=array();
        foreach($query->result() as $row)
        {
            $state=$row->State;
            switch($state){
                case 0:
                    array_push($unviewed,array('Id'=>$row->SId,'Header'=>$row->Header,'Content'=>$row->Message,'Client'=>$row->ClientID));
                    break;
                case 1:
                    array_push($unresolved,array('Id'=>$row->SId,'Header'=>$row->Header,'Content'=>$row->Message,'Client'=>$row->ClientID));
                    break;
                case 2:
                    array_push($resolved,array('Id'=>$row->SId,'Header'=>$row->Header,'Content'=>$row->Message,'Client'=>$row->ClientID));
                    break;   
            }
        }
    }   
    
    public function loadsupport(){
        $this->db->where('id',$this->zilla_auth_model->get_user_id());
        $query=$this->db->get('zilla_users');
        foreach($query->result() as $row){
            $company=$row->company;
        }
        
        $this->db->where('Office',$company);
        $query=$this->db->get('support_questions');
        $unviewed=array();
        $unresolved=array();
        $resolved=array();
        foreach($query->result() as $row)
        {
            $state=$row->State;
            switch($state){
                case 0:
                    array_push($unviewed,array('Id'=>$row->SId,'Header'=>$row->Header,'Content'=>$row->Message,'Client'=>$row->ClientID));
                    break;
                case 1:
                    array_push($unresolved,array('Id'=>$row->SId,'Header'=>$row->Header,'Content'=>$row->Message,'Client'=>$row->ClientID));
                    break;
                case 2:
                    array_push($resolved,array('Id'=>$row->SId,'Header'=>$row->Header,'Content'=>$row->Message,'Client'=>$row->ClientID));
                    break;   
            }
        }
        $output="<h5>Unviewed</h5>";
        foreach($unviewed as $row){
            $header=$row['Header'];
            $content=$row['Content'];
            $client=$row['Client'];
            $id=$row['Id'];
            $output.="<tr><td>$header</td><td>$content</td><td><a href=\"/worker/answernew?id=$id\" class=\"btn btn-warning btn-mini\">Answer</a></td></tr>";
        }
        
        $output="<h5>Unresolved</h5>";
        foreach($unviewed as $row){
            $header=$row['Header'];
            $content=$row['Content'];
            $client=$row['Client'];
            $id=$row['Id'];
            $output.="<tr><td>$header</td><td>$content</td><td><a href=\"/worker/answer?id=$id\" class=\"btn btn-warning btn-mini\">Answer</a></td></tr>";
        }
        
        $output="<h5>Viewed</h5>";
        foreach($unviewed as $row){
            $header=$row['Header'];
            $content=$row['Content'];
            $client=$row['Client'];
            $id=$row['Id'];
            $output.="<tr><td>$header</td><td>$content</td><td><a href=\"/worker/answer?id=$id\" class=\"btn btn-warning btn-mini\">Answer</a></td></tr>";
        }
        
        return $output;
    }
}