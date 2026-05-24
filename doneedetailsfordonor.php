<html lang="en">
<style>
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

.food-box{
  width: 450px;
  padding: 25px;
  box-sizing: border-box;
  background-color: #e8f8fd;
  padding-top: 30px;
  padding-right: 80px;
  padding-bottom: 30px;
  padding-left: 80px;
  border-radius: 15px;
} 
</style>
<head>
<!-- Title -->
<?php
                                        if(isset($_GET['donee_ID']))
                                        {

                                            $donee_ID = $_GET['donee_ID'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donee` WHERE donee_ID='$donee_ID' LIMIT 1"; 
    $query_run = mysqli_query($connection,$query);
    if ($row = mysqli_fetch_array($query_run))
    {
      ?>
<title><?php echo $row['ngoname']; ?>'s profile  </title>
<?php }} ?>

<!-- End of Title -->

    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 
    <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
    <title>Food Liberty</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
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
                        <a href="donormainpagee.php">Back</a>
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
    
         		

		
         <h3 class="text-left">Donee's Profile</h3>



            
         <?php
                                        if(isset($_GET['donee_ID']))
                                        {

                                            $donee_ID = $_GET['donee_ID'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donee` WHERE donee_ID='$donee_ID' LIMIT 1"; 
    $query_run = mysqli_query($connection,$query);

 if ($row = mysqli_fetch_array($query_run))
  {
    ?>
		<tr>
        <form action="order.php" method="post">
            
		
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['doneeimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                <div class="food-box">
            <p class="food-detail"><label>Donee ID: <?php echo $row['donee_ID']; ?></label></p>
			<p class="food-detail"><label>Volunteer/Representative's Name: <?php echo $row['fullname']; ?></label></p>
            <p class="food-detail"><label>Username: <?php echo $row['doneeusername']; ?></label></p>
            <p class="food-detail"><label>NGO name: <?php echo $row['ngoname']; ?></label></p>
            <p class="food-detail"><label>Type of ID: <?php echo $row['typeofid']; ?></label></p>
            <p class="food-detail"><label><?php echo $row['typeofid'];?> : <?php echo $row['ngoregistnum']; ?></label></p>
			<p class="food-detail"><label>Address: <?php echo $row['doneeaddress']; ?></label></p>
            <p class="food-detail"><label>City: <?php echo $row['city']; ?></label></p>
			<p class="food-detail"><label>State: <?php echo $row['state']; ?></label></p>
		    <p class="food-detail"><label>Postcode: <?php echo $row['postcode']; ?></label></p>
			      <p class="food-detail"><label>Contact No.: <?php echo $row['contact_num']; ?></label></p>
            <p class="food-detail"><label>Email: <?php echo $row['email']; ?></label></p>
            <p class="food-detail"><label>Registrated date: <?php echo $row['dateregist']; ?></label></p>
            </div>
                </div>
         
        		
		<?php }} else{ ?>
		<p>Error .....</p>
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
 
 </table>
 </div>
 </div>
 </div>

 
    </section>
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

</body>
</html>