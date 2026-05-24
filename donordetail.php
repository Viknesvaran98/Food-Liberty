<?php
session_start();
if(isset($_SESSION["username"]))
    $username= $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
<!-- Title -->
<?php
                                     
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donors` WHERE username='$username' LIMIT 1"; 
    $query_run = mysqli_query($connection,$query);
    if ($row = mysqli_fetch_array($query_run))
    {
      ?>
<title><?php echo $row['donorfullname']; ?>'s profile</title>
<?php } ?>

<!-- End of Title -->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<style>

body {
    background: #B3315F;
    background: -webkit-linear-gradient(to left, #E6DADA, #274046);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #E6DADA, #274046); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}

.donor-profile .card {
    border-radius: 10px;
}

.donor-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}

.donor-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
}

.donor-profile .card p {
    font-size: 16px;
    color: #000;
}

.donor-profile .table th,
.donor-profile .table td {
    font-size: 14px;
    padding: 5px 10px;
    color: #000;
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

</style>
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
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
    <!--Header-->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="donormainpagee.php" class="w3-bar-item w3-button">Food Liberty</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
 
      <a href="editdonor.php" class="w3-bar-item w3-button">Update</a>
      <a href="donormainpagee.php" class="w3-bar-item w3-button">Back</a>
    </div>
  </div>
</div><br><br><br><br><br><br>
<!--End of Header-->

<?php
			require_once('connectiondonor.php');
		$result = $conn->prepare("SELECT * FROM donors where username= '".$username."'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
			{
				?>
				
<div class="donor-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            
            <img class="profile_img" src="images/<?php echo $row['donorimage']?>" alt="donor" width="250" height="100" /></td>
            <h3><center><?php echo $row ['donorfullname']; ?></center> </td></h3>
          </div>
          <div class="card-body">
            <p style="font-family: 'Texturina', serif;"> <center>Username:  <?php echo $row ['username']; ?></p>
            <p style="font-family: 'Texturina', serif;"> <center>Password: <?php echo $row ['password']; ?></p>
            <p style="font-family: 'Texturina', serif;"> <center>Account Type:<div style='color:#25f21f;'>Donor</div></p>
          </div>
          	
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Details</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
            <tr>
                <th width="30%">ID	</th>
                <td width="2%">:</td>
                <td><?php echo $row ['donor_ID']; ?></td>
              </tr>
             <tr>
                <th width="30%">Outlet Name	</th>
                <td width="2%">:</td>
                <td><?php echo $row ['outletname']; ?></td>
              </tr>
              <tr>
                <th width="30%">Type of Outlet</th>
                <td width="2%">:</td>
                <td><?php echo $row ['outlet_type']; ?></td>
              </tr>
              <tr>
                <th width="30%">Registration Number</th>
                <td width="2%">:</td>
                <td><?php echo $row ['registrationnumber']; ?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $row ['donoremail']; ?></td>
              </tr>
              <tr>
                <th width="30%">Contact Number</th>
                <td width="2%">:</td>
                <td><?php echo $row ['donorcontact_num']; ?></td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $row ['donoraddress']; ?></td>
              </tr>
              <tr>
                <th width="30%">City</th>
                <td width="2%">:</td>
                <td><?php echo $row ['dcity']; ?></td>
              </tr>
              <tr>
                <th width="30%">State</th>
                <td width="2%">:</td>
                <td><?php echo $row ['dstate']; ?></td>
              </tr>
              <tr>
                <th width="30%">Postcode</th>
                <td width="2%">:</td>
                <td><?php echo $row ['dpostcode']; ?></td>
              </tr>
              <tr>
                <th width="30%">Date Registered</th>
                <td width="2%">:</td>
                <td><?php echo $row ['dateregist']; ?></td>
              </tr>
              
              
              <?php
			}

			?>
            </table>
    
          </div>
        </div>
    </div>
  </div>
</div>
	  <!-- Scripts -->
    <script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>
</body>
</html>