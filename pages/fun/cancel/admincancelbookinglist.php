<?php
        $dataPoints = array();
include('security.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Booking List</title>
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
                            <input type="text" class="search-input" placeholder="Type to search" data-table="customers-list">





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
                                    <?php echo $_SESSION['username']; ?>
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
                                    <a href="admindonorlist.php">
                                        <i class="metismenu-icon pe-7s-anchor"></i>Donors
                                    </a>  
                                </li>
                                <li>
                                    <a href="admindoneelist.php">
                                        <i class="metismenu-icon pe-7s-compass"></i>Donees
                                    </a>  
                                </li>
                                <li>
                                    <a href="adminfoodlist.php">
                                        <i class="metismenu-icon pe-7s-wine"></i>Posted Food List
                                    </a>  
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-shopbag"></i>
                                        Bookings
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li>
                                            <a href="adminbookinglist.php">
                                                <i class="metismenu-icon"></i>
                                                Active
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admincancelbookinglist.php" class="mm-active">
                                                <i class="metismenu-icon">
                                                </i>Cancelled
                                            </a>
                                        </li>
                                       
                                    </ul>
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
                                        <i class="pe-7s-shopbag icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>List of Bookings
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
                                    <div class="card-header">Cancelled Bookings
                                        <div class="btn-actions-pane-right">
                                           
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover customers-list">
                                            <thead>
                                            <tr>
                                            <th style="text-align:center;">No.</th>
			<th style="text-align:center;">Excess Food Name</th>
			<th style="text-align:center;">Quantity Booked</th>
			<th style="text-align:center;">Posted by</th>
			<th style="text-align:center;">Booked by</th>
      <th style="text-align:center;">Cancelled Time</th>
			<th style="text-align:center;">Action</th>
      
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            

                                            <?php
		require_once('connectiondonor.php');
        $result=$conn->prepare("SELECT c.* , a.* , b.* FROM donors c, donee a, cancelbooking b WHERE a.donee_ID=b.donee_ID AND c.donor_ID=b.donor_ID ");
        $result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td style="text-align:center;"><label><?php echo $row['cancel_ID']; ?></label></td>
			<td style="text-align:center;"><label><?php echo $row['excessfoodname']; ?></label></td>
			<td style="text-align:center;"><label><?php echo $row['bookingquantity']; ?></label></td>
			<td style="text-align:center;"><label><?php echo $row['outletname']; ?></label></td>
			<td style="text-align:center;"><label><?php echo $row['ngoname']; ?></label></td>
      <td style="text-align:center;"><label><?php echo date('h:i:s a',strtotime($row['cancel_time'])); ?>, <?php echo date('d-m-Y',strtotime($row['cancel_time'])); ?></label></td>

      <td class="text-align:center">
                                                   
        <form action="fooddelete.php" method="post">
        <input type="hidden" name="cancel_ID" value="<?php echo $row['cancel_ID'] ?>">
        <input type="submit" name="delete" class="btn btn-primary btn-sm" value="Delete">
        </form></td>
		</tr>
		
		<script type="text/javascript">
function booking_id(booking_ID)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='adminbookinglist.php?delete_id='+booking_ID;
     }
}
</script>                                
                                            </tr>
                                           <?php } ?>
                                            </tbody>
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
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
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