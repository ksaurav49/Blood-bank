<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function hash_password($password){
   return password_hash($password, PASSWORD_BCRYPT);
}
function verify_password($password,$hash){
	if(password_verify($password, $hash)){
		return true;
	}else{
		return false;
	}
}

?>