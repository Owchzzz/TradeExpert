<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worker extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->zilla_auth_model->get_user_group() != 4){
            redirect('/zillaauth/logout/','redirect');
            die();
        }
        $this->zilla_auth_model->validate();
        
    }
    public function index(){
        $this->zilla_auth_model->loadmenu();
        $this->load->view('main-worker');
        $this->load->view('footer');
        
    }   
    
    public function support(){
        $this->zilla_auth_model->loadmenu();
        $this->load->model('workerquery');
        $output=$this->workerquery->loadsupport();
        $data=array('output'=>$output);
        $this->load->view('worker-support',$data);
    }
}