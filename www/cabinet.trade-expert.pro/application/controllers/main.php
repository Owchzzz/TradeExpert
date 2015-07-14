<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    
    function __construct()
    {
		parent::__construct();
        $this->zilla_auth_model->validate();
	}

	public function index()
	{
        $this->zilla_auth_model->loadmenu();
        $lvl=$this->zilla_auth_model->get_user_group();
        switch($lvl){
                //Admin
            case 1:
                $this->load->view('main');
                break;
                //Analyst
            case 2:
                $this->load->view('main-analyst');
                break;
                //Client
            case 3:
				$this->db->where('id',$this->zilla_auth_model->get_user_id());
				$query=$this->db->get('zilla_users',1,0);
				foreach($query->result() as $row){
				$credit=$row->podpiska;
                $credit_days=$row->podpiska_days;
				}
                $this->load->model('clientquery');
                $notifications=$this->clientquery->notifications();
                
				$data=array('credit'=>$credit.'.'.$credit_days,'notis'=>$notifications);
                $this->load->view('main-client',$data);
                break;
                //Worker/Manager
            case 4:
                redirect('/worker/');
                break;
                
            
        }
        $this->load->view('footer');
    }
    
	
	public function hello(){
		echo 'Hello World!';
	}
    
    public function register(){
        echo $this->load->view('head','',TRUE);
        echo $this->load->view('register','',TRUE);
        echo $this->load->view('footer','',TRUE);
    }
}