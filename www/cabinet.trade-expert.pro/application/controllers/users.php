<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
         $this->zilla_auth_model->validate();
    }
	public function index()
	{
		$this->zilla_auth_model->loadmenu();
        $this->load->model('usersquery');
        $output=$this->usersquery->loadusers();
        $data=array('users'=>$output);
		echo $this->load->view('users',$data);
		echo $this->load->view('footer');
	}
        
        public function add(){
            $this->zilla_auth_model->loadmenu();
            $this->load->model('usersquery');
            $data=$this->usersquery->load_group_select();
            $dpass=array('output'=>$data);
            $this->load->view('user-register',$dpass);
            $this->load->view('footer');
        }
        
        public function regnew(){
            $this->load->model('usersquery');
            $this->usersquery->savenewuser();
        }
        
        public function edit(){
            $this->zilla_auth_model->loadmenu();
            $this->load->model('usersquery');
            $this->load->model('clientsquery');
            $data2=$this->clientsquery->load_offices_select();
            $data=$this->usersquery->loaduser();
            $data['selectopt'] = $data2;
              
            $this->load->view('edit-user',$data);
            $this->load->view('footer');
            
        }
        
        public function delete(){
            $this->load->model('usersquery');
            $this->usersquery->delete();
            
        }
    
        
        public function saveedit(){
            $this->load->model('usersquery');
            $this->usersquery->saveedit();
        }
    public function submituser(){
        
    }
    

}