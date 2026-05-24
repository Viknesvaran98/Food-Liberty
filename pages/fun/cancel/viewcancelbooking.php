<?php
include 'dbConfig.php';

session_start();
if(isset ($_SESSION["doneeusername"]))
    $doneeusername= $_SESSION["doneeusername"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Sent Bookings </title>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Liberty</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
                        <a href="doneemainpage.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Sent bookings</a>
                    </li>
                    <li>
                        <a href="doneedetail.php">Profile</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
        <h3 class="text-left">Please check sent bookings.</h3><br><br>

            
           <?php
		require_once('connectiondonor.php');
        $result=$conn->prepare("SELECT * FROM cancelbooking WHERE cancel_ID=$cancel_ID order by cancel_time DESC");
        $result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
		
			<div class="food-menu-box">
                
                <div class="food-menu-desc">
            <p class="food-detail"><label>Booking ID: <?php echo $row['booking_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
			<p class="food-detail"><label>Quantity Requested: <?php echo $row['bookingquantity']; ?> packets</label></p>
			<p class="food-detail"><label>Booked Time: <mark><?php echo date('d-m-Y h:i:s a',strtotime($row['booking_datetime'])); ?></mark></label></p>
			<p class="food-detail"><label>Posted By: <?php echo $row['donorfullname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Name: <?php echo $row['outletname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>


            <p class="food-detail"><label>Pick up time: <?php echo date('h:i:s a',strtotime($row['pickfrom'])); ?> - <?php echo date('h:i:s a',strtotime($row['pickby'])); ?></label></p><br>

	    <form action="doneebookingdelete.php" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <th> <input type="submit" name="delete" class="btn btn-danger" value="Delete"></th>
        </form>

        <form action="doneebookingcancel.php" method="post">
        <input type="hidden" name="booking_ID" value="<?php echo $row['booking_ID'] ?>">
        <input type="hidden" name="excessfoodname" value="<?php echo $row['excessfoodname'] ?>">
        <input type="hidden" name="bookingquantity" value="<?php echo $row['bookingquantity'] ?>">
        <input type="hidden" name="booking_datetime" value="<?php echo $row['booking_datetime'] ?>">
        <input type="hidden" name="donee_ID" value="<?php echo $row['donee_ID'] ?>">
        <input type="hidden" name="donor_ID" value="<?php echo $row['donor_ID'] ?>">
        <th> <input type="submit" name="delete" class="btn btn-danger" value="Cancel"></th>
        </form>
		</tr>
			
			
                </div>
            </div>
        		
		<?php } ?>
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

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
            <p>Designed for <a href="donee_main_page.php">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>