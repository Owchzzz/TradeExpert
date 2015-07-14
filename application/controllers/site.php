<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
         $this->zilla_auth_model->validate();
    }
	public function index(){
	
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('site-modify');
		$this->load->view('footer');
	
	}
	
	public function edithome(){
	
		
		$this->zilla_auth_model->loadmenu();
		$this->load->view('site-modify-home');
		$this->load->view('footer');
	
		
	
	
	}
    
    public function editcontact(){
        
        $this->load->model('sitequery');
        $contact=$this->sitequery->load_contactinfo();
        $data=array('telnum'=>$contact[0],'email'=>$contact[1],'skype'=>$contact[2],'extra'=>$contact[3]);
        $this->zilla_auth_model->loadmenu();
		$this->load->view('site-modify-contact',$data);
		$this->load->view('footer');
        
    }
	
	public function edithomesave(){
		
		$this->load->model('sitequery');
			$this->sitequery->savecontenthome();
		
	}
	
	public function successhome(){
	
        $this->load->model('sitequery');
        
		$this->zilla_auth_model->loadmenu();
		$this->load->view('site-modify-home');
		$this->load->view('footer');
	
		
	}
    
    public function savecontact(){
        $this->load->model('sitequery');
        $this->sitequery->savecontact();
    }
    
    public function successcontact(){
        
    	$this->zilla_auth_model->loadmenu();
		$this->load->view('site-modify');
		$this->load->view('footer');
	
    }
}