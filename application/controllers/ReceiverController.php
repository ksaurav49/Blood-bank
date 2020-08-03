<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReceiverController extends CI_Controller {

/*
=============== Function For Receiver Login View ====================================
*/
	public function index(){
         $this->load->view('templates/receiver/include/header');
         $this->load->view('templates/receiver/receiver_login');
    }

/*
=============== Function For Receiver Register View ==================================
*/

    public function registerReceiver(){
         $this->load->view('templates/receiver/include/header');
         $this->load->view('templates/receiver/receiver_register');
    }


/*
=============== Register Submit Function For Receiver ================================
*/
    public function receiverRegisterSubmit(){
        $this->form_validation->set_error_delimiters('<p class="email-error">', '</p>');
        if($this->form_validation->run('receiver_signup') == FALSE){
           $this->registerReceiver();
        }
        else{
            
            $receiverData = array(
            'name' => $this->input->post("name"),
            'email' => $this->input->post("email"),
            'mobile' => $this->input->post("phone"),
            'password' => hash_password($this->input->post("password")),
            'address'=> $this->input->post("address"),
            'b-group'=> $this->input->post("blood_grp")
            ); 

            $result=$this->ReceiverModel->receiverRegisterSubmit($receiverData); 
            if($result > 0){
                $this->session->set_flashdata('success', "yes");
            } else {
                $this->session->set_flashdata('success', "no");
            }
            
            redirect(base_url('register'),'refresh');
        }      
    }
/*
=============== Login Submit Function For Receiver ====================================
*/

    public function receiverLoginSubmit(){

        if($this->form_validation->run('login') == FALSE){
            $this->index();
        }else{

            $receiverData = array(
                'email' => $this->input->post("email"),
                'password' => hash_password($this->input->post("password"))
            ); 

            $data=$this->ReceiverModel->check_user($receiverData);

           if($data->num_rows() > 0){
                $row = $data->row();

                if(verify_password($this->input->post("password"),$row->password)){

                    $receiverSessionData = array(
                      'isLoggedIn' => TRUE,
                      'type' => "receiver",
                      'email' => $row->email,
                      'name' => $row->name,
                      'phone'=> $row->mobile,
                      'address'=> $row->address
                    );

                    $this->session->set_userdata($receiverSessionData);

                }else{
                    $this->session->set_flashdata('success', "no");
                    redirect(base_url(''),'refresh');
                }

                redirect(base_url('home'),'refresh');

            }else{
                $this->session->set_flashdata('success', "notExist");
                redirect(base_url(''),'refresh');
            }

        }
    }

/*
=============== Function For Displaying Blood Sample ===============================
*/
    public function getBloodSample(){
        
        $type = $this->uri->segment(2);
        $data['getBloodSample']=$this->ReceiverModel->getBloodSample($type);
        $data['active_uri'] = $type;
        $this->load->view('templates/hospital/include/header');
        $this->load->view('templates/hospital/blood_request',$data);

    }
    
}