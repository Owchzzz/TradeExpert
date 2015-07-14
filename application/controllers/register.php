<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    public function newuser(){
        $this->zilla_auth_model->register($this->input->post('username'),$this->input->post('password'),$this->input->post('email'),2,array('tel'=>$this->input->post('tel')));
       
    }   
    
    public function registersuccess(){
        echo $this->load->view('head','',TRUE);
        echo '<h3>Registration success</h3>Please Check your email to confirm your account';
        echo $this->load->view('footer','',TRUE);
    }
    
    public function userexists(){
        echo $this->load->view('head','',TRUE);
        echo '<h3>Registration failure!</h3>There is already a user with that <b>Username</b> plase <a href="/main/register/">Try Again</a>';
        echo $this->load->view('footer','',TRUE);
    }
    public function emailexists(){
        echo $this->load->view('head','',TRUE);
        echo '<h3>Registration failure!</h3>There is already a user with that <b>Email</b> plase <a href="/main/register/">Try Again</a>';
        echo $this->load->view('footer','',TRUE);
    }
    public function confirm(){
        $this->load->model('registerquery','rquery');
        $this->rquery->confirm();
    }
}