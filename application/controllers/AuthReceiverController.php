<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
=============== Receiver Controller for Authenticated Receivers ================
*/
class AuthReceiverController extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("AuthReceiverModel");
        if ($this->session->userdata('type') != "receiver"){
            redirect(base_url('/login'),'refresh'); 
        }
    }

/*
=============== Function to get placed blood requests ==========================
*/

    public function placedRequest(){
        $data['requestedSample']=$this->AuthReceiverModel->placedRequest();
        $this->load->view('templates/receiver/include/header');
        $this->load->view('templates/receiver/placed-request',$data);
    }

/*
=============== Function to Logout =============================================
*/

    public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url(''),'refresh');
    }

    
    
    
}
