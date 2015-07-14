<?php

class Loadposts extends CI_Model{
	public function loadpostshome(){
		$this->db->where('page','home');
		$query=$this->db->get('posts');
		$row=$query->row();
		$content=$row->content;
                return $content;
	}
}