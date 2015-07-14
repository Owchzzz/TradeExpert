<?php

class Clientsquery extends CI_Model{
	
	function __construct()
    {
        parent::__construct();
	}
    
    //Load Client my office
    public function loadmyoffice(){
    $id=$this->zilla_auth_model->get_user_id();
        $this->db->where('id',$id);
        $query=$this->db->get('zilla_users',1,0);
        $output="";
        $count=0;
        foreach($query->result() as $row){
            $office=$row->company;
            $this->db->where('company',$office);
            $query2=$this->db->get('zilla_users');
            $count++;
            foreach($query2->result() as $row2){
                $uname=$row2->username;
                $name=$row2->name;
                $output.="<tr><td>$count</td><td>$uname</td><td>$name</td><td>$row2->company</td><td><a class=\"btn btn-warning\" href=\"/clients/editmyoffice?id=$row2->id\">Edit</a><a class=\"btn btn-danger\" href=\"/clients/delete?id=$row2->id\">Delete</a></td></tr>";
            }
        }
        return $output;
    }
    
    public function load_managers(){
        $this->db->where('group',4);
        $query=$this->db->get('zilla_users');
        $output="";
        foreach($query->result() as $row){
            $manager=$row->username;
            $output.="<option>$manager</option>";
        }
        return $output;
    }
    
    //Load individual client data
    public function load_client(){
        $id=$this->input->get('id');
        echo $id;
        $this->db->where('id',$id);
        $query=$this->db->get('zilla_users');
        foreach($query->result() as $row){
        $data=array('username'=>$row->username,'pword'=>$row->password,'ofis'=>$row->company , 'email'=>$row->email,'fname'=>$row->name,'subs'=>$row->podpiska,'tel'=>$row->tel);
        }
        return $data;
    }
    //loads offices
    public function load_offices_select(){
        $query=$this->db->get('offices');
        $offices = "";
        foreach($query->result() as $row){
            $offname=$row->name;
            $offices=$offices."<option>$offname</option>";
        }
        return $offices;
    }
    
    
    //Saves an Edit
    public function saveedit(){
        $user=$this->input->post('username');
        $pass=$this->input->post('password');
        $pass=md5($pass);
        $name = $this->input->post('name');
        $ofis=$this->input->post('office');
        $subs=$this->input->post('subs');
        $manager=$this->input->post('manager');
        $this->db->where('username',$manager);
        $query=$this->db->get('zilla_users',1,0);
        foreach($query->result() as $row)
        {
            $manager_id=$row->manager_id;
        }
        
        $id=$this->input->get('id');
        
        //$data=array('username'=>$user,'password'=>$pass,'name'=>$name,'company'=>$ofis,'podpiska'=>$subs,'manager_id'=>$manager_id);
          
        $data=array('username'=>$user,'password'=>$pass,'name'=>$name,'company'=>$ofis,'manager_id'=>$manager_id);
        $this->db->where('id',$id);
        $this->db->update('zilla_users',$data);
        foreach($data as $item){
            echo $item;
        }
        redirect('/clients/successedit/','refresh');
        //header('Location:clients/successedit/');
    }
    
    //Delete an edit
    public function deleteclient(){
        $id=$this->input->get('id');
        $this->db->where('id',$id);
        $this->db->delete('zilla_users');
        redirect('/clients/successedit/','refresh');
        //header('Location:clients/successedit/');
    }
    
	//Load All Clients Function
	public function load_all_clients(){
    $this->db->where('group',3);
    $query=$this->db->get('zilla_users');
	$count=1;
	foreach ($query->result() as $row)
	{
    	$login=$row->username;
    	$name=$row->name;
  	  	$datareg=$row->created_on;
		$office=$row->company;
		echo "<tr><td>$count</td><td>$login</td><td>$name</td><td>$office</td><td>$datareg</td><td><a class=\"btn btn-warning\" href=\"/clients/edit?id=$row->id\">Edit</a><a class=\"btn btn-danger\" href=\"/clients/delete?id=$row->id\">Delete</a></td></tr>";   
		$count++;
	}
		echo '</tbody></table></div></div>';
	}
	
	
	//Sorting Function
	public function load_sorted_clients(){
	$searchdata=array();
		
		//variable initialization
		$name=$this->input->post('familia');
		$tel=$this->input->post('tel');
		$office=$this->input->post('office');
		$subscription=$this->input->post('podpiska');
		$startreg=$this->input->post('startreg');
		$endreg=$this->input->post('endreg');
		$id=$this->input->post('id');
		$startregcb=$this->input->post('startregcb');
		$endregcb=$this->input->post('endregcb');
		$datecompare=false;
        
		//if checker
		if($name){
			$searchdata['name LIKE '] = '%'.$name.'%';
		}
		if($tel){
			$searchdata['tel'] = $tel;
		}
		if($office){
			$searchdata['company'] = $office;
		}
		if($subscription){
			if($subscription == "Active"){
                $subscription=1;
                
                $searchdata['podpiska >= '] = $subscription;
            }else{
                $subscrition=0;
                $searchdata['podpiska <= '] = $subscription;
            }
            
            
		}
		if($startreg){
			 $startreg = strtotime($startreg);
		}
		if($endreg){
			if($endregcb) $endreg = strtotimetime($endregcb);
		}
		if($id){
			$searchdata['id'] = $id;
		}
		
		//Date Comparisons
		if($startreg && $startregcb){
			$newdatestart=date('Y-m-d',$startreg);
			$searchdata['created_on >= '] = $newdatestart;
            echo $startreg;
		}
		else if($endreg && $endregcb){
			$newdateend=date('Y-m-d',$endreg);
			$searchdata['created_on <= '] = $endreg;
		}
		$searchdata['group']=3;
		$query=$this->db->get_where('zilla_users',$searchdata);
		$count=1;
		foreach($query->result() as $row){
            $registered = $row->created_on;
          
			echo "<tr><td>$count</td><td>$row->username</td><td>$row->name</td><td>$row->company</td><td>$registered</td><td><a class=\"btn btn-warning\" href=\"/clients/edit?id=$row->id\">Edit</a><a class=\"btn btn-danger\" href=\"/clients/delete?id=$row->id\">Delete</a></td></tr>";   
			$count++;
		}
		echo '</tbody></table></div></div>';
	}

}