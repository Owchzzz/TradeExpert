<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stats extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->zilla_auth_model->validate();
        
    }   
    
    public function index(){
        $this->load->view('head');
        $this->load->model('statsquery');
        $this->zilla_auth_model->loadmenu();
        $data=$this->statsquery->loadstats();
        $this->load->view('stats',$data);
        $this->load->view('footer');
    }
}