<html lang="en">
<style>
    .food-box{
  width: 400px;
  padding: 25px;
  box-sizing: border-box;
  background-color: #fffff5;
  padding-top: 30px;
  padding-right: 80px;
  padding-bottom: 30px;
  padding-left: 80px;
  border-radius: 15px;
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
    position: fixed;
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

</style>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
<!-- Title -->
<?php
                                        if(isset($_GET['donor_ID']))
                                        {

                                            $donor_ID = $_GET['donor_ID'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donors` WHERE donor_ID='$donor_ID' LIMIT 1"; 
    $query_run = mysqli_query($connection,$query);
    if ($row = mysqli_fetch_array($query_run))
    {
      ?>
<title><?php echo $row['outletname']; ?>'s profile  </title>
<?php }} ?>

<!-- End of Title -->
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 

    <title>Food Liberty</title>

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
                        <a href="doneemainpage.php">Back</a>
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
    
         		

		
         <h3 class="text-left">Donor's Profile</h3>



            
         <?php
                                        if(isset($_GET['donor_ID']))
                                        {

                                            $donor_ID = $_GET['donor_ID'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donors` WHERE donor_ID='$donor_ID' LIMIT 1"; 
    $query_run = mysqli_query($connection,$query);

 if ($row = mysqli_fetch_array($query_run))
  {
    ?>
		<tr>
        <form action="order.php" method="post">
            
		
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['donorimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                <div class="food-box">
            <p class="food-detail"><label>Donor ID: <?php echo $row['donor_ID']; ?></label></p>
			<p class="food-detail"><label>Posted By: <?php echo $row['donorfullname']; ?></label></p>
            <p class="food-detail"><label>Username: <?php echo $row['username']; ?></label></p>
			<p class="food-detail"><label>Outlet's Address: <?php echo $row['donoraddress']; ?></label></p>
            <p class="food-detail"><label>City: <?php echo $row['dcity']; ?></label></p>
			<p class="food-detail"><label>State: <?php echo $row['dstate']; ?></label></p>
			<p class="food-detail"><label>Postcode: <?php echo $row['dpostcode']; ?></label></p>
			<p class="food-detail"><label>Contact No.: <?php echo $row['donorcontact_num']; ?></label></p>
            <p class="food-detail"><label>Posted food: <a href="specifiedfooddetails.php?donor_ID=<?=$row['donor_ID']?>"> Here </a></label></p>
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
    <!-- social Section Ends Here -->

       <!-- footer Section Starts Here -->
       <section class="footer">
        <div class="container text-center">
            <p>Powered by <a href="doneemainpage.php">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
    <script type="text/javascript" src="pages/new/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="pages/new/js/templatemo-script.js"></script>  
</body>
</html>