<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->zilla_auth_model->validate();
    }   
    
    public function index(){
        $this->zilla_auth_model->loadmenu();
        $this->load->view('support');
        $this->load->view('footer');
    }
    
    public function administrate(){
        $this->zilla_auth_model->loadmenu();
        $this->load->view('support-admin');
        $this->load->view('footer');
    }
    
    public function help(){
        $this->zilla_auth_model->loadmenu();
        $this->load->view('support');
        $this->load->view('footer');
    }
    
    public function post(){
        $this->load->model('supportquery');
        $this->supportquery->sendpost();
    }
    
    public function success(){
        $this->zilla_auth_model->loadmenu();
        $this->load->view('support-success');
        $this->load->view('footer');
    }
}