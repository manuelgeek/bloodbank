<?php
session_start();
include_once 'db.php';
include 'adminreg.php';

?>


<!DOCTYPE html>


<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Register an ADMIN</title>
  
  

  <link rel="stylesheet" href="../assets/css/material.css">
  <link rel="stylesheet" href="../assets/css/tether.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/socicon.min.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/add.css" type="text/css">
 
</head>
<body>
<section id="ext_menu-s">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="../index">BLOODBANK</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                    <li class="nav-item"><a class="nav-link link" href="../index">HOME</a></li>
                    <li class="nav-item"><a class="nav-link link" href="account">ACCOUNT</a></li>
                    <li class="nav-item"><a class="nav-link link" href="../camps">CAMPS</a></li>
                    <li class="nav-item"><a class="nav-link link" href="../search">SEARCH</a></li>
                    <li class="nav-item"><a class="nav-link link" href="../about">ABOUT</a></li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link link dropdown-toggle" href="https://mobirise.com/" data-toggle="dropdown-submenu" aria-expanded="false">HELP</a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="contact.html">CONTACT US</a><a class="dropdown-item" href="faqs.html">FAQS</a>
                      </div>
                      </li>
                      </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="https://mobirise.com">html website development</a></section><section class="mbr-section mbr-after-navbar" id="msg-box3-x" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Register an Admin</h3>
                    <form method="post" enctype="multipart/form-data">
                    <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <td style="vertical-align:top">
                    <table cellpadding="0" cellspacing="0" style="width:100%">
                      <?php
                        if(isset($msg1)){
                          echo $msg1;
                        }
          
                        ?>


<tr><td class="lefttd">First Name</td><td>: <input type="text" class="text-input" name="fname" required="required"   /></td></tr>
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<tr><td class="lefttd">Last Name</td><td>: <input type="text" class="text-input" name="lname" required="required"   /></td></tr>
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<tr><td class="lefttd">E-Mail</td><td>: <input type="email" class="text-input" name="email" required="required" /></td></tr>
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<tr><td class="lefttd">Password</td><td>: <input type="password" name="password" class="text-input" required="required"  title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<tr><td class="lefttd">Confirm Password</td><td>: <input type="password" class="text-input" name="con_password" required="required"  title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
<tr><td>&nbsp;</td><td><input type="submit" value="Sign Up"  name="btn-register" 
style="border:0px;  width:150px; height:40px; border-radius: 10px;  box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; background-color:#D50000; "></td></tr></table>
</td></tr>
<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
</table>
</form>
         
               
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-r" style="background-color: rgb(190, 22, 22); padding-top: 60px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="assets/images/logo.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>30300<br>Moi University, Eldoret</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>
Email: support@bloodbank.appslab.co.ke<br>
Phone: +245 719 772 274<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p><p><strong>Links</strong><br>
<a href="sendrequest.html" class="text-white">Send Request</a><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip"></a><br><a href="viewrequest.html" class="text-white">View Request</a><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip"></a><br><a href="camps.html" class="text-white">Camps</a><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip"></a><br><a href="about.html" class="text-white">About</a><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip"></a><br><a href="contact.html" class="text-white">Contact us</a><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip"></a></p><p></p>
            </div>

        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-3" style="background-color: rgb(190, 22, 22); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 Bloodbank.</p>
    </div>
</footer>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/tether.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/SmoothScroll.js"></script>
  <script src="../assets/js/jquery.viewportchecker.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/js/jquery.touchSwipe.min.js"></script>
  <script src="../assets/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>