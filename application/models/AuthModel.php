<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model
{
    public function __construct() {
        parent::__construct();
                if (!$this->session->userdata('email')){
                redirect(base_url(''),'refresh'); 
            }
    }
    public function addUser($array){
    	// print_r($array);
    	$email = $this->session->userdata('email');
    	$data = $this->db->query("select * from user where email='$email'");
    	foreach ($data->result() as $row)
			{
		        $status= $row->status;
	        
			}
			$status--;
			if($status < 0){
				echo "string";
				return 2;
			}else{
				$this->db->query("update user set status='$status' where email='$email'");
				$result=$this->db->insert('user', $array);
				if($result){
					return 0;
				}else{
					return 1;
				}
			}
    	
     
    }

        function check_username_email($user_data){
    $this->db->select("*");
    $this->db->from("user");
    $this->db->where("email",$user_data['email']);

    $query_data = $this->db->get()->row_array();
    return $query_data;
}
    
}

?>