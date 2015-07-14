<?php

class Officequery extends CI_Model{

	public function load_offices(){
	$query = $this->db->get('offices');
		foreach($query->result() as $row){
			echo '<tr style="text-align:center"><td>'.$row->id.'</td><td>'.$row->name.'</td><td>'.$row->city.'</td><td>'.$row->plan.'</td>
			<td><a href="/officelist/edit?id='.$row->id.'" class="btn btn-warning btn-mini">Edit</a> <a href="/officelist/delete?id='.$row->id.'" class="btn btn-danger btn-mini">Delete</a></td></tr>';
		}
		echo '</table>
		</div>
	</div>
</div>';
	}
	
	public function delete_office(){
	$id=$this->input->get('id');
		echo $id;
		$this->db->delete('offices',array('id' => $id));
		redirect('/officelist','refresh');
        //header('Location: /officelist/');
	}
	
    
    public function load_office_ratings(){
        $query=$this->db->get('offices');
        $offices=array();
        $output="";
        foreach($query->result() as $row){
            $totalpnts=0;
            $query2=$this->db->get_where('zilla_users',array('company'=>$row->name));
            foreach($query2->result() as $row2){
                $totalpnts++;
            }
            array_push($offices,array('officeid'=>$row->id,'officename'=>$row->name,'city'=>$row->city,'pnts'=>$totalpnts));
        }
        
        foreach($offices as $row){
            $id=$row['officeid'];
            $officename=$row['officename'];
            $city=$row['city'];
            $pnts=$row['pnts'];
            $output=$output."<tr><td>$id</td><td>$officename</td><td>$city</td><td>$pnts</td></tr>";
        }
        
        return $output;
    }
	public function insert_office(){
	$officename=$this->input->post('name');
	$officecity=$this->input->post('city');
	
		
		$data = array('name' => $officename, 'city' => $officecity);
		$this->db->insert('offices',$data);
		redirect('/officelist/successaddnew/');
        //header('Location: /officelist/successaddnew/');
	}
	
	public function edit_save_office(){
		$id = $this->input->get('id');
		$login = $this->input->post('officelogin');
		$password = $this->input->post('officepassword');
		$name=$this->input->post('name');
		$city=$this->input->post('city');
        $plan=$this->input->post('plan');
		$data = array('login' => $login, 'name' => $name, 'city' => $city,'plan'=>$plan);
		$this->db->where('id',$id);
		$this->db->update('offices',$data);
        redirect('/officelist/saveeditsuccess','refresh');
		//header('Location:/officelist/saveeditsuccess');
	}
}