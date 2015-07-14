<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Load_site{
    public function load_admin($content,$contentdata=NULL,$content2=NULL,$content2data=NULL,$content3=NULL,$content3data=NULL){
        $CI =& get_instance();
        $CI->load->view('head');
        $CI->load->view('menu');
        $CI->load->view($content,$contentdata);
        if(isset($content2)){
            $CI->load->view($content2);
        }
        if(isset($content3)){
            $CI->load->view($content3);
        }
        $CI->load->view('footer');
    }   
    public function load_client($content,$contentdata=NULL,$content2=NULL,$content2data=NULL,$content3=NULL,$content3data=NULL){
        $CI =& get_instance();
        $CI->load->view('head');
        $CI->load->view('menu-client');
        $CI->load->view($content,$contentdata);
        if(isset($content2)){
            $CI->load->view($content2);
        }
        if(isset($content3)){
            $CI->load->view($content3);
        }
        $CI->load->view('footer');
    }  
}