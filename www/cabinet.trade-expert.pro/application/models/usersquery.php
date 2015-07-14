<?php
class Usersquery extends CI_Model{
    public function loadusers(){
        $this->db->where('group <>',3);
        $query=$this->db->get('zilla_users');
        $output="";
        foreach($query->result() as $row){
            $group=$row->group;
            $this->db->where('id',$group);
            $query2=$this->db->get('groups',1,0);
            foreach($query2->result() as $row2){
                   $gname=$row2->name;
            }
            $output.="<tr><td>$row->username</td><td>$gname</td><td><a href=\"/users/edit?id=$row->id\" class=\"btn btn-primary btn-mini\">Edit user</a> <a href=\"/users/delete?id=$row->id\" class=\"btn btn-danger btn-mini\">Delete user</a></tr>";
        }
        return $output;
    }
    
   public function loaduser(){
       $id=$this->input->get('id');
       $this->db->where('id',$id);
       $query=$this->db->get('zilla_users',1,0);
       $data;
       foreach($query->result() as $row){
           $data=array('username'=>$row->username,'email'=>$row->email,'tel'=>$row->tel,'company'=>$row->company,'podpiska'=>$row->podpiska,'created_on'=>$row->created_on,'group'=>$row->group);
       
           echo $data;
       }   
       
       return $data;
   }
   
   public function saveedit(){
       $id=$this->input->get('id');
       $username=$this->input->post('username');
       $email=$this->input->post('email');
       $tell=$this->input->post('tel');
       $company=$this->input->post('company');
       $podpiska=$this->input->post('subscription');
       $created_on=$this->input->post('createdon');
       $group=$this->input->post('group');
       
       $data=array('username'=>$username,'email'=>$email,'tel'=>$tell,'company'=>$company,'created_on'=>$created_on,'group'=>$group);
       $this->db->where('id',$id);
       if($podpiska=="Active"){
           $this->db->where('id',$id);
           $query=$this->db->get('zilla_users',1,0);
           foreach($query->result() as $row){
               $curr=$row->podpiska;
           }
           $podpiska=$curr;
       }else{
           $podpiska=0;
       }
       $data['podpiska'] = $podpiska;
       $this->db->update('zilla_users',$data);
       redirect('/users/','refresh');
   }
   
   public function delete(){
       $this->db->where('id',$this->input->get('id'));
       $this->db->delete('zilla_users');    
       redirect('/users/','refresh');
   }
   
   public function load_group_select(){
       $query=$this->db->get('groups');
       $output="";
       foreach($query->result() as $row){
           $name=$row->name;
           $id=$row->id;
           $output.="<option value=\"$id\">$name</option>";
       }
       
       return $output;
   }
   
   public function savenewuser(){
       $username=$this->input->post('username');
       $password=$this->input->post('password');
       $group=$this->input->post('group');
       $tel=$this->input->post('tel');
       $email=$this->input->post('email');
       
       $this->zilla_auth_model->register($username,$password,$email,$group,array('tel'=>$tel));
       redirect('/users.html','refresh');
       
   }
}