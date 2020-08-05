<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Login</title>

    <!-- link to css file -->
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>static/css/responsive-style.css" />

    <!-- link to google icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- link to Js File -->
    <script src="<?=BASE_URL?>static/js/validation.js"></script>
    <script src="<?=BASE_URL?>static/js/sweet.js"></script>

</head>

    <!-- header start ===============================================================================-->
    <div class="header-parent-box">
        <div class="header-parent-container">
            <div class="left-header content">
                <a href="<?=BASE_URL?>">
                    <img class="header-logo" src="<?=BASE_URL?>static/img/logo.png" alt="">
                    <span class="brand-name">Blood Bank</span>
                </a>
            </div>
            <div class="right-header-content">
                <a href="<?=BASE_URL?>receiver/placedRequest">
                    <button class="active-button small-font">Requested Samples</button>
                </a>
                <?php
                if ($this->session->userdata('type') == "receiver"){
                ?>
                    <a href="<?=BASE_URL?>receiver/logout">
                        <button class="non-active-button">Logout</button>
                    </a>
                <?php } else { ?>
                    <a href="<?=BASE_URL?>login">
                    <button class="non-active-button">Sign in</button>
                </a>
                <?php } ?>
                
                <a href="<?=BASE_URL?>hospitalLogin">
                    <div class="tooltip">
                        <i class="material-icons toggle-off-icon">toggle_off</i>
                        <span class="tooltiptext">switch to hospital</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- header end   ===============================================================================-->
