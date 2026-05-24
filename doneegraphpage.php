<?php
        $dataPoints = array();
include('security.php');
?>
<!doctype html>
<html lang="en">

<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Donees' Graph</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="stylesheet" type="text/css" href="mainpage/assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="mainpage/assets/css/font-awesome.css">

<link rel="stylesheet" href="mainpage/assets/css/templatemo-breezed.css">

<link rel="stylesheet" href="mainpage/assets/css/owl-carousel.css">

<link rel="stylesheet" href="mainpage/assets/css/lightbox.css">


<link href="page/main.css" rel="stylesheet"></head>
<body>
  
   <!-- ***** Preloader Start ***** -->
   <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
               <span>Food Liberty</span>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                            </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="images/adminwall7.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a href="editadmin.php">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button></a>
                                            <a href="editadmin.php">
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button></a>

                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>

                                            <div tabindex="-1" class="dropdown-divider"></div><a href="adminlogout.php">
                                            <button type="button" tabindex="0" class="dropdown-item">Log Out</button>
                                      </a></div>
                                    </div>
                                </div>

                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                    <?php
                                     
                                     $connection = mysqli_connect("localhost","root","");
                                     $db = mysqli_select_db($connection,'mainproject');
                                     
                                         $query = "SELECT * FROM `donors` WHERE usertype='2'"; 
                                         $query_run = mysqli_query($connection,$query);
                                         if ($row = mysqli_fetch_array($query_run))
                                         {
                                           ?>
                                    <?php echo $row['donorfullname']; ?>
                                    <?php }?>
                                    </div>
                                    <div class="widget-subheading">
                                        Administrator
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>              <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                    <span>Food Liberty</span>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="adminmainpage.php">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Components</li>
                                <li>
                                    
                                <li>
                                    <a href="donorgraphpage.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-graph3"></i>Graph Analysis
                                    </a>  
                                </li>
                                <li>
                                    <a href="admindoneelist.php">
                                        <i class="metismenu-icon pe-7s-back"></i>Back
                                    </a>  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                    <a href="admindoneelist.php"><i class="pe-7s-compass icon-gradient bg-mean-fruit">
                                        </i></a>
                                    </div>
                                    <div>Donees' Graph Analysis 
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                        
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            
                        


                      <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                             Registrated Donees Report According to States
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                    <div class="widget-chat-wrapper-outer">
                                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                           <?php include('graph2.php'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>

                        
                       

                        
                                                
                       
                       
                   
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    
    
<script type="text/javascript" src="page/assets/scripts/main.js"></script>

 <!-- jQuery -->
 <script src="mainpage/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="mainpage/assets/js/popper.js"></script>

<!-- Plugins -->
<script src="mainpage/assets/js/owl-carousel.js"></script>
<script src="mainpage/assets/js/scrollreveal.min.js"></script>
<script src="mainpage/assets/js/slick.js"></script> 
<script src="mainpage/assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="mainpage/assets/js/custom.js"></script>


</body>
</html>
