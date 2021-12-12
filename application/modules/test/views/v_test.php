<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- shortcut icon section start -->
    <link rel="shortcut icon" href="<?php echo base_url("assets/images/icon-topbar.png"); ?>">
    <!-- materialize css file include -->
    <link rel="stylesheet" href="<?Php echo base_url("assets/libraries/materialize/css/materialize.css"); ?>">
    <!-- font-awesome-5.15.4 css file include -->
    <link rel="stylesheet" href="<?php echo base_url("assets/libraries/font-awesome/css/all.css");?>">
    <!-- custome css file section -->
    <!-- <style type="text/css">
        body{color: #0000008A}
        #top_bar{background: #0daf18;}
        #nav-wrapper{background: #0daf18 !important;}
        #menu-bar-wrapper{background: red !important;}
    </style> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css")?>">
</head>
<body>
    <!-- topbar section start -->
    <div id="top_bar">
        <span>&nbsp;&nbsp;&nbsp; <span class="fa fa-phone"></span> Mobile No.0123456789 &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;<span class="fa fa-envelope"></span > Email info@ecomurz.com </span><span class="right"> <span class="fa fa-gift"></span>  Gift Card &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; Sell On Shop &nbsp;&nbsp;&nbsp;</span>
    </div>
    <!-- end topbar section -->
    
    <!-- navbar section start -->
    <nav id="nav-wrapper">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo left">Ecomurz</a>
            <!-- right menu section start -->
            <ul class="right">
                <li><a href=""> <span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;&nbsp; Cart</a></li>
                <li><a href=""> <span class="fa fa-sign-in-alt"></span>&nbsp;&nbsp;&nbsp; SignUp</a></li>
                <li><a href=""> <span class="fa fa-sign-in-alt"></span> &nbsp;&nbsp;&nbsp; Login</a></li>
            </ul>
            <!-- right menu section end -->
        </div>
    </nav>
    <!-- end navbar section -->

    <!-- menu bar section start -->
    <nav id="menu-bar-wrapper">
       <div class="menu-bar-wrapper">
           <ul id="list-menu-bar" class="left">
           <li><a href="">Electronics</a></lic>
           <li><a href="">Men Fashion</a></li>
           <li><a href="">Women Fashion</a></li>
           <li><a href="">Home & Furniture</a></li>
           <li><a href="">Sports & Satationary</a></li>
           </ul>
       </div> 
    </nav>
    <!-- end menu bard section -->

    <!-- main content -->
    <!-- <h1>Welcome to Ecomurz</h1> -->
    <!-- end main content -->

    <!-- jquery js file include -->
    <script type="text/javascript" src="<?php echo base_url("assets/libraries/jquery/js/jquery-3.6.0.min.js")?>"></script>
    <!-- materialize css file include -->
    <script type="text/javascript" src="<?php echo base_url("assets/libraries/materialize/js/materialize.js")?>"></script>
    <!-- font-awesome-5.15.4 js file include -->
    <script type="text/javascript" src="<?php echo base_url("assets/libraries/font-awesome/js/all.js");?>"></script>
</body>
</html>