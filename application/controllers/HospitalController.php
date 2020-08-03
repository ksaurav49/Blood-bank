<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HospitalController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("HospitalModel");
    }

/*
=============== Function For Hospital Login View ====================================
*/

	public function index(){
        $this->load->view('templates/hospital/include/header');
         $this->load->view('templates/hospital/hospital_login');
    }

/*
=============== Function For Hospital Register View ==================================
*/

    public function registerHospital(){
        $this->load->view('templates/hospital/include/header');
         $this->load->view('templates/hospital/hospital_register');
    }

/*
=============== Function For Hospital Login Submit ====================================
*/

    public function hospitalRegisterSubmit(){

        if($this->form_validation->run('hospital_signup') == FALSE){
           $this->registerhospital();
        }else{
            
            $hospitalData = array(
            'name' => $this->input->post("name"),
            'email' => $this->input->post("email"),
            'mobile' => $this->input->post("phone"),
            'password' => hash_password($this->input->post("password")),
            'address'=> $this->input->post("address")
            ); 

            $result=$this->HospitalModel->hospitalRegisterSubmit($hospitalData); 
            if($result > 0){
                $this->session->set_flashdata('success', "yes");
            } else {
                $this->session->set_flashdata('success', "no");
            }
            
            redirect(base_url('hospitalRegister'),'refresh');
        }      
    }

/*
=============== Function For Hospital Register Submit ====================================
*/

    public function hospitalLoginSubmit(){
        if($this->form_validation->run('login') == FALSE){
            $this->index();
        }else{
            $hospitalData = array(
                'email' => $this->input->post("email"),
                'password' => hash_password($this->input->post("password"))
            ); 
            $data=$this->HospitalModel->check_user($hospitalData);
           if($data->num_rows() > 0){
                $row = $data->row();
                if(verify_password($this->input->post("password"),$row->password)){
                    $hospitalSessionData = array(
                      'isLoggedIn' => TRUE,
                      'type' => "hospital",
                      'email' => $row->email,
                      'name' => $row->name,
                      'phone'=> $row->mobile,
                      'address'=> $row->address,
                      'id'=> $row->id
                    );
                    $this->session->set_userdata($hospitalSessionData);
                    redirect(base_url('hospital/add'),'refresh');
                }else{
                    $this->session->set_flashdata('success', "no");
                    $this->index();
                }

            }else{
                $this->session->set_flashdata('success', "notExist");
                $this->index();
            }
        }
    }
    
    
}