<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Officelist extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
         $this->zilla_auth_model->validate();
         $this->db->flush_cache();
    }
		
	public function index(){
		
		$this->load->model('officequery','',TRUE);
		$this->zilla_auth_model->loadmenu();
		echo $this->load->view('office-list','',TRUE);
		echo $this->officequery->load_offices();
		echo $this->load->view('footer','',TRUE);
	}
	
	public function delete(){
		$this->load->model('officequery','',TRUE);
		$this->officequery->delete_office();
	}
	
	
	public function addnewoffice(){
		$this->zilla_auth_model->loadmenu();
		echo $this->load->view('office-new','',TRUE);
		echo $this->load->view('footer','',TRUE);
	}
	
    public function ratings(){
        $this->zilla_auth_model->loadmenu();
        $this->load->model('officequery');
        $op=$this->officequery->load_office_ratings();
        $data=array('output'=>$op);
        echo $this->load->view('office-ratings',$data,TRUE);
        echo $this->load->view('footer','',TRUE);
    }
    
	public function officenewsave(){
		$this->load->model('officequery');
		$this->officequery->insert_office();
	}
	
	public function successaddnew(){
		redirect('/officelist','refresh');
	}
	
	public function edit(){
	    $this->zilla_auth_model->loadmenu();
		echo $this->load->view('edit-office','',TRUE);
		echo $this->load->view('footer','',TRUE);
	}
	
	public function officeeditsave(){
		$this->load->model('officequery');
		$this->officequery->edit_save_office();
	}
	
	public function saveeditsuccess(){
		$this->load->model('officequery','',TRUE);
		$this->zilla_auth_model->loadmenu();
		echo $this->load->view('office-list','',TRUE);
		echo $this->officequery->load_offices();
		echo $this->load->view('footer','',TRUE);
	}
}