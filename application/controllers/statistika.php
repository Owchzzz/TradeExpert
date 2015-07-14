<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistika extends CI_Controller {
	public function index()
	{
        $this->load->model('siteinfo');
                $contact=$this->siteinfo->load_contactinfo();
                $data=array('telnum'=>$contact[0]);
		$this->load->view('header',$data);
		$this->load->view('statistika');
		$this->load->view('footer');
	}
}