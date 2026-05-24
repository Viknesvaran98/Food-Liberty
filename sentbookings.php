<?php
include 'dbConfig.php';

session_start();
if(isset ($_SESSION["doneeusername"]))
    $doneeusername= $_SESSION["doneeusername"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
<title> Sent Bookings </title>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Liberty</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
    <style>
        /** Preloader */
#loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
}
#loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #3498db;

    -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
    animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

    z-index: 1001;
}
#loader:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #e74c3c;

    -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
    animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
}

#loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #f9c922;

    -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
      animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
}

@-webkit-keyframes spin {
    0%   { 
        -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);  /* IE 9 */
        transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
    }
    100% {
        -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);  /* IE 9 */
        transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
    }
}
@keyframes spin {
    0%   { 
        -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(0deg);  /* IE 9 */
        transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
    }
    100% {
        -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: rotate(360deg);  /* IE 9 */
        transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
    }
}

#loader-wrapper .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;
    background: #222222;
    z-index: 1000;
    -webkit-transform: translateX(0);  /* Chrome, Opera 15+, Safari 3.1+ */
    -ms-transform: translateX(0);  /* IE 9 */
    transform: translateX(0);  /* Firefox 16+, IE 10+, Opera */
}

#loader-wrapper .loader-section.section-left {
    left: 0;
}

#loader-wrapper .loader-section.section-right {
    right: 0;
}

/* Loaded */
.loaded #loader-wrapper .loader-section.section-left {
    -webkit-transform: translateX(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(-100%);  /* IE 9 */
            transform: translateX(-100%);  /* Firefox 16+, IE 10+, Opera */

    -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  
            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}

.loaded #loader-wrapper .loader-section.section-right {
    -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(100%);  /* IE 9 */
            transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */

-webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);  
    transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
}

.loaded #loader {
    opacity: 0;
    -webkit-transition: all 0.3s ease-out;  
            transition: all 0.3s ease-out;
}
.loaded #loader-wrapper {
    visibility: hidden;

    -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateY(-100%);  /* IE 9 */
            transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */

    -webkit-transition: all 0.3s 1s ease-out;  
            transition: all 0.3s 1s ease-out;
}
/* end Preloader */
#searchbar{
     margin-left: auto;
     padding:15px;
     border-radius: 10px;
   }
 
   input[type=text] {
      width: 15%;
      -webkit-transition: width 0.13s ease-in-out;
      transition: width 0.13s ease-in-out;
   }
   #searchbarr{
     margin-left: auto;
     padding:15px;
     border-radius: 10px;
   }
   h2 {
    color: #38761D;
    font-size: 3rem;
    margin-bottom: 2%;
}

h3 {
    color: #86878A;
    font-size: 2rem;
    margin-bottom: 2%;
}
.notification {
  background-color: white;
  color: red;
  text-decoration: none;
  padding: 3px 17px;
  position: relative;
  display: inline-block;
  border-radius: 0px;
}

.notification:hover {
    color:rgba(0,0,0,0.7);background:rgba(0,0,0,0.15);
   
}

.notification .badge {
    position: absolute;
    top: -20px;
    right: -20px;
    padding: 0.2px 18px;
    border-radius: 90%;
    background-color: red;
    color: white;
}
.mm-active{
    color:rgba(0,0,0,0.7);
    background:rgba(0,0,0,0.15);
    border-radius:10%;}
        </style>
</head>

<body>
      <!-- Preloader -->
 <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/adminwall6.png" alt="FL Logo" class="img-responsive">
                </a>
               
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="doneemainpage.php" class="notification">Home</a>
                    </li>
                    <li>
                        <a href="sentbookings.php" class="notification mm-active">Sent Bookings</a>
                    </li>
                    <li>
                        <?php 
                                     $connection = mysqli_connect("localhost","root","");
                                     $db = mysqli_select_db($connection,'mainproject');
                                     
                                         $query = "SELECT * FROM `donee` WHERE doneeusername='$doneeusername' LIMIT 1"; 
                                         $query_run = mysqli_query($connection,$query);
                                         if ($row = mysqli_fetch_array($query_run))
                                         {
                                           ?>
                    <a href="doneedetail.php" class="notification"><?php echo $row['fullname']; ?></a>
                    <?php }?>
                    </li>
                    <li>
                        <a href="doneelogout.php" class="notification">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <div id="incomplete">
    <section class="food-menu">
        <div class="container">
        <h2 class="text-left">Please check sent bookings.</h2>
        <h3 class="text-left">Please check completed bookings by clicking <a href="#completed">here.</a></h3>
        <input id="searchbar" onkeyup="search_postcode()" type="text"
        name="search" placeholder="Search by food name or outlet's name.."><br><br><br>
            
           <?php
		require_once('connectiondonor.php');

        $result=$conn->prepare("SELECT donors.*,booking.*,donee.* FROM donors JOIN booking JOIN donee WHERE donee.donee_ID=booking.donee_ID AND donors.donor_ID=booking.donor_ID AND booking_status = '0' order by booking_ID");
        $result->execute();
        $row = $result->fetch();
		
        for($i=0; $row = $result->fetch(); $i++){
            if($doneeusername==$row['doneeusername']){
	?>
		<tr>
			<div class="food-menu-box">
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
            <p class="food-detail"><label>Booking ID: <?php echo $row['booking_ID']; ?></label></p>
            <p class="food-detail"><label>Donee ID: <?php echo $row['donee_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
			<p class="food-detail"><label>Quantity Requested: <?php echo $row['bookingquantity']; ?> packets</label></p>
			<p class="food-detail"><label>Booked Time: <?php echo date('d-m-Y h:i:s a',strtotime($row['booking_datetime'])); ?></label></p>
			<p class="food-detail"><label>Posted By: <a style="font-weight: bold;" href="donordetailfordonee2.php?donor_ID=<?=$row['donor_ID']?>"> <?php echo $row['donorfullname']; ?></label></a></p>
			<p class="food-detail"><label>Outlet's Name: <a style="font-weight: bold;" href="donordetailfordonee2.php?donor_ID=<?=$row['donor_ID']?>"> <?php echo $row['outletname']; ?> </label></a></p>
			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>
            <p class="food-detail"><label>Pick up time: <?php echo date('h:i:s a',strtotime($row['pickfrom'])); ?> - <?php echo date('h:i:s a',strtotime($row['pickby'])); ?></label></p>

<!-- if booking still process available will shows processing -->
<?php
              $booking_status =$row['booking_status'];                         

if ($booking_status == "0") {
    echo"<div style='font-size:1rem;color:#60cb28;'>";
    echo "Status: Processing ";
    echo "</div>";
    
} else {
    echo"<div style='font-size:1rem;color:#f44336;'>";
    echo "Status: Completed";
    echo "</div>";
}
?><br><br>
<!-- end of if else statement -->


<a href="viewbookingbydonee.php?booking_ID=<?=$row['booking_ID']?>" class="btn btn-success">View</a> <br><br>


	   <!-- <form action="" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <th> <input type="submit" name="delete" class="btn btn-danger" value="Cancel Booking"></th>
        </form>-->

       
        
		</tr>
			
			
                </div>
            </div>
        		
		<?php }} ?>
            <div class="clearfix"></div>
        </div>

<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 

if(isset($_POST['delete']))
{
$excessfood_ID = $_POST['excessfood_ID'];
$booking_ID = $_POST['booking_ID'];
$quantity = $_POST['quantity'];
$bookingquantity = $_GET['bookingquantity'];

$query = "DELETE FROM booking WHERE booking_ID='$booking_ID' ";
$query_run = mysqli_query($connection, $query);
$update = "UPDATE `excessfood` SET quantity=quantity+'$bookingquantity' WHERE excessfood_ID='$excessfood_ID'";
$query_run2= mysqli_query($connection,$update);

if($query_run && $query_run2)
{
	echo "<script> alert('Booking Cancelled Successfully !!'); window.location = 'sentbookings.php' </script>";
	
}
else
{
	echo '<script> alert("Booking Not Cancel"); </script>';
}
}
?>


    </section>
    </div>
    <!-- fOOD Menu Section Ends Here -->


 <!-- social Section Starts Here -->
 <section class="social">
        <div class="container text-center">
        <br> <br> <br> <br>
        </div>
    </section>
    <!-- social Section Ends Here -->


<!-- Completed Section Starts Here -->
<div id="completed">
<section class="food-menu">
        <div class="container">
        <h2 class="text-left">Completed bookings.</h2> 
        <h3 class="text-left">Please check incomplete/recently sent bookings by clicking <a href="#incomplete">here.</a></h3>
        <input id="searchbarr" onkeyup="search_post()" type="text"
        name="search" placeholder="Search by food name or outlet's name.."><br><br><br>
            
           <?php
		require_once('connectiondonor.php');

        $result=$conn->prepare("SELECT donors.*,booking.*,donee.* FROM donors JOIN booking JOIN donee WHERE donee.donee_ID=booking.donee_ID AND donors.donor_ID=booking.donor_ID AND booking_status = '1' order by booking_datetime");
        $result->execute();
        $row = $result->fetch();
		
        for($i=0; $row = $result->fetch(); $i++){
            if($doneeusername==$row['doneeusername']){
	?>
		<tr>
			<div class="food-menu-box">
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
            <p class="food-detail"><label>Booking ID: <?php echo $row['booking_ID']; ?></label></p>
            <p class="food-detail"><label>Donee ID: <?php echo $row['donee_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
			<p class="food-detail"><label>Quantity Booked: <?php echo $row['bookingquantity']; ?> packets</label></p>
			<p class="food-detail"><label>Booked Time: <?php echo date('d-m-Y h:i:s a',strtotime($row['booking_datetime'])); ?></label></p>
			<p class="food-detail"><label>Posted By: <a style="font-weight: bold;" href="donordetailfordonee2.php?donor_ID=<?=$row['donor_ID']?>"> <?php echo $row['donorfullname']; ?></label></a></p>
			<p class="food-detail"><label>Outlet's Name: <a style="font-weight: bold;" href="donordetailfordonee2.php?donor_ID=<?=$row['donor_ID']?>"> <?php echo $row['outletname']; ?> </label></a></p>
			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>
            <p class="food-detail"><label>Pick up time: <?php echo date('h:i:s a',strtotime($row['pickfrom'])); ?> - <?php echo date('h:i:s a',strtotime($row['pickby'])); ?></label></p>

<!-- if booking still process available will shows processing -->
<?php
              $booking_status =$row['booking_status'];                         

if ($booking_status == "0") {
    echo"<div style='font-size:1rem;color:#60cb28;'>";
    echo "Status: Processing ";
    echo "</div>";
    
} else {
    echo"<div style='font-size:1rem;color:#f44336;'>";
    echo "Status: Completed";
    echo "</div>";
}
?><br>
<!-- end of if else statement -->




	   <!-- <form action="" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <th> <input type="submit" name="delete" class="btn btn-danger" value="Cancel Booking"></th>
        </form>-->

       
        
		</tr>
			
			
                </div>
            </div>
        		
		<?php }} ?>
            <div class="clearfix"></div>
        </div>


        </section>
</div>
    <!-- Completed Section Ends Here -->





    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Powered by <a href="donee_main_page.php">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
    <script type="text/javascript" src="pages/new/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="pages/new/js/templatemo-script.js"></script>  
   <script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>
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

<script>
 function search_post() {
    let input = document.getElementById('searchbarr').value
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
</body>
</html>

<!--download template from https://colorlib.com/wp/template/login-form-v12/.-->