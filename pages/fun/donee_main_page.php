<?php
include 'dbConfigg.php';

session_start();
if(isset($_SESSION["username"]))
    $username= $_SESSION["username"];
?>

<html lang="en">
<head>
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
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="sentbookings.php">Sent Bookings</a>
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
        <h3 class="text-left">Welcome Donee, Please choose available food.</h3><br><br>
         <h3 class="text-left">Recently Posted Food</h3>
            <h1 class="text-left">Food Menu</h1>

            
     <?php
        $query = $db->query("SELECT c.* , p.* FROM donors c,excessfood p WHERE c.donor_ID=p.donor_ID");
        if($query !== false && $query->num_rows > 0)
        { 
            while($row = $query->fetch_assoc()){
        ?>
		<tr>
			
			<div class="food-menu-box">
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
			<p class="food-detail"><label>Quantity Available: <?php echo $row['quantity']; ?></label></p>
			<p class="food-detail"><label>Posted By: <?php echo $row['donorfullname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Name: <?php echo $row['outletname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>
			<p class="food-detail"><label>Posted On: <?php echo $row['postedtime']; ?></label></p>
			<p class="food-detail"><label>Food Expired by: <?php echo $row['timelimitation']; ?></label></p>
			
			<a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        		
		<?php }} else{ ?>
		<p>Product(s) not found.....</p>
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
            <p>Designed For <a href="#">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>