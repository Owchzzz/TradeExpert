<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stats extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->zilla_auth_model->validate();
        $this->zilla_auth_model->loadmenu();
    }   
    
    public function index(){
        $this->load->model('statsquery');
        $data=$this->statsquery->loadstats();
        $this->load->view('stats',$data);
    }
}