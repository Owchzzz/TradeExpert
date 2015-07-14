<?php

class Registerquery extends CI_Model{
    

    public function addnewuser(){
        $user=$this->input->post('username');
        $pass=$this->input->post('password');
        $email=$this->input->post('email');
        $tel=$this->input->post('tel');
    
       
         //Ion_Auth functions 
       if(!$this->ion_auth->username_check($user)){
           $add_data = array(
               'datareg'=>date('d-m-Y')
               );
               
               if(!$this->ion_auth->email_check($email)){
                   $groupid = 2;
                              $this->ion_auth->register($user,$pass,$email,$add_data,$groupid);
                              redirect('/register/registersuccess/','refresh');
                              //header('Location: /register/registersuccess/');
                              die();
               }else{
                   redirect('/register/emailexists/','refresh');
                   //header('Location: /register/emailexists/');
                   die();
               }
       }else{
           redirect('/register/userexists/','refresh');
           //header('Location: /register/userexists/');
               die();
       }
      
        
        
    }
    
    public function confirm(){
        $user=$this->input->get('user');
            $data=array('status'=>'1');
            $this->db->where('login',$user);
            $query=$this->db->get('clients');
            $row=$query->row();
            if($row->status != 1){
            $this->db->update('clients',$data);
            echo '<h3>Confirmation Success!</h3>Proceed to <a href="http://cabinet.trade-expert.pro/">Login</a>';
            }else{
                echo '<h4>Your account has already been confirmed</h4> Proceed to <a href="http://cabinet.trade-expert.pro/">Login</a>';
            }
        
    }
}