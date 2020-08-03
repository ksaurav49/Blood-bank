<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
=============== Hospital Controller for Authenticated Hospitals ===================
*/

class AuthHospitalController extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("AuthHospitalModel");
        if ($this->session->userdata('type') != "hospital"){
            redirect(base_url('/hospitalLogin'),'refresh'); 
        }
    }

/*
=============== Function to load Hospital Home ====================================
*/

    public function home(){
    	$this->load->view('templates/hospital/home');
    }

/*
================== Function to  load Hospital Add Blood Page =======================
*/

    public function addBlood(){
        $this->load->view('templates/hospital/include/header');
        $this->load->view('templates/hospital/add_availability');
    }

/*
=============== Function For Hospital AddBlood Submit ===============================
*/

    public function addBloodSubmit(){
        if($this->form_validation->run('add_blood') == FALSE){
            $this->addBlood();
        }else{
            $hospital_id = $this->session->userdata('id');
            $bloodData = array(
            'type' => $this->input->post("grp"),
            'unit' => $this->input->post("qnt"),
            'plasma_level' => $this->input->post("plasma_level"),
            'rbc_level' => $this->input->post("rbc_level"),
            'wbc_level'=> $this->input->post("wbc_level"),
            'sugar_level'=> $this->input->post("sugar_level"),
            'hospital_id'=> $hospital_id,         
            ); 

            $result=$this->AuthHospitalModel->addBlood($bloodData); 
            if($result > 0){
                $this->session->set_flashdata('success', "yes");
            } else {
                $this->session->set_flashdata('success', "no");
            }
            
            redirect(base_url('hospital/add'),'refresh');
        }
    }
   

/*
=============== Function For Hospital Logout ====================================
*/

    public function showBlood(){
        $data['bloodData']=$this->AuthHospitalModel->showBlood();
        $this->load->view('templates/hospital/include/header');
        $this->load->view('templates/hospital/show-blood',$data);
    } 

/*
=============== Function For Update Blood-info ====================================
*/

    public function showBloodSubmit(){
        $qnt = $this->input->post("qnt");
        $id = $this->input->post("id");
        if($this->AuthHospitalModel->updateBlood($id,$qnt)){
            echo "yes";
        } else{
            echo "no";
        }

    }

/*
=============== Function For Delete Blood-info ====================================
*/
    public function deleteBloodSubmit(){
        $id = $this->input->post("id");
        if($this->AuthHospitalModel->deleteBlood($id)){
            echo "yes";
        } else{
            echo "no";
        }

    }

/*
=============== Function For Requested Blood Sample ===============================
*/
    public function requestBloodSample(){
        $data['requestedBloodData']=$this->AuthHospitalModel->requestBloodSample();
        $this->load->view('templates/hospital/include/header');
        $this->load->view('templates/hospital/blood_request',$data);

    }

    
/*
=============== Function For Hospital Logout ====================================
*/

    public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url('/hospitalLogin'),'refresh');
    }

    
    
    
}
