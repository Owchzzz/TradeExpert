<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Zillaauth extends CI_Controller {
    public function login(){
        $this->load->view('head');
        $this->zilla_auth_model->show_user_login();
        $this->load->view('footer');
    }
    
    public function user_login(){
        $this->zilla_auth_model->user_login();
    }
    
    public function logout(){
        $this->zilla_auth_model->logout();
    }
    
    public function registersuccess(){
        $this->load->view('head','',true);
        $this->load->view('registersuccess');
        $this->load->view('footer','',true);
        $email = $this->input->get('email');
        $this->zilla_auth_model->sendconfirmation($email);
    }

    
    public function registersuccessspecial(){
        $this->load->view('head','',true);
        $this->load->view('registersuccess2');
        $this->load->view('footer','',true);
        
    }
    
    public function emailconfirm(){
        $this->zilla_auth_model->recieveconfirmation();
    }
    
    public function confirmationsuccess(){
        $this->load->view('head');
        $this->load->view('menu-client');
        $this->load->view('confirmsuccess');
        $this->load->view('main-client');
        $this->load->view('footer');
    }
}