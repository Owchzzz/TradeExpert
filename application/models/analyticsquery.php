<?php

class Analyticsquery extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->zilla_auth_model->validate();
        
    }
    
    public function loaddateselect(){
        $month=date('m',time());
        $day=date('d',time());
        $year=date('Y',time());
        $dateselect="";
        $months=0;
        while($months < 4){
        $maxdays=31;
        if($month%2>0){
            $maxdays=31;
        }else{
            $maxdays=30;
        }
        if($month==2){
            $maxdays=29;
        }
        do{
            $draw="$year-$month-$day";
            
            $dateselect.="<option>$draw</option>";
            $day++;
        }while($day <= $maxdays);
        
        if($month < 12){
            $month++;
        }else{
            $month=1;
            $year++;
        }
        $day=1;
        $months++;
        }
        
        return $dateselect;
    }

public function save_new_analytics(){
	$this->load->helper('date');
	$content = $this->input->post('content');
	$userdata = $this->zilla_auth_model->get_user_id();
    $dnow=$this->input->post('date');
   
	$data = array('text' => $content, 'date' => $dnow, 'author' => $userdata);
	echo $content;
	echo $userdata;
	$this->db->insert('analytics',$data);
	
	$query = $this->db->get('clients');
	$this->db->where('podpiska',1);
	foreach($query->result() as $row){
	mail($row->email,'Analytics Notification',$content,'Notification from cabinet.trade-expert.pro');
	$tell=$row->tel;
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://smsc.ru/sys/send.php?login=tradeexpert&psw=tradeexpertpass&charset=utf-8&phones=$tell&mes=".$content);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Service CompZilla');
    $temp = curl_exec($ch);
    curl_close($ch);
			
	}
    redirect('/analytics/history/','refresh');
	//header('Location: /analytics/savesuccessnew/');
}
	
	public function load_history_analytics(){
	$this->load->helper('date');
		$query=$this->db->get('analytics');
			foreach($query->result() as $row){
				echo '<tr><td>'.$row->author.'</td><td>'.$row->text.'</td><td>'.$row->date.'</td></tr>';
		
		}
		echo '</table></div></div></div>';
	}

}