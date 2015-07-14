<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dailyupdates extends CI_Controller {
    
public function index(){
    
    //Update Subscription Statuses
$this->db->where('group',3);
$query=$this->db->get('zilla_users');
foreach($query->result() as $row){
    $credit_day=$row->podpiska_days;
    $credit_month=$row->podpiska;
    if($credit_month >= 0){
    if($credit_day <= 1){
        $credit_day=30;
        $credit_month--;
    }else{
        $credit_day--;
    }
    
    $data=array('podpiska'=>$credit_month,'podpiska_days'=>$credit_day);
    $this->db->where('id',$row->id);
    $this->db->update('zilla_users',$data);
    }
}



    //Update Analytics Messaging
    $today=date("Y-m-d",time());
    
    $this->db->where('date',$today);
    echo $today;
    $query=$this->db->get('analytics');
    foreach($query->result() as $row){
        $subject=$row->text;
        $author=$row->author;
        $this->db->where('group',3);
        $query2=$this->db->get('zilla_users');
        foreach($query2->result() as $row2){
            mail($row2->email,'Analytics Update '.$today,"Author: $author $subject");
            $tell=$row2->tel;
            $sms = trim(preg_replace('/\s\s+/', ' ', $subject));
            $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://smsc.ru/sys/send.php?login=makhtanov&psw=libertos&charset=utf-8&phones=$tell&mes=$sms");
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($ch, CURLOPT_USERAGENT, 'Service CompZilla');
                $temp = curl_exec($ch);
                echo $temp;
                curl_close($ch);
        }
    }
    
    
    
    
    
}

}
