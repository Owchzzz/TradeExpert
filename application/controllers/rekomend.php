<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rekomend extends CI_Controller {
	public function index()
	{
        $this->load->model('loadrecommend','lrc');
        $this->load->model('siteinfo');
                $contact=$this->siteinfo->load_contactinfo();
                $data=array('telnum'=>$contact[0]);
        $result['output'] = $this->lrc->load_all_rec();
	  	echo $this->load->view('header',$data,TRUE);
		echo $this->load->view('rekomend',$result,TRUE);
		echo $this->load->view('footer','',TRUE);
	}
}