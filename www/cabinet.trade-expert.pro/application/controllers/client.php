<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

    public function __construct(){
        parent::__construct();
         $this->zilla_auth_model->validate();
        $this->load->library('load_site');
    }
	public function index(){
		$this->zilla_auth_model->loadmenu();
        $this->load->model('clientquery');
        $notifications=$this->clientquery->notifications();
        $data=array('notis'=>$notifications);
        $this->load->view('main-client',$data);
		$this->load->view('footer');
		
	}	
	
	public function profile(){
		$this->load->view('head');
        $this->load->model('clientquery');
		$id=$this->zilla_auth_model->get_user_id();
		$query=$this->db->query("SELECT * FROM zilla_users WHERE  id=$id LIMIT 1");
		$row=$query->row();
		$data=$row;
		$this->load->view('menu-client',$data);
		$this->load->view('my-profile');
		$this->load->view('footer');
	}
	
	public function profilesave(){
		$this->load->model('clientquery');
		$this->clientquery->saveclientinfo();
	}
    
    public function addcredit(){
        $this->load_site->load_client('addcredit');
    }
    
    public function pay(){
        $this->load->model('clientquery');
        $credit=$this->input->post('creditamt');
        $data=$this->clientquery->loadPaymentForm($credit);
        $this->load->view('robokassa',$data);
    }
    
    
    public function subscribe(){
        $this->zilla_auth_model->loadmenu();
        $this->load->model('clientquery');
        $this->load->view('subscription');
    }
    
    public function subspay(){
        $this->load->model('clientquery');
        $this->zilla_auth_model->loadmenu();
        $result=$this->clientquery->subscribe();
       
        
    }
    
    public function subsresult(){
        $this->zilla_auth_model->loadmenu();
         $this->load->view('subsresult');
        $this->load->view('footer');    
    }
    
    public function transactionhistory(){
        $this->zilla_auth_model->loadmenu();
        $this->load->model('clientquery');
        $output=$this->clientquery->loadtransactions();
        $data=array('output'=>$output);
        $this->load->view('transacthistory',$data);
        $this->load->view('footer');
    }
	
}