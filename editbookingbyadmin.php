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
    <title>Edit Donees' List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
   
    <link rel="stylesheet" type="text/css" href="mainpage/assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="mainpage/assets/css/font-awesome.css">

<link rel="stylesheet" href="mainpage/assets/css/templatemo-breezed.css">

<link rel="stylesheet" href="mainpage/assets/css/owl-carousel.css">

<link rel="stylesheet" href="mainpage/assets/css/lightbox.css">

<link href="page/main.css" rel="stylesheet">

</head>
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
                            <input id="searchbar" onkeyup="search_postcode()"type="text" class="search-input" placeholder="Search by Username">

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

                                            <div tabindex="-1" class="dropdown-divider"></div><a href="logout.php">
                                            <button type="button" tabindex="0" class="dropdown-item">Log Out</button>
                                      </a></div>
                                    </div>
                                </div>

                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                    <?php
                                     
                                     $connection = mysqli_connect("localhost","root","");
                                     $db = mysqli_select_db($connection,'mainproject');
                                     
                                     $query = "SELECT * FROM donors WHERE usertype='2' ORDER BY donor_ID ";
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
        </div>       
             <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
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
                                    <a href="admin.php">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Components</li>
                                <li>
                                    
                                <li>
                                    <a href="editdoneebyadmin" class="mm-active">
                                        <i class="metismenu-icon pe-7s-settings"></i>Edit Details
                                    </a>  
                                </li>
                                <li>
                                    <a href="adminbookinglist.php">
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
                                        <i class="pe-7s-compass icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Booking Details Setting
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
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Food Details
                                        <div class="btn-actions-pane-right">
                                           
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover customers-list">
                                        <?php
                                        if(isset($_GET['booking_ID']))
                                        {

                                            $booking_ID = $_GET['booking_ID'];

				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,'mainproject');

						$query = "SELECT * FROM `booking` WHERE booking_ID='$booking_ID' LIMIT 1"; 
						$query_run = mysqli_query($connection,$query);

					if($row = mysqli_fetch_array($query_run))
					{
						?>

			<center>
					<form action = "" method="POST" >
						
				
          <div class="food-menu-box">
					
              <br><img width="190" class="rounded-circle"src="images/<?php echo $row['excessfoodimage']?>"  alt=""><br><br><br><br>
          
              <p class="food-menu-box"><mark><label>Booking ID: <?php echo $row['booking_ID']; ?></label></mark></p>
              

              <div class="col-md-12"><label class="labels">Food Name</label><input type="text" class="form-control" name="excessfoodname" id="excessfoodname" value="<?php echo $row['excessfoodname']?>" placeholder= "Enter new name" required/></div><br> <br>
							
					    <div class="col-md-12"><label class="labels">Booking Quantity</label><input type="text" class="form-control" name="bookingquantity" id="bookingquantity" value="<?php echo $row['bookingquantity']?>" placeholder= "Enter new booking quantity" required/></div><br> <br>


							<div class="col-md-12"><label class="labels">Pick up time from:<?php echo $row['pickfrom']?>
							</div><br>

							<div class="col-md-12"><label class="labels">Pick by: <?php echo $row['pickby']?>
							</div><br>

						  <input type="hidden" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>" placeholder="donor_ID" required/>
              <input type="hidden" name="donee_ID" id="donee_ID" value="<?php echo $row['donee_ID']?>" placeholder="donee_ID" required/>

						<div class="mt-5 text-center"><input type="submit" name="update" value="Update Data"></div><br> <br>
						</form>
            <hr size="7" width="100%" color="black">  <br> <br>
            </div>
			<?php
                            }
                            else
                            {
                                echo "<h4>No Record Found</h4>";
                            }
                        }
                        
                        ?>		




			</center>



      <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['update']))
{
	
	$booking_ID = $_POST['booking_ID'];
	$excessfoodimage = $_POST['excessfoodimage'];
  $excessfoodname = $_POST['excessfoodname'];
  $bookingquantity = $_POST['bookingquantity'];
  $booking_datetime = date('Y-m-d H:i:s');
  $donee_ID = date('donee_ID');
  $donor_ID = date('donor_ID');
  $username = date('username');
  $excessfood_ID = $_POST['excessfood_ID'];
  $pickfrom = $_POST['pickfrom'];
  $pickby = $_POST['pickby'];

	$query = "UPDATE `booking` SET excessfoodimage ='$_POST[excessfoodimage]',excessfoodname ='$_POST[excessfoodname]',bookingquantity = '$_POST[bookingquantity]',booking_datetime ='$_POST[booking_datetime]',pickfrom ='$_POST[pickfrom]',pickby ='$_POST[pickby]',quantity ='$_POST[quantity]',food_status ='$_POST[food_status]' where booking_ID='$_POST[booking_ID]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Data Updated'); window.location = 'adminbookinglist.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>


                                          
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                   
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="page/assets/scripts/main.js"></script>

<script>
         function search_postcode() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('food-menu-box');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
 </script>

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