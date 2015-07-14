<?php
class Recommendationquery extends CI_Model{
    public function load_all_rec(){
        $query=$this->db->get('recommendations');
        
        $output="";
        foreach($query->result() as $row){
            $output = $output . "<tr><td>$row->Id</td><td>$row->Heading</td><td>$row->Content</td><td>$row->BuySell</td><td>$row->DateUpdated</td></tr>";        
        }
        return $output;   
    }
    
    public function save_new_rec(){
        $head = $this->input->post('head');
        $content=$this->input->post('content');
        $buy=$this->input->post('buy');
        $sell=$this->input->post('sell');
        $cash;
        if($buy && $sell){
            $cash = $buy - $sell;
        }else if($buy && !$sell){
            $cash = $buy;
        }
        else{
            $cash=-1*$sell;
        }
        $datenow = date('Y-m-d');
        $data = array('Heading' => $head, 'Content' => $content, 'BuySell' => $cash, 'DateUpdated' => $datenow);
        $this->db->insert('recommendations',$data);
        redirect('recommendation/savenewrecsuccess/','refresh');
        //header ('Location: /recommendation/savenewrecsuccess/');
    }
}