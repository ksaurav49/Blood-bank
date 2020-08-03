<!DOCTYPE html>
<html>
<head>
	<title>Creator Shala</title>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>static/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="<?=BASE_URL?>static/js/validation.js"></script>
  <script src="<?=BASE_URL?>/bootstrap/js/sweet.js"></script>
  <script src="<?=BASE_URL?>/bootstrap/css/bootstrap.min.css"></script>
</head>
<body>
  <a style="width: 100px; padding-top: 10px; padding-right: 13px; float: right;font-size: 16px" class="btn btn-primary" href="<?=BASE_URL?>logout">Logout</a>
	<img class="wave" src="<?=BASE_URL?>static/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?=BASE_URL?>static/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="<?=BASE_URL?>userSubmit" method="post" onsubmit="return registerValidation()">
				<img src="<?=BASE_URL?>static/img/avatar.svg">
        <h4 class="title">Hello <?=$this->session->userdata('name')?></h4>
          <h6 class="title">Add a new User</h6>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Name</h5>
           		   		<input type="text" id="name" name="name" class="input" required="">
           		   </div>
           		</div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-envelope"></i>
                 </div>
                 <div class="div">
                    <h5>Email</h5>
                    <input type="email" id="email" name="email" class="input" required="">
                 </div>
              </div>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-mobile"></i>
                 </div>
                 <div class="div">
                    <h5>Phone</h5>
                    <input type="number" id="phone" name="phone" class="input" required="">
                 </div>
              </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" id="pass" name="pass" class="input" required="">
            	   </div>
            	</div>
            	
            	<input type="submit" name="submit" class="btn" value="Register">
            </form>
        </div>
    </div>
    <script type="<?=BASE_URL?>static/text/javascript" src="js/main.js"></script>
     <?php     
    if($this->session->flashdata('msg')){
        $msg=$this->session->flashdata('msg');
    if($msg == "yes"){  ?>
         <script> swal("User added!!!", " add more..", "success");</script>
    <?php }else{ ?>
        <script>swal("opps !!!", "Your Count is over...", "error");</script>
   <?php     
    }
    }

?>
</body>

</html>
