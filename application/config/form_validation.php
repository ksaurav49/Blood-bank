<?php 
$config = array(
        'hospital_signup' => array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email|xss_clean|is_unique[hospital.email]',
                        'errors' => array('is_unique'=>'Email Already exist.')
                ),
                array(
                        'field' => 'phone',
                        'label' => 'Mobile Number',
                        'rules' => 'trim|required|regex_match[/^[0-9]{10}$/]|xss_clean'
                ),
                array(
                        'field' => 'address',
                        'label' => 'Address',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'cnfPassword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|matches[password]|xss_clean'
                )
        ),
        'receiver_signup' => array(
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email|xss_clean|is_unique[receiver.email]',
                        'errors' => array('is_unique'=>'*NOTE: Email Already exist.')
                ),
                array(
                        'field' => 'phone',
                        'label' => 'Mobile Number',
                        'rules' => 'trim|required|regex_match[/^[0-9]{10}$/]|xss_clean'
                ),
                array(
                        'field' => 'address',
                        'label' => 'Address',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'cnfPassword',
                        'label' => 'Password Confirmation',
                        'rules' => 'trim|matches[password]|xss_clean'
                ),
                array(
                        'field' => 'blood_grp',
                        'label' => 'Blood Group',
                        'rules' => 'trim|required|xss_clean'
                )
        ),
        'login' => array(
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email|xss_clean',
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required|xss_clean'
                )
        ),
        'add_blood' => array(
                array(
                        'field' => 'grp',
                        'label' => 'Blood Group',
                        'rules' => 'trim|required|xss_clean',
                ),
                array(
                        'field' => 'plasma_level',
                        'label' => 'Plasma Level',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'rbc_level',
                        'label' => 'RBC Level',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'wbc_level',
                        'label' => 'WBC Level',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'sugar_level',
                        'label' => 'Sugar Level',
                        'rules' => 'trim|required|xss_clean'
                ),
                array(
                        'field' => 'qnt',
                        'label' => 'Quantity',
                        'rules' => 'trim|required|xss_clean'
                )
        )
);

?>