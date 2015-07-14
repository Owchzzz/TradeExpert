<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transactions extends CI_Controller {
    
    
    
    public function __construct(){
        parent::__construct();
        $this->load->library('load_site');
        $this->load->model('transactionquery','trs');
    }
    
    public function index(){
        $output=$this->trs->load_transactions();
        $data=array('content'=>$output);
        $this->load_site->load_admin('main-transact',$data);
    }
}