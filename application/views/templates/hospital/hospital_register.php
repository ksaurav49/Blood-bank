

<body>
    <div class="receiver-sheet">
        <div class="left-box">
            <div class="signup-banner">
                <img src="<?=BASE_URL?>static/img/logo.png" alt="" class="logo-blood-drop">
                <span class="signup-head">Sign up</span>
                <span class="signup-sub-head">to use all features <br /> of the application</span>
            </div>
            <div class="mark">
                <div class="check-border"><i class="material-icons check-svg">check</i></div>
            </div>
        </div>
        <div class="right-box">
            <i class="material-icons label-icons cancel-cross">cancel</i>

            <div class="inputs-boxes">
                <form action="<?=BASE_URL?>hospitalRegisterSubmit" method="post" onsubmit="return hospitalRegisterValidation()">
                    <div class="inputs">
                        <input type="text"  id="name" required name="name"
                            value="<?php echo set_value('name'); ?>">
                        <label id="name_label" for="name">
                            <i class="material-icons label-icons">person</i>&nbsp; NAME :
                        </label>
                        <span class="error" id="name_text"></span>
                        <div>
                            <div class="inputs">
                                <input type="number" name="phone" value="<?php echo set_value('phone'); ?>" id="phone" required>
                                <label id="phone_label" for="phone">
                                    <i class="material-icons label-icons">smartphone</i>&nbsp; CONTACT NO.
                                </label>
                                <span class="error" id="phone_text" ></span>
                            </div>
                            <div class="inputs">
                                <input type="text" id="email" name="email"
                                    value="<?php echo set_value('email'); ?>" required>
                                <label id="email_label" for="email">
                                    <i class="material-icons label-icons"> mail</i>&nbsp; EMAIL ID:
                                </label>
                                <!-- <span class="error"><?php echo form_error('email'); ?></span> -->
                                <span class="error" id="email_text" ></span>
                                <?php   
                                  $s = form_error('email');
                                  if($s != "" || $s != null){ ?>
                                  <script> 
                                    swal("Sorry!!!", "User with this email is Already registered", "error");
                                  </script>
                                  <?php }
                                ?>
                                <div>
                                    <div class="inputs">
                                        <input type="text" name="address" id="address" value="<?php echo set_value('address'); ?>" required>
                                        <label id="address_label" for="address">
                                            <i class="material-icons label-icons"> home</i>&nbsp;ADDRESS :
                                        </label>
                                        <span class="error" id="address_text"></span>
                                    </div>
                                    <div class="inputs">
                                        <input type="password" id="password" name="password" required value="<?php echo set_value('password'); ?>">
                                        <label id="password_label" for="password">
                                            <i class="material-icons label-icons"> lock</i>&nbsp;PASSWORD
                                        </label>
                                        <span class="error" id="password_text"></span>
                                    </div>
                                    <div class="inputs">
                                        <input type="password" id="cnfPassword" name="cnfPassword" required value="<?php echo set_value('cnfPassword'); ?>">
                                        <label id="cnfPassword_label" for="cnfPassword">
                                            <i class="material-icons label-icons"> lock</i>&nbsp;CONFIRM PASSWORD
                                        </label>
                                        <span class="error" id="cnfPassword_text"></span>
                                    </div>
                                    
                                </div>
                            </div>



                            <div></div>
                        </div>

                    </div>


                </div>

                <div class="terms-condition"><input type="checkbox" required>&nbsp;&nbsp;&nbsp;I aggree to <a href="#">terms & conditions</a> </div>
                <div class="button-group">
                    <button class="active-button" type="submit">Register</button>
                </form>
                <span class="or-divider">or</span>
                <a class="a" href="<?=BASE_URL?>hospitalLogin">
                    <button class="non-active-button">Login</button>
                </a>
            </div>
        </div>
    </body>
<?php     
    if($this->session->flashdata('success')){
        $msg=$this->session->flashdata('success');
    if($msg == "yes"){  ?>
         <script> swal("Hospital added!!!", "See Blood Sample request now..", "success");</script>
    <?php }else if($msg == "no"){ ?>
        <script>swal("opps !!!", "Something went wrong...", "error");</script>
   <?php     
    }
    }

?>

</html>