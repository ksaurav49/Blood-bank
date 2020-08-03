<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Signup</title>

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
                <a href="<?=BASE_URL?>hospital/sample">
                    <img class="header-logo" src="<?=BASE_URL?>static/img/logo.png" alt="">
                    <span class="brand-name">Blood Bank</span>
                </a>
            </div>
            <div class="right-header-content">
                <a href="<?=BASE_URL?>hospital/add">
                    <button class="add-availability" type="submit">+ ADD AVAILABILITY</button>
                </a>
                <span>
                    <a href="<?=BASE_URL?>hospital/show-blood">
                        <i class="material-icons notification-icon">notifications_none</i>
                    </a>
                    <!-- <span class="notification-badge">3</span> -->
                </span>
                <?php 
                    if ($this->session->userdata('type') == "hospital"){ ?>
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
                
            </div>
        </div>
    </div>
    <!-- header end   ===============================================================================-->
