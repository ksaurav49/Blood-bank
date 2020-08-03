
<body>

    <div class="receiver-sheet receiver-sheet-sm">

        <div class="left-box">
            <div class="signup-banner">
                <img src="<?=BASE_URL?>static/img/logo.png" alt="" class="logo-blood-drop">
                <span class="signup-head">Login</span>
                <span class="signup-sub-head">Welcome back !</span>
            </div>
            <div class="mark">
                <div class="check-border"><i class="material-icons check-svg">check</i></div>
            </div>
        </div>

        <div class="right-box">
            <i class="material-icons label-icons cancel-cross">cancel</i>
            <form action="<?=BASE_URL?>hospitalLoginSubmit" method="post" onsubmit="return loginValidation()">
                <div class="inputs-boxes login-content">                                                                      
                    <div class="inputs" >
                        <input type="text" name="email" value="<?php echo set_value('email'); ?>" id="email" required>
                        <label id="email_label" for="email"><i class="material-icons label-icons"> mail</i>&nbsp; EMAIL ID
                        :</label>
                        <span id="email_text" class="error"></span>
                        <div class="inputs">
                            <input  type="text" name="password" value="<?php echo set_value('password'); ?>" id="password" required>
                            <label title="Password Should be greater than 5 character" id="password_label" for="password"><i class="material-icons label-icons"> lock</i>&nbsp;
                            PASSWORD</label>
                            <span id="password_text" class="error"></span>
                        </div>
                    </div>
                </div>

                <span class="forgot-password">forgot password ?</span>
                <div class="login-button-group" >
                    <button class="active-button" type="submit">Login</button>
                    <span class="or-divider">or</span>
                    <a class="a" href="<?=BASE_URL?>hospitalRegister">
                        <button type="button" class="non-active-button">Register</button>
                    </a>
                    <span class="register-dialog">Not registerd ? 
                        <a class="a" href="<?=BASE_URL?>hospitalRegister">register here</a>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <?php     
    if($this->session->flashdata('success')){
        $msg=$this->session->flashdata('success');
    if($msg == "no"){  ?>
         <script> swal("Opps!!!", "Wrong Password..", "error");</script>
    <?php }else{ ?>
        <script>swal("opps !!!", "Hospital not registered...", "error");</script>
   <?php     
    }
    }

?>

</body>

</html>