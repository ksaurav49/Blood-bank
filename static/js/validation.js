/* 
	Function for login validation
*/
function loginValidation() {

  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if(isValidEmail(email) && isValidPassword(password)){

  	return true;

  }else{

  	return false;

  }
}

/* 
	Function for Hospital Registration validation
*/
function hospitalRegisterValidation(){

	var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();
    var cnfPassword = document.getElementById("cnfPassword").value.trim();
	var phone = document.getElementById("phone").value.trim();
	var name = document.getElementById("name").value.trim();

	if(isValidName(name) && isValidPhone(phone) && isValidEmail(email) 
		 && isValidPassword(password) && isPasswordSame(password,cnfPassword)){

			return true;

	}else{

		return false;

	}

}

/* 
	Function for Receiver Registration validation
*/
function receiverRegisterValidation(){

	var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();
    var cnfPassword = document.getElementById("cnfPassword").value.trim();
	var phone = document.getElementById("phone").value.trim();
	var name = document.getElementById("name").value.trim();
	var blood_grp_element = document.getElementById("blood_grp");
	var blood_grp = blood_grp_element.options[blood_grp_element.selectedIndex].value;

	if(isValidName(name) && isValidPhone(phone) && isValidEmail(email) 
		&& isBloodGrpSelected(blood_grp) && isValidPassword(password)
		 && isPasswordSame(password,cnfPassword)){

			document.getElementById("email_text").innerHTML = "";
			return true;

	}else{

		return false;

	}

}

/* 
	Function for Phone number validation(10 digit)
*/
function isValidPhone(phone){

	var phoneno = /^\d{10}$/;
	if(!phone.match(phoneno)){
		document.getElementById("phone_label").style.color = "red";
		document.getElementById("phone").style.borderColor = "red";
		document.getElementById("phone_text").style.display = "block";
		document.getElementById("phone_text").innerHTML = "*NOTE: Inavlid phone number format";
		return false;
	}else{
		document.getElementById("phone_label").style.color = "#679FFF";
		document.getElementById("phone").style.borderColor = "#679FFF";
		document.getElementById("phone_text").style.display = "none";
		return true;
	}

}

/* 
	Function for Email format verification
*/

function isValidEmail(email){

	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.match(mailformat)){
		document.getElementById("email_label").style.color = "#679FFF";
		document.getElementById("email_text").style.display = "none";
		document.getElementById("email").style.borderColor = "#679FFF";
		return true;
	}else{
		document.getElementById("email_label").style.color = "red";
		document.getElementById("email").style.borderColor = "red";
		document.getElementById("email_text").style.display = "block";
		//document.getElementsByClass("email-error").style.display = "none";
		document.getElementById("email_text").innerHTML = "*NOTE: Inavlid Email format";
		return false;
	}

}

/* 
	Function for Valid Name
*/
function isValidName(name){
	var regex = /^[a-zA-Z ]{2,30}$/;

    if (regex.test(name)) {
    	document.getElementById("name_label").style.color = "#679FFF";
		document.getElementById("email").style.borderColor = "#679FFF";
		document.getElementById("name_text").style.display = "none";
        return true;
    }
    else {
    	document.getElementById("name_label").style.color = "red";
		document.getElementById("name").style.borderColor = "red";
		document.getElementById("name_text").style.display = "block";
		document.getElementById("name_text").innerHTML = "*NOTE: Inavlid Name";
        return false;
    }

}

/* 
	Function for Password Validation
*/
function isValidPassword(pass){

	if(pass === "" || pass === null || pass.length < 5){

		document.getElementById("password_label").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
		document.getElementById("password_text").style.display = "block";
		document.getElementById("password_text").innerHTML = "*NOTE: Password should be of 5 character";
		return false;

	}else{
		document.getElementById("password_label").style.color = "#679FFF";
		document.getElementById("password").style.borderColor = "#679FFF";
		document.getElementById("password_text").style.display = "none";
		return true;
	}

}

/* 
	Function for Password confirmation
*/
function isPasswordSame(pass1,pass2){

	if(pass1 !== pass2){

		document.getElementById("password_label").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
		document.getElementById("cnfPassword_label").style.color = "red";
		document.getElementById("cnfPassword").style.borderColor = "red";
		document.getElementById("cnfPassword_text").style.display = "block";
		document.getElementById("cnfPassword_text").innerHTML = "*NOTE: Two password didn't matched";
		return false;

	}else{
		document.getElementById("password_label").style.color = "#679FFF";
		document.getElementById("cnfPassword").style.borderColor = "#679FFF";
		document.getElementById("cnfPassword_label").style.color = "#679FFF";
		document.getElementById("cnfPassword_text").style.display = "none";
		document.getElementById("password_text").style.display = "none";
	}
	
	return true;

}

/* 
	Function for Blood Group validation
*/
function isBloodGrpSelected(blood_grp){
	if(blood_grp === "" || blood_grp === null){
		document.getElementById("blood_grp_text").style.display = "block";
		document.getElementById("blood_grp_text").innerHTML = "*NOTE: Select Valid Blood Group";
		return false;
	}else{
		document.getElementById("blood_grp_text").style.display = "none";
		return true;
	}
	
}
