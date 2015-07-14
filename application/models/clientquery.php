<?php

class Clientquery extends CI_Model{
	public function saveclientinfo(){
		$pword=$this->input->post('password');
		$email=$this->input->post('email');
		$contact=$this->input->post('connumber');
		$id = $this->ion_auth->get_user_id();
		if($id){
		
			$data = array('password'=>md5($pword),'tel'=>$contact,'email'=>$email);
			$this->db->where('id',$id);
			$this->db->update('users',$data);
			
		}
        redirect('/client/profile/','refresh');
		//header('Location: /client/profile/');
	}
    
    public function notifications(){
        $this->db->where('id',$this->zilla_auth_model->get_user_id());
        $query=$this->db->get('zilla_users',1,0);
        
        foreach($query->result() as $row){
            $credit_month=$row->podpiska;
            $credit_day=$row->podpiska_days;
            
            if($credit_month >= 0){
                if($credit_day < 8){
                    $paymentnoti="Your account subscription is about to expire in $credit_day days";
                }else{
                    $paymentnoti="You are subscribed";
                }
            }
            else{
                $paymentnoti="Not Subscribed";
            }
        }
        
        $noti=$paymentnoti;
        return $noti;
    }
    
    
    public function pay(){
        $id=$this->zilla_auth_model->get_user_id();
        $cardholder=$this->input->post('cardholder');
        $cardtype=$this->input->post('cardtype');
        $amt=$this->input->post('creditamt');
        $datenow=date("Y.m.d",time());
        $data=array('UserID'=>$id,'CardHolder'=>$cardholder,'Date'=>$datenow,'CardType'=>$cardtype,'Amt'=>$amt);
        $this->db->insert('transactions',$data);
        
        $this->db->where('id',$id);
        $query=$this->db->get('zilla_users',1,0);
        foreach($query->result() as $row){
            $credit=$row->podpiska;
            $credit_day=$row->podpiska_days;
            if($credit_day<=1){
                $credit_day=30;
            }
        }
        if($credit >=0){
        $credit=$credit+$amt-1;
        }else{
            $credit=$credit+$amt;
        }
        $this->db->where('id',$id);
        $this->db->update('zilla_users',array('podpiska'=>$credit,'podpiska_days'=>$credit_day));
        redirect('/client/profile','refresh');
        //header('Location: /client/profile/');
    }
    
    
    
    public function loadPaymentForm($totalorder){
        $query=$this->db->get('transactions');
        $id=0;
        $temp=0;
        foreach($query->result() as $row){
            $temp=$row->TransactionId;
            if($id < $temp){
                $id=$temp;
            }
        }
        
        // регистрационная информация (логин, пароль #1)
        // registration info (login, password #1)
        $mrh_login = "trade-expert";
        $mrh_pass1 = "trade_expert8448";

        // номер заказа
        // number of order
        $inv_id = $id+1;

        // описание заказа
        // order description
        $inv_desc = "Subscription Payment for trade-expert.pro";

        // сумма заказа
        // sum of order
        $out_summ = $totalorder;

        // тип товара
        // code of goods
        $shp_item = "2";

        // предлагаемая валюта платежа
        // default payment e-currency
        $in_curr = "";

        // язык
        // language
        $culture = "en";

        // формирование подписи
        // generate signature
        $crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");
        
        $userid=$this->zilla_auth_model->get_user_id();
        $data=array('mrh_login'=>$mrh_login,'mrh_pass1'=>$mrh_pass1,'inv_id'=>$inv_id,'inv_desc'=>$inv_desc,'out_summ'=>$out_summ,'shp_item'=>$shp_item,'in_curr'=>$in_curr,'culture'=>$culture,'crc'=>$crc,'uid'=>$userid);
        return $data;
    }
   
    
    
    //Transaction functions
    public function loadtransactions(){
        $id=$this->zilla_auth_model->get_user_id();
        $this->db->where('UserId',$id);
        $output="";
        $query=$this->db->get('transactions');
        foreach($query->result() as $row){
           
            
            $output.="<tr><td>$row->Date</td><td>$row->CardHolder</td><td>$row->Amt</td></tr>";
        }
        
        return $output;
    }
    
}