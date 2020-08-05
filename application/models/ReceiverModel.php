<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReceiverModel extends CI_Model
{

/*
=============== Function to insert data in Receiver table ====================================
*/

	public function receiverRegisterSubmit($array){
       return $this->db->insert('receiver', $array);
    }

/*
=============== Function to Fetch data using Email From Receiver table =======================
*/

	function check_user($user_data){
	    $this->db->select("*");
	    $this->db->from("receiver");
	    $this->db->where("email",$user_data['email']);

	    return $this->db->get();
	}

/*
=============== Function For Displaying Blood Sample ===============================
*/
    public function getBloodSample($type){
    	return $this->db->query("select binfo.*,h.id as h_id,h.name,h.mobile,h.address from blood_info as binfo 
            inner join hospital as h on binfo.hospital_id=h.id where binfo.type='$type'");
    }
	
}
