<?php
include 'dbConfigg.php';

session_start();
if(isset($_SESSION["doneeusername"]) )
    $doneeusername= $_SESSION["doneeusername"];
   
?>

<html lang="en">
<style>
      html{
    -webkit-font-smoothing: antialiased;
  }
      body {
    background: white;
    overflow-x: hidden;
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
   
   h3{
	 color: #38761D;
    font-size: 2rem;
     }

   h1{
    color: #38761D;
    font-size: 3rem;
    margin-bottom: 2%;
   }
 
   /* When the input field gets focus,
        change its width to 100% */
   input[type=text]:focus {
     width: 70%;
   }
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
.menu{
    line-height: 125px;
}

    .float-container{
    position: relative;
    left: 17%;
  width: 50%;
}

.box-3{
    width: 35%;
    float: auto;
    margin: 2%;
}

.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}

.float-texts{
    position: absolute;
    bottom: 50px;
    left: 40%;
}

.food-menu-desc{
    width: 50%;
    float: left;
    margin-left: 8%;
}

.categories{
    padding: 4% 0;
}

.box-3{
    width: 38%;
    float: left;
    margin: 5%;
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
</style>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
<!-- Title -->
<?php
                                     

$query = $db->query("SELECT * FROM `donee` WHERE doneeusername='$doneeusername' LIMIT 1");
   
    
    if($query !== false && $query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc()){
    ?>
<title>Welcome <?php echo $row['fullname']; ?></title>

<!-- End of Title -->

    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">

      

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
                        <a href="doneemainpage.php" class="notification mm-active">Home</a>
                    </li>
                    <li>
                        <a href="sentbookings.php" class="notification">Sent Bookings</a>
                    </li>
                    <li>
                    
                <a href="doneedetail.php" class="notification"><?php echo $row['fullname']; ?></a>
                <?php } }?>
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

<!-- CAtegories Section Starts Here -->
<section class="categories">
        <div class="container">
            <h2 class="text-center">Explore by Categories</h2>
            <a href="#recent">
            <div class="box-3 float-container">
                <img src="images/back8.jpg" alt="Food" class="img-responsive img-curve">
                <h3 class="float-text text-white">Recently Posted Food</h3>
            </div>
            </a>
            <a href="outletpage.php">
            <div class="box-3 float-container">
                <img src="images/place2.jpg" alt="Outlets" class="img-responsive img-curve">
                <h3 class="float-texts text-white">Outlets</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>  <br><br>  <br><br>  <br><br>
    <!-- Categories Section Ends Here -->


    <!-- fOOD MEnu Section Starts Here -->
    
   
    
    <section class="food-menu" id="recent">
        <div class="container">
    
<!-- Common Title -->
<?php
$query = $db->query("SELECT * FROM `donee` WHERE doneeusername='$doneeusername'");
    if($query !== false && $query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc()){
    ?>
<h3>Welcome <?php echo $row['fullname']; ?>. Please choose available food.</h3><br>
<?php } }?>
<!-- End of Common title -->


		
         <h3 class="text-left">Recently Posted Food</h3>
        <input id="searchbar" onkeyup="search_postcode()" type="text"
        name="search" placeholder="Search by postcode..">
        
    <h1 class="text-left">Food Menu</h1>
     <?php
        $query = $db->query("SELECT c.* , p.* FROM donors c,excessfood p WHERE c.username=p.username order by postedtime DESC");
        if($query !== false && $query->num_rows > 0)
        { 
            while($row = $query->fetch_assoc()){
        ?>
		<tr>
        <form action="order.php" method="post">
            
			<div class="food-menu-box">
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
            <p class="food-detail"><label>No: <?php echo $row['excessfood_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
            <input type="hidden" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>"/>
            
			<p class="food-detail"><label>Quantity Available: <?php echo $row['quantity']; ?></label></p>
			<p class="food-detail"><label>Posted By: <?php echo $row['donorfullname']; ?></label></p>
			<p class="food-detail"><label>Outlet's Name: <a style="font-weight: bold;" href="donordetailsfordonee.php?donor_ID=<?=$row['donor_ID']?>"> <?php echo $row['outletname']; ?> </label></a></p>

<!-- if quantity available will shows available -->
            <?php
              $quantity =$row['quantity'];                         

if ($quantity > "0") {
    echo"<div style='font-size:1rem;color:#747d8c;'>";
    echo "Status: ";
    echo $row['food_status'];
    echo "</div>";
    
} else {
    echo"<div style='font-size:1rem;color:#f44336;'>";
    echo "Status: Out of Order";
    echo "</div>";
}
?>
<!-- end of if else statement -->
            <input type="hidden" name="username" id="username" value="<?php echo $row['username']?>"/>

			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
			<p class="food-detail"><label>State: <?php echo $row['dstate']; ?></label></p>
			<p class="food-detail"><label>Postcode: <?php echo $row['dpostcode']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>
		    <p class="food-detail"><label>Posted On: <?php echo date('d-m-Y h:i:s a',strtotime($row['postedtime'])); ?></label></p>
            
			<p class="food-detail" style="font-weight: bold;"><label>Pick up time: <?php echo date('h:i:s a',strtotime($row['pickfrom'])); ?> - <?php echo date('h:i:s a',strtotime($row['pickby'])); ?></label></p>
            

          <!-- if quantity available will shows available -->
<?php
            $quantity =$row['quantity']; 
            $food_status = $row['food_status'];
            if ($quantity > "0" && $food_status == "Available") {
            echo "<br><a href=order.php?excessfood_ID=$row[excessfood_ID] class=btn btn-success>";
            echo "Book</a>";
        } else if ('Status: Out of Order'){
            echo"<div style='font-size:1rem;color:#f44336;'>";
            echo "Not Available";
            echo "</div>";
          }
          ?><br><br> 
<!-- end of if else statement -->

                </div>
            </div>
        		
		<?php }} else{ ?>
		<p>There are no new food(s) .....</p>
        <?php } ?>
        
            <div class="clearfix"></div>
        </div>
        <?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['post']))
{

  $excessfoodimage = $_POST['excessfoodimage'];
  $excessfoodname = $_POST['excessfoodname'];
  $bookingquantity = $_POST['bookingquantity'];
	$booking_datetime = date('Y-m-d H:i:s');
    $donee_ID = date('donee_ID');
    $username = date('username');
    $excessfood_ID = date('excessfood_ID');
    $outletname = $_POST['outletname'];
    $donorfullname = $_POST['donorfullname'];
    $donoraddress = $_POST['donoraddress'];
    $dstate = $_POST['dstate'];
    $dpostcode = $_POST['dpostcode'];
    $pickfrom = date('Y-m-d H:i:s');
    $pickby = date('Y-m-d H:i:s');

	$query = "INSERT INTO booking VALUES(NULL,'$excessfoodimage','$excessfoodname','$bookingquantity','$booking_datetime','$donee_ID','$username','$excessfood_ID','$outletname','$donorfullname','$donoraddress','$dstate','$dpostcode','$pickfrom','$pickby')";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Ordered.'); window.location = 'doneemainpage.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Sorry") </script>';
	}
}

?> </form> 
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
 
 </table>
 </div>
 </div>
 </div>

 
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Powered by <a href="doneemainpage.php">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

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
<!-- JS -->
<script type="text/javascript" src="pages/new/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="pages/new/js/templatemo-script.js"></script>      
</body>
</html>