<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'ReceiverController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
============================= Hospital's Routes ============================
*/

$route['hospitalRegister'] = 'HospitalController/registerHospital';
$route['hospitalLogin'] = 'HospitalController/index';
$route['hospitalLoginSubmit'] = 'HospitalController/hospitalLoginSubmit';
$route['hospitalRegisterSubmit'] = 'HospitalController/hospitalRegisterSubmit';

/*
============================= Receiver's Routes ============================
*/

$route['register'] = 'ReceiverController/registerReceiver';
$route['login'] = 'ReceiverController/index';
$route['receiverLoginSubmit'] = 'ReceiverController/receiverLoginSubmit';
$route['receiverRegisterSubmit'] = 'ReceiverController/receiverRegisterSubmit';
$route['getBloodSample/:any'] = 'ReceiverController/getBloodSample';

/*
======================= Authenticated Hospital's Routes =====================
*/

$route['hospital/home'] = 'AuthHospitalController/home';
$route['hospital/add'] = 'AuthHospitalController/addBlood';
$route['hospital/addBloodSubmit'] = 'AuthHospitalController/addBloodSubmit';
$route['hospital/show-blood'] = 'AuthHospitalController/showBlood';
$route['hospital/showBloodSubmit'] = 'AuthHospitalController/showBloodSubmit';
$route['hospital/deleteBloodSubmit'] = 'AuthHospitalController/deleteBloodSubmit';
$route['hospital/sample'] = 'AuthHospitalController/requestBloodSample';
$route['hospital/logout'] = 'AuthHospitalController/logout';
