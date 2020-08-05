<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
=============== Hospital Model for Authenticated Hospitals ==========================
*/

class AuthHospitalModel extends CI_Model
{

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('type') != "hospital"){
            redirect(base_url('/hospitalLogin'),'refresh'); 
        }
    }

/*
=============== Function to get count of all request =======================
*/
    public function getCountOfRequests(){
        $hospital_id = $this->session->userdata('id');
        return $this->db->query("select * from requested_sample as rs inner join
         blood_info as binfo on rs.blood_info_id=binfo.id where binfo.hospital_id='$hospital_id'")->num_rows();

    }

/*
=============== Function to add blood-info in DB ====================================
*/
    public function addBlood($bloodData){
    	return $this->db->insert('blood_info', $bloodData);
    }

/*
=============== Function to add Show Blood ====================================
*/
    public function showBlood(){
    	$hospital_id = $this->session->userdata('id');
    	$this->db->where('hospital_id', $hospital_id);
        return $this->db->get('blood_info');
    }

/*
=============== Function to Update Blood-info ====================================
*/
    public function updateBlood($id,$unit){
    	return $this->db->query("update blood_info set unit='$unit' where id=$id");
    }

/*
=============== Function to Delete Blood-info ====================================
*/
    public function deleteBlood($id){
    	$this->db->where('id', $id);
        return $this->db->delete('blood_info');
    }

/*
=============== Function to Get Requested Blood sample data =======================
*/
    public function requestBloodSample(){
        $hospital_id = $this->session->userdata('id');
        return $this->db->query("select * from requested_sample as rs 
            inner join blood_info as binfo  on rs.blood_info_id=binfo.id  
            inner join receiver as r on rs.receiver_id=r.id
            where binfo.hospital_id=$hospital_id order by rs.id DESC");

    }

}