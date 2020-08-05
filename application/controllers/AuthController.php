<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("AuthModel");
                if (!$this->session->userdata('email')){
                redirect(base_url(''),'refresh'); 
            }
    }

    public function home(){
    	$this->load->view('templates/home');
    }

public function userSubmit(){
        $name=$this->input->post("name");
        $email=$this->input->post("email");
        $pass=$this->input->post("pass");
        $phone=$this->input->post("phone");

        $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => md5($pass)
        ); 
        //print_r($data);
        if(!empty($this->AuthModel->check_username_email($data))){
        	$this->session->set_flashdata('msg', "User with this email exists");
        }else{
        	$result=$this->AuthModel->addUser($data); 
	       if($result == 2){
	            $this->session->set_flashdata('msg', "no");
	       } else {
	           $this->session->set_flashdata('msg', "yes");
	       }
       }
        
        redirect(base_url(''),'refresh');
        
}
public function logout(){
	$this->session->sess_destroy();
	redirect(base_url(''),'refresh');
}

    
    
    
}
