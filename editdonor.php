<?php
session_start();
if(isset ($_SESSION["username"]))
	$username= $_SESSION["username"];
?>


<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
	<title> Donor Update Details </title>
	
	 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
mark{
 background-color:#e0ff0f;
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
<!--Header-->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="donormainpagee.php" class="w3-bar-item w3-button">Food Liberty</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
 
      
      <a href="donordetail.php" class="w3-bar-item w3-button">Back</a>
    </div>
  </div>
</div><br><br><br><br><br><br>
<!--End of Header-->

	<center>
	<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    
										<h4 style="font-weight: 600;">Profile Settings</h4>    
                </div>
								<div class="row mt-3">
			<?php

				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,'mainproject');

						$query = "SELECT * FROM `donors` where username = '".$_SESSION['username']."'"; 
						$query_run = mysqli_query($connection,$query);

					while ($row = mysqli_fetch_array($query_run))
					{
						?>

			<center>
					<form action = "" method="POST" >
						
				
					<p class="food-menu-box"><label>ID: <bold><mark><?php echo $row['donor_ID']; ?></mark></label></p><br>

					<input type="hidden" name="donorimage" id="donorimage" value="<?php echo $row['donorimage']?>"/>
						
					    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" name="username" id="username" value="<?php echo $row['username']?>" placeholder= "Enter new username" required/></div><br> <br>
							
					    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="donorfullname" id="donorfullname" value="<?php echo $row['donorfullname']?>" placeholder= "Enter new name" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" name="password" id="password" value="<?php echo $row['password']?>" placeholder="Enter new password" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Confirm Password</label><input type="text" class="form-control" name="donor_password" id="donor_password" value="<?php echo $row['donor_password']?>" placeholder="Re-enter new password" required/></div><br> <br>
							
							<div class="col-md-12"><label class="labels">Contact Number</label><input type="text" class="form-control" name="donorcontact_num" id="donorcontact_num" value="<?php echo $row['donorcontact_num']?>" placeholder="Enter contact number" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="donoremail" id="donoremail" value="<?php echo $row['donoremail']?>" placeholder="Enter email" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Outlet Name</label><input type="text" class="form-control" name="outletname" id="outletname" value="<?php echo $row['outletname']?>" placeholder = "Enter outlet name" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Type of Outlet</label><input type="text" class="form-control" name="outlet_type" id="outlet_type" value="<?php echo $row['outlet_type']?>" placeholder = "Enter type of outlet" required/><p>(Restaurant, Stall, Bakery, Cafe, etc..)</p><br></div>
							
							<div class="col-md-12"><label class="labels">Registration Number</label><input type="text" class="form-control" name="registrationnumber" id="registrationnumber" value="<?php echo $row['registrationnumber']?>" placeholder="Enter registration number" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Address</label><input type="textarea" class="form-control" name="donoraddress" id="donoraddress" rows="4" cols="50" value ="<?php echo $row['donoraddress']?>"placeholder="Enter address" required/></div><br> <br>
                            
                            <div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" name="dcity" id="dstate" value="<?php echo $row['dcity']?>" placeholder="Enter city" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" name="dstate" id="dstate" value="<?php echo $row['dstate']?>" placeholder="Enter state" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" name="dpostcode" id="dpostcode" value="<?php echo $row['dpostcode']?>" placeholder="Postcode" required/></div><br>

							<input type="hidden" name="dateregist" id="dateregist" value="<?php echo $row['dateregist']?>" placeholder="Date" required/>
				
						 <input type="hidden" name="username" id="username" value="<?php echo $row['username']?>"/>
						

						<div class="mt-5 text-center"><input type="submit" name="update" value="Update Data"></div>
						
						</form>

						<?php
					}
				
			?>	
</div>
			</center>



<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['update']))
{
	$donor_ID = $_POST['donor_ID'];
	$username = $_POST['username'];
	$donorimage = $_POST['donorimage'];
	$password = $_POST['password'];
	$donor_password = $_POST['donor_password'];
	$donorfullname = $_POST['donorfullname'];
	$outletname = $_POST['outletname'];
	$outlet_type = $_POST['outlet_type'];
	$registrationnumber = $_POST['registrationnumber'];
	$donoremail = $_POST['donoremail'];
	$donorcontact_num = $_POST['donorcontact_num'];
	$donoraddress = $_POST['donoraddress'];
    $dcity = $_POST['dcity'];
	$dstate = $_POST['dstate'];
	$dpostcode = $_POST['dpostcode'];
	$dateregist = date('Y-m-d H:i:s');
	

	$query = "UPDATE `donors` SET username ='$_POST[username]',donorimage ='$_POST[donorimage]',password ='$_POST[password]',donor_password ='$_POST[donor_password]',donorfullname ='$_POST[donorfullname]',outletname ='$_POST[outletname]',outlet_type ='$_POST[outlet_type]',registrationnumber ='$_POST[registrationnumber]',donoremail ='$_POST[donoremail]',donorcontact_num ='$_POST[donorcontact_num]',donoraddress ='$_POST[donoraddress]',dcity ='$_POST[dcity]',dstate ='$_POST[dstate]',dpostcode ='$_POST[dpostcode]',dateregist ='$_POST[dateregist]' where username='$_POST[username]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Profile Updated'); window.location = 'donordetail.php' </script>";
	
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>

  <!-- Scripts -->
	<script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>
</body>
</html>