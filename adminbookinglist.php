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
    <title>Booking List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" type="text/css" href="mainpage/assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="mainpage/assets/css/font-awesome.css">

<link rel="stylesheet" href="mainpage/assets/css/templatemo-breezed.css">

<link rel="stylesheet" href="mainpage/assets/css/owl-carousel.css">

<link rel="stylesheet" href="mainpage/assets/css/lightbox.css">

<link href="page/main.css" rel="stylesheet">

<style> 
  
    .pagination {   
        list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: space-between;
				box-sizing: border-box; 
    }   
    .pagination a {   
        box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    }   
    </style>
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
                                    <a href="adminbookinglist.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-shopbag"></i>Bookings
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
                                    <div class="card-header">Bookings
                                        <div class="btn-actions-pane-right">
                                           
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover customers-list">
                                            <thead>
                                            <tr>
                                            <th style="text-align:center;">No.</th>
			<th style="text-align:center;">Excess Food Image</th>
			<th style="text-align:center;">Excess Food Name</th>
			<th style="text-align:center;">Quantity Booked</th>
			<th style="text-align:center;">Posted by</th>
			<th style="text-align:center;">Booked by</th>
			<th style="text-align:center;">Booked Time</th>
            <th style="text-align:center;">Status</th>
			<th style="text-align:center;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            

                                            <?php
		require_once('connectiondonor.php');

        $per_page_record = 4;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record; 

        $result=$conn->prepare("SELECT c.* , a.* , b.* FROM donors c, donee a, booking b WHERE a.donee_ID=b.donee_ID AND c.donor_ID=b.donor_ID order by booking_datetime DESC LIMIT $start_from, $per_page_record");
        $result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td style="text-align:center;"><label><?php echo $row['booking_ID']; ?></label></td>
			<td style="text-align:center;"><img width="auto" src="images/<?php echo $row['excessfoodimage']?>" width="250" height="100" /></td>
			<td style="text-align:center;"><label><?php echo $row['excessfoodname']; ?></label></td>
			<td style="text-align:center;"><label><?php echo $row['bookingquantity']; ?></label></td>
			<td style="text-align:center;"><label><a href="viewdonorbyadmin2.php?donor_ID=<?=$row['donor_ID']?>"><?php echo $row['outletname']; ?> </a></label></td>
			<td style="text-align:center;"><label><a href="viewdoneebyadmin.php?donee_ID=<?=$row['donee_ID']?>"><?php echo $row['ngoname']; ?></a></label></td>
            <td style="text-align:center;"><label><?php echo date('H:i A, d/m/y',strtotime($row['booking_datetime'])); ?></label></td>
            <td style="text-align:center;"><label><?php
              $booking_status =$row['booking_status'];                         

if ($booking_status == "0") {
    echo"<div style='font-size:1rem;color:#60cb28;'>";
    echo "Processing ";
    echo "</div>";
    
} else {
    echo"<div style='font-size:1rem;color:#f44336;'>";
    echo "Completed";
    echo "</div>";
}
?></label></td>
      <td class="text-center">
                       
      <a href="editbookingbyadmin.php?booking_ID=<?=$row['booking_ID']?>" class="btn btn-success">Edit</a> <br><br>

        <form action="bookingdelete.php" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <input type="submit" name="delete" class="btn btn-primary btn-sm" value="Delete">
        </form>
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





                                                </td>
                                            </tr>
                                            <tr>
                                               
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </div>
                                                            </div>
                                                           
                                            </tr><?php } ?>
                                            </tbody>
                                        </table>
    <div class="pagination">    
      <?php  

        $query = "SELECT COUNT(*) FROM booking";     
        $query_run = mysqli_query($connection,$query);   
        $row = mysqli_fetch_array($query_run);    
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='adminbookinglist.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='adminbookinglist.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='adminbookinglist.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='adminbookinglist.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  

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
<script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'adminbookinglist.php?page='+page;   
    }   
  </script>  
</body>
</html>