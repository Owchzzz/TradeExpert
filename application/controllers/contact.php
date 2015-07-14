<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
	    $this->load->model('siteinfo');
        $this->load->model('siteinfo');
                $contact=$this->siteinfo->load_contactinfo();
                $data=array('telnum'=>$contact[0]);
        echo $this->load->view('header',$data);
        
        $content = $this->siteinfo->load_contactinfo();
        $data=array('email' => $content[1], 'telnum'=>$content[0], 'Skype' => $content[2], 'content' =>$content[3]);
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}
}