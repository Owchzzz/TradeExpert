<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recommendation extends CI_Controller {
    public function __construct(){
        parent::__construct();
         $this->zilla_auth_model->validate();
    }
    
    //Login state check
    public function logincheck(){
        if(!$this->zilla_auth_model->logged_in()){
            redirect('auth/login');
        }
    }
    
    
    
    public function index(){
        $this->logincheck();
        $this->load->model('recommendationquery','recquery');
        echo $this->load->view('head','',TRUE);
        $this->zilla_auth_model->loadmenu();
        $rows['output'] = &$this->recquery->load_all_rec();
        echo $this->load->view('recommend-list',$rows);
        echo $this->load->view('footer');
    }
    
    function __renderlist($output = null){
        $this->load->view('load_list_recommendations',$output);
    }
    
    function addnewpost(){
        $this->logincheck();
        $this->load->model('recommendationquery','rquery');
        $this->rquery->save_new_rec();
        
    }
    
    
    public function savenewrecsuccess(){
        $this->load->model('recommendationquery','recquery');
        $this->logincheck();
        echo $this->load->view('head','',TRUE);
        $this->loadmenu();
        $rows['output'] = &$this->recquery->load_all_rec();
        echo $this->load->view('recommend-list',$rows);
        echo $this->load->view('recommendation-save-success','',TRUE);
        $this->load->view('footer','',TRUE);
    }
    
}