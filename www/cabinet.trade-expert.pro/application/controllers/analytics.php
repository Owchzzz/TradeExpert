<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analytics extends CI_Controller {
    
    function __construct()
    {
    	parent::__construct();
        $this->zilla_auth_model->validate();
	}

	public function index()
	{
		$this->zilla_auth_model->loadmenu();
        $this->load->model('analyticsquery');
        $op=$this->analyticsquery->loaddateselect();
        $data=array('select'=>$op);
		$this->load->view('new_message',$data);
		$this->load->view('footer');
	}
    
	
	public function save_newmessage(){
		$this->load->model('analyticsquery','aquery');
		$this->aquery->save_new_analytics();
	}
	
	public function savesuccessnew(){
		$this->zilla_auth_model->loadmenu();
		$this->load->view('savesuccess');
		$this->load->view('footer');
	}
	
	public function history(){
		$this->zilla_auth_model->loadmenu();
		$this->load->model('analyticsquery','aquery');
		echo $this->load->view('load-anal-history','',TRUE);
		echo $this->aquery->load_history_analytics();
		echo '</table></div></div>';
		echo $this->load->view('footer','',TRUE);
	}
	
}
