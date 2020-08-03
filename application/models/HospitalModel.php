<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HospitalModel extends CI_Model
{

/*
=============== Function to insert data in Hospital table ====================================
*/
	public function hospitalRegisterSubmit($array){
       return $this->db->insert('hospital', $array);
    }

/*
=============== Function to Fetch data using Email From Receiver table =======================
*/
	function check_user($user_data){
	    $this->db->select("*");
	    $this->db->from("hospital");
	    $this->db->where("email",$user_data['email']);

	    return $this->db->get();
	}

	
}
