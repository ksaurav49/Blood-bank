<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank | Hospital</title>

    <!-- link to css file -->
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>static/css/responsive-style.css" />

    <!-- link to google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- link to Js File -->
    <script src="<?=BASE_URL?>static/js/validation.js"></script>
    <script src="<?=BASE_URL?>/static/js/sweet.js"></script>

</head> 

<body>
    <!-- header start ===============================================================================-->

    <div class="header-parent-box">
        <div class="header-parent-container">
            <div class="left-header content">
                <a href="<?=BASE_URL?>">
                    <img class="header-logo" src="<?=BASE_URL?>static/img/logo.png" alt="">
                    <span class="brand-name">Blood Bank</span>
                </a>
            </div>
            <div class="right-header-content wide-right-header">
                <a href="<?=BASE_URL?>hospital/show-blood">
                    <button class="add-availability" type="submit">+ ADD AVAILABILITY</button>
                </a>
                
                <?php 
                    if ($this->session->userdata('type') == "hospital"){ ?>
                    <a href="<?=BASE_URL?>hospital/sample">
                        <button class="active-button small-font">Requests <span class="request-badge"><?=$count?></span></button>
                    </a>
                    <!-- <a href="<?=BASE_URL?>hospital/show-blood">
                        <button class="non-active-button">Show Blood</button>
                    </a> -->
                         <a href="<?=BASE_URL?>hospital/logout">
                            <button class="non-active-button">Logout</button>
                        </a>
                <?php    } else{
                ?>
                        <a href="<?=BASE_URL?>hospitalLogin">
                            <button class="non-active-button">Sing in</button>
                        </a>
                <?php 
                    }
                ?>
                <a href="<?=BASE_URL?>login">
                    <div class="tooltip hospital-tooltip">
                        <i class="material-icons hospital-toggle-off-icon">toggle_on</i>
                        <span class="tooltiptext hospital-tooltiptext">switch to receiver</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- header end   ===============================================================================-->
