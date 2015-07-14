<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {
    
    
    function __construct()
    {
    	parent::__construct();
	     $this->zilla_auth_model->validate();
        $this->load->library('load_site');
		$this->lang->load('auth');
		$this->load->helper('language');
	}
    
    
	public function index()
	{
		echo $this->load->model('clientsquery','',TRUE);
		$this->zilla_auth_model->loadmenu();
        $output=$this->clientsquery->load_offices_select();
        $data=array('select'=>$output);
		echo $this->load->view('clients',$data,TRUE);
		echo $this->clientsquery->load_all_clients();
		echo $this->load->view('footer','',TRUE);
	}
    
    public function myoffice(){
        $this->zilla_auth_model->loadmenu();
        $this->load->model('clientsquery');
        $op=$this->clientsquery->loadmyoffice();
        $data=array('op'=>$op);
        $this->load->view('myofficeusers',$data);
        $this->load->view('footer');
    }
    
    public function newclientmyoffice(){
        $this->load->model('clientsquery');
        $output=$this->clientsquery->load_offices_select();
        $data=array('select'=>$output);
        $this->zilla_auth_model->loadmenu();
        $this->load->view('newclientmyoffice',$data);
        $this->load->view('footer');
    }
	
	public function newclient(){
                $this->load->model('clientsquery');
                $output=$this->clientsquery->load_offices_select();
                $data=array('select'=>$output);
	        	$this->load->view('head');
                $this->zilla_auth_model->loadmenu();
                $this->load->view('newclient',$data);
                $this->load->view('footer');
	}
	
	public function sort(){
		echo $this->load->model('clientsquery','',TRUE);
		echo $this->load->view('head','',TRUE);
		$this->zilla_auth_model->loadmenu();
        $name=$this->input->post('familia');
    	$tel=$this->input->post('tel');
		$office=$this->input->post('office');
		$subscription=$this->input->post('podpiska');
		$startreg=$this->input->post('startreg');
		$endreg=$this->input->post('endreg');
		$id=$this->input->post('id');
		$startregcb=$this->input->post('startregcb');
		$endregcb=$this->input->post('endregcb');
        $output=$this->clientsquery->load_offices_select();
        $data=array('name'=>$name,'tel'=>$tel,'office'=>$office,'subscription'=>$subscription,'startreg'=>$startreg,'endreg'=>$endreg,'id'=>$id,'select'=>$output);;
		echo $this->load->view('clients-sort',$data,TRUE);
		echo $this->clientsquery->load_sorted_clients();
		echo $this->load->view('footer','',TRUE);
	}
	
	public function addclient(){

		$datareg=date("Y-m-d",time());
		$password=$this->input->post('password');
		$login=$this->input->post('username');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$office=$this->input->post('office');
		$tel=$this->input->post('tel');
		
		$data = array(
        'name' => $name,
		'company'=>$office,
		'created_on'=> $datareg,
		'tel'=>$tel,
		);
		
        
        //Zilla_Auth
        $this->zilla_auth_model->register($login,$password,$email,3,$data);
        
        
		//header("Location: /clients.html");
        redirect('/clients.html','refresh');
	}
    
        public function addfunds(){
            $this->load->model('clientsquery');
            $this->zilla_auth_model->loadmenu();
            $this->load->view('add-funds');
            $this->load->view('footer');
        }
        
        public function submitfunds(){
            $this->load->model('clientsquery');
            $this->clientsquery->submitfunds();
        }
    
    public function addclientmyoffice(){

    	$datareg=date("Y-m-d",time());
		$password=$this->input->post('password');
		$login=$this->input->post('username');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$tel=$this->input->post('tel');
        
        $id=$this->zilla_auth_model->get_user_id();
        $this->db->where('id',$id);
        $query=$this->db->get('zilla_users',1,0);
        foreach($query->result() as $row){
            $office=$row->company;
        }
		
		$data = array(
        'name' => $name,
		'company'=>$office,
		'created_on'=> $datareg,
		'tel'=>$tel,
        'group' => 3,
        'manager_id' => $id,
		);
		
        
        //Zilla_Auth
        $this->zilla_auth_model->register($login,$password,$email,3,$data);
        
        
		//header("Location: /clients.html");
        redirect('/clients.html','refresh');
	}
    
    
    public function editmyoffice(){
        $this->load->model('clientsquery');
        $adata=$this->clientsquery->load_client();
        $output=$this->clientsquery->load_offices_select();
        $this->zilla_auth_model->loadmenu();
        $this->load->view('edit-data-myoffice',$adata);
        $this->load->view('footer');
    }
    
    public function edit(){
        $this->load->model('clientsquery');
        $adata=$this->clientsquery->load_client();
        $output=$this->clientsquery->load_offices_select();
        $manager_idraw=$this->input->get('id');
        $manager_id=$this->clientsquery->load_mymanager($manager_idraw);
        $adata['select']=$output;
        $output=$this->clientsquery->load_managers();
        $adata['select2']=$output;
        $adata['select3']=$manager_id;
        $this->load_site->load_admin('edit-data',$adata);
    }
    
    public function saveedit(){
        $this->load->model('clientsquery');
        $this->clientsquery->saveedit();
        
    }
    public function successedit(){
        redirect('/clients/','refresh');
    }
    public function failuser(){
        echo $this->load->model('clientsquery','',TRUE);
    	$this->zilla_auth_model->loadmenu();
        echo '<h4>There is already a user with that <b>username</b>';
		echo $this->load->view('clients','',TRUE);
		echo $this->clientsquery->load_sorted_clients();
		echo $this->load->view('footer','',TRUE);
    }
    public function delete(){
        $this->load->model('clientsquery');
        $this->clientsquery->deleteclient();
    }
    public function failemail(){
        echo $this->load->model('clientsquery','',TRUE);
        $this->zilla_auth_model->loadmenu();
        echo '<h4>There is already a user with that <b>email</b>';
		echo $this->load->view('clients','',TRUE);
		echo $this->clientsquery->load_sorted_clients();
		echo $this->load->view('footer','',TRUE);
    }
}
