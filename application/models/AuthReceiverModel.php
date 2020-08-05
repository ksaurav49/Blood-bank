<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
=============== Receiver Model for Authenticated Receivers ==========================
*/

class AuthReceiverModel extends CI_Model
{

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('type') != "receiver"){
            redirect(base_url('/login'),'refresh'); 
        }
    }



/*
=============== Function to Get Placed Blood Request data =======================
*/
    public function placedRequest(){
        $receiver_id = $this->session->userdata('receiver_id');
        return $this->db->query("select * from requested_sample as rs inner join
         blood_info as binfo on rs.blood_info_id=binfo.id inner join
          hospital as h on binfo.hospital_id=h.id 
          WHERE rs.receiver_id='$receiver_id' order by rs.id DESC");

    }



}