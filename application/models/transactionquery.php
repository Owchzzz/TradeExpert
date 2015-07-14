<?php

class Transactionquery extends CI_Model{
    public function load_transactions(){
        $query=$this->db->get('transactions');
        $output="";
        foreach($query->result() as $row){
            $dataarr=array();
            $output=$output.'<tr>';
            foreach($row as $item){
            $output=$output."<td>$item</td>";
            }
            $output=$output.'</tr>';
        }
        return $output;
    }   
}