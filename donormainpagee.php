<?php

session_start();
if(isset ($_SESSION["username"]))
    $username= $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />


    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!-- Title -->
<?php
                                     
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donors` WHERE username='$username' LIMIT 1"; 
    $query_run = mysqli_query($connection,$query);
    if ($row = mysqli_fetch_array($query_run))
    {
      ?>
<title>Welcome <?php echo $row['donorfullname']; ?></title>
<?php }?>
<!-- End of Title -->

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
    <style>
   

body {
    background-color: white;
}
       
   /* 
---------------------------------------------
Pre Loader
--------------------------------------------- 
*/

.js-preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #fff;
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    opacity: 1;
    visibility: visible;
    z-index: 9999;
    -webkit-transition: opacity 0.25s ease;
    transition: opacity 0.25s ease;
}

.js-preloader.loaded {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

@-webkit-keyframes dot {
    50% {
        -webkit-transform: translateX(96px);
        transform: translateX(96px);
    }
}

@keyframes dot {
    50% {
        -webkit-transform: translateX(96px);
        transform: translateX(96px);
    }
}

@-webkit-keyframes dots {
    50% {
        -webkit-transform: translateX(-31px);
        transform: translateX(-31px);
    }
}

@keyframes dots {
    50% {
        -webkit-transform: translateX(-31px);
        transform: translateX(-31px);
    }
}

.preloader-inner {
    position: relative;
    width: 142px;
    height: 40px;
    background: #fff;
}

.preloader-inner .dot {
    position: absolute;
    width: 16px;
    height: 16px;
    top: 12px;
    left: 15px;
    background: #8d99af;
    border-radius: 50%;
    -webkit-transform: translateX(0);
    transform: translateX(0);
    -webkit-animation: dot 2.8s infinite;
    animation: dot 2.8s infinite;
}

.preloader-inner .dots {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    margin-top: 12px;
    margin-left: 31px;
    -webkit-animation: dots 2.8s infinite;
    animation: dots 2.8s infinite;
}

.preloader-inner .dots span {
    display: block;
    float: left;
    width: 16px;
    height: 16px;
    margin-left: 16px;
    background: #8d99af;
    border-radius: 50%;
}    
.close {
  cursor: pointer;
  
  top: 100%;
  right: 0%;
  padding: 10px 14px;
  transform: translate(0%, -50%);
}

.close:hover {background: #bbb;}

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
    color:rgba(0,0,0,0.7);
    background:rgba(0,0,0,0.15);
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
    	<!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
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
                    <a href="donormainpagee.php" class="notification mm-active">Home
                    </a>
                    </li>
                    <li>
                        <a href="postedfood.php" class="notification">Posted Food</a>
                    </li>
                    <li>
                        <a href="postfood.php" class="notification">Post New Food</a>
                    </li>
                    <li>
                    <?php
                                     
                                     $connection = mysqli_connect("localhost","root","");
                                     $db = mysqli_select_db($connection,'mainproject');
                                     
                                         $query = "SELECT * FROM `donors` WHERE username='$username' LIMIT 1"; 
                                         $query_run = mysqli_query($connection,$query);
                                         if ($row = mysqli_fetch_array($query_run))
                                         {
                                           ?>
                        <a href="donordetail.php" class="notification"><?php echo $row['donorfullname']; ?></a>
                        <?php }?>
                    </li>
                    <li>
                        <a href="logout.php" class="notification">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- Viewing Booking Section Starts Here -->
    <div id="processing">
    <section class="food-menu">
        <div class="container">
        <h2 class="text-left"> Please check received bookings.</h2><br>
        <input id="searchbar" onkeyup="search_postcode()" type="text"
        name="search" placeholder="Search ..">
        <h3 class="text-left">Completed bookings <a href="#completed">here.</a></h3>
           <?php
		require_once('connectiondonor.php');
        

        $result=$conn->prepare("SELECT donors.*,booking.*,donee.* FROM donors INNER JOIN booking INNER JOIN donee ON donee.donee_ID=booking.donee_ID AND donors.username=booking.username ORDER BY booking_ID");
        //$result=$conn->prepare("SELECT * from booking WHERE username='$username' ORDER BY booking_datetime DESC");
        $result->execute();
        $row = $result->fetch();
        
		for($i=0; $row = $result->fetch(); $i++){
            if($username==$row['username']){
            
	?>
		<tr>
		
			
                <div class="food-menu-box">
                    <!--<span class="close">&times;</span>-->
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
            <p class="food-detail"><label>Booking ID: <?php echo $row['booking_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>

 

			<p class="food-detail"><label>Quantity Requested: <?php echo $row['bookingquantity']; ?> packets</label></p>
			<p class="food-detail"><label>Booked by: <a href="doneedetailsfordonor.php?donee_ID=<?=$row['donee_ID']?>"><?php echo $row['ngoname']; ?></label></a></p>
			<p class="food-detail"><label>Booked Time: <?php echo date($row['booking_datetime']); ?></label></p>
            


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
?>
<!-- end of if else statement -->

<form action = "" method="POST" >

            <input type="hidden" name="booking_ID" id="booking_ID" value="<?php echo $row['booking_ID']?>"/>
            <input type="hidden" name="excessfoodimage" id="excessfoodimage" value="<?php echo $row['excessfoodimage']?>"/>
            <input type="hidden" name="excessfoodname" id="excessfoodname" value="<?php echo $row['excessfoodname']?>"/>
            <input type="hidden" name="bookingquantity" id="bookingquantity" value="<?php echo $row['bookingquantity']?>"/>
            <input type="hidden" name="booking_datetime" id="booking_datetime" value="<?php echo $row['booking_datetime']?>"/>
            <input type="hidden" name="donee_ID" id="donee_ID" value="<?php echo $row['donee_ID']?>"/>
            <input type="hidden" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>"/>
            <input type="hidden" name="username" id="username" value="<?php echo $row['username']?>"/>
            <input type="hidden" name="excessfood_ID" id="excessfood_ID" value="<?php echo $row['excessfood_ID']?>"/>
            <input type="hidden" name="pickfrom" id="pickfrom" value="<?php echo $row['pickfrom']?>"/>
            <input type="hidden" name="pickby" id="pickby" value="<?php echo $row['pickby']?>"/>
            <input type="hidden" name="booking_status" id="booking_status" value="<?php echo $row['booking_status']?>"/>


<p class="food-detail"><label><select name = "booking_status">

              <option value = "1" required>Completed</option>
              <option value = "0">Processing</option>
              </select></label></p><br>
              
        <input type="submit" name="update" class="btn btn-danger" value="Update">
              </form>

		<!--	 <form action="donorbookingdelete.php" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <th> <input type="submit" name="delete" class="btn btn-danger" value="Delete"></th>
        </form>
		</tr>-->
			
			
         </div>
          </div> 
        		
            <?php } }?>
             <div class="clearfix"></div>
        </div>

    </section>
</div>

    <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['update']))
{
	
	$booking_ID = $_POST['booking_ID'];
    $excessfoodimage = $_POST['excessfoodimage'];
	$excessfoodname = $_POST['excessfoodname'];
  $bookingquantity = $_POST['bookingquantity'];
  $booking_datetime = $_POST['booking_datetime'];
	$donee_ID = $_POST['donee_ID'];
  $donor_ID = $_POST['donor_ID'];
  $username = $_POST['username'];
	$excessfood_ID = date('excessfood_ID');
    $pickfrom = $_POST['pickfrom'];
  $pickby = $_POST['pickby'];
  $booking_status = $_POST['booking_status'];

	$query = "UPDATE `booking` SET excessfoodimage ='$_POST[excessfoodimage]',excessfoodname ='$_POST[excessfoodname]',bookingquantity ='$_POST[bookingquantity]',booking_datetime ='$_POST[booking_datetime]',donee_ID ='$_POST[donee_ID]',donor_ID ='$_POST[donor_ID]',username ='$_POST[username]',excessfood_ID ='$_POST[excessfood_ID]',pickfrom ='$_POST[pickfrom]',pickby ='$_POST[pickby]',booking_status ='$_POST[booking_status]' where booking_ID='$_POST[booking_ID]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Bookings Details Updated'); window.location = 'donormainpagee.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>
<!-- View Bookings Section Ends Here date('Y-m-d H:i:s');-->




<div class="container text-center">
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>




        
<!-- Viewing Completed Booking Section Starts Here -->
<div id="completed">
    <section class="food-menu">
        <div class="container">
        <h2 class="text-left"> Completed bookings.</h2><br>
        <h3 class="text-left">Processing bookings <a href="#processing">here.</a></h3>	 
           <?php
		require_once('connectiondonor.php');
        

        $result=$conn->prepare("SELECT donors.*,booking.*,donee.* FROM donors INNER JOIN booking INNER JOIN donee ON donee.donee_ID=booking.donee_ID AND donors.username=booking.username AND booking_status = '1' ORDER BY booking_ID");
        //$result=$conn->prepare("SELECT * from booking WHERE username='$username' ORDER BY booking_datetime DESC");
        $result->execute();
        $row = $result->fetch();
        
		for($i=0; $row = $result->fetch(); $i++){
            if($username==$row['username']){
            
	?>
		<tr>
		
			
                <div class="food-menu-box">
                    <!--<span class="close">&times;</span>-->
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
            <p class="food-detail"><label>Booking ID: <?php echo $row['booking_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>

 

			<p class="food-detail"><label>Quantity Requested: <?php echo $row['bookingquantity']; ?> packets</label></p>
			<p class="food-detail"><label>Booked by: <a href="doneedetailsfordonor.php?donee_ID=<?=$row['donee_ID']?>"><?php echo $row['ngoname']; ?></label></a></p>
			<p class="food-detail"><label>Booked Time: <?php echo date($row['booking_datetime']); ?></label></p>
            


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
?>
<!-- end of if else statement -->
<form action = "" method="POST" >

            <input type="hidden" name="booking_ID" id="booking_ID" value="<?php echo $row['booking_ID']?>"/>
            <input type="hidden" name="excessfoodimage" id="excessfoodimage" value="<?php echo $row['excessfoodimage']?>"/>
            <input type="hidden" name="excessfoodname" id="excessfoodname" value="<?php echo $row['excessfoodname']?>"/>
            <input type="hidden" name="bookingquantity" id="bookingquantity" value="<?php echo $row['bookingquantity']?>"/>
            <input type="hidden" name="booking_datetime" id="booking_datetime" value="<?php echo $row['booking_datetime']?>"/>
            <input type="hidden" name="donee_ID" id="donee_ID" value="<?php echo $row['donee_ID']?>"/>
            <input type="hidden" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>"/>
            <input type="hidden" name="username" id="username" value="<?php echo $row['username']?>"/>
            <input type="hidden" name="excessfood_ID" id="excessfood_ID" value="<?php echo $row['excessfood_ID']?>"/>
            <input type="hidden" name="pickfrom" id="pickfrom" value="<?php echo $row['pickfrom']?>"/>
            <input type="hidden" name="pickby" id="pickby" value="<?php echo $row['pickby']?>"/>
            <input type="hidden" name="booking_status" id="booking_status" value="<?php echo $row['booking_status']?>"/>


<p class="food-detail"><label><select name = "booking_status">

              <option value = "1" required>Completed</option>
              <option value = "0">Processing</option>
              </select></label></p><br>
              
        <input type="submit" name="update" class="btn btn-danger" value="Update">
              </form>
		
         </div>
          </div> 
        		
            <?php } }?>
             <div class="clearfix"></div>
        </div>

    </section>
    </div>
    <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['update']))
{
	
	$booking_ID = $_POST['booking_ID'];
    $excessfoodimage = $_POST['excessfoodimage'];
	$excessfoodname = $_POST['excessfoodname'];
  $bookingquantity = $_POST['bookingquantity'];
  $booking_datetime = $_POST['booking_datetime'];
	$donee_ID = $_POST['donee_ID'];
  $donor_ID = $_POST['donor_ID'];
  $username = $_POST['username'];
	$excessfood_ID = date('excessfood_ID');
    $pickfrom = $_POST['pickfrom'];
  $pickby = $_POST['pickby'];
  $booking_status = $_POST['booking_status'];

	$query = "UPDATE `booking` SET excessfoodimage ='$_POST[excessfoodimage]',excessfoodname ='$_POST[excessfoodname]',bookingquantity ='$_POST[bookingquantity]',booking_datetime ='$_POST[booking_datetime]',donee_ID ='$_POST[donee_ID]',donor_ID ='$_POST[donor_ID]',username ='$_POST[username]',excessfood_ID ='$_POST[excessfood_ID]',pickfrom ='$_POST[pickfrom]',pickby ='$_POST[pickby]',booking_status ='$_POST[booking_status]' where booking_ID='$_POST[booking_ID]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Bookings Details Updated'); window.location = 'donormainpagee.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>
<!-- View Completed Bookings Section Ends Here-->
<br><br><br><br><br>
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
            <p>Powered by <a href="#">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
	  <!-- Scripts -->
      <script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>

        <script>
var closebtns = document.getElementsByClassName("close");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
</script>
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
</body>
</html>