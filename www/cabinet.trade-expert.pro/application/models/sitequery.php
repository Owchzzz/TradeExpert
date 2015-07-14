<?php

class Sitequery extends CI_Model{

	public function savecontenthome(){
		$content = $this->input->post('content');
		$query = $this->db->query('SELECT * FROM posts WHERE page="home" LIMIT 1');
		$row = $query->row();
		//Update Statement
		if($row){
			$data = array('content'=>$content);
			$this->db->where('page','home');
			$this->db->update('posts',$data);
		}
		//Insert Statement
		else{
			$data = array('content'=>$content,'page'=>'home');
			$this->db->insert('posts',$data);
		}
		redirect('/site/successhome/','refresh');	
		//header('Location: /site/successhome/');
	}
    
    public function savecontact(){
        $telnum=$this->input->post('telnum');
        $email=$this->input->post('email');
        $skype=$this->input->post('skype');
        $extra=$this->input->post('extra');
        
        $this->db->where('info_id',1);
        $this->db->update('site_info',array('content'=>$telnum));
        $this->db->where('info_id',2);
        $this->db->update('site_info',array('content'=>$email));
        $this->db->where('info_id',3);
        $this->db->update('site_info',array('content'=>$skype));
        $this->db->where('info_id',4);
        $this->db->update('site_info',array('content'=>$extra));
        redirect('/site/successcontact/','refresh');
        //header('Location: /site/successcontact/');
    }
    
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