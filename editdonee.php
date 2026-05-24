<?php
session_start();
if(isset ($_SESSION["doneeusername"]))
	$doneeusername= $_SESSION["doneeusername"];
?>


<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
	<title> Donee Update Details </title>
	
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<style>
	body {
		background: #1a202c;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #4ca2cd, #1a202c);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #4ca2cd, #1a202c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
</style>
</head> 
<body>
<!--Header-->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="doneemainpage.php" class="w3-bar-item w3-button">Food Liberty</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
 
      
      <a href="doneedetail.php" class="w3-bar-item w3-button">Back</a>
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

						$query = "SELECT * FROM `donee` where doneeusername = '".$_SESSION['doneeusername']."'"; 
						$query_run = mysqli_query($connection,$query);

					while ($row = mysqli_fetch_array($query_run))
					{
						?>

			<center>
					<form action = "" method="POST" >
						
					<p class="food-menu-box"><label>ID: <bold><mark><?php echo $row['donee_ID']; ?></mark></bold></label></p><br>
					<input type="hidden" name="doneeimage" id="doneeimage" value="<?php echo $row['doneeimage']?>"/>
						
              <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" name="doneeusername" id="doneeusername" value="<?php echo $row['doneeusername']?>" placeholder= "Enter new username" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $row['fullname']?>" placeholder= "Enter new name" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" name="password" id="password" value="<?php echo $row['password']?>" placeholder="Enter new password" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Confirm Password</label><input type="text" class="form-control" name="donee_password" id="donee_password" value="<?php echo $row['donee_password']?>" placeholder="Re-enter new password" required/></div><br> <br>
							
							<div class="col-md-12"><label class="labels">Contact Number</label><input type="text" class="form-control" name="contact_num" id="contact_num" value="<?php echo $row['contact_num']?>" placeholder="Enter contact number" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']?>" placeholder="Enter email" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">NGO Name</label><input type="text" class="form-control" name="ngoname" id="ngoname" value="<?php echo $row['ngoname']?>" placeholder = "Enter Ngo Name" required/></div><br> <br>
							
							<div class="col-md-12"><label class="labels">Type of ID.: <?php echo $row['typeofid']?></label></div>


							<div class="col-md-12"><label class="labels">
                          <select name="typeofid" id="typeofid">
                            <option value="Registration Number">Registration Number</option>
                            <option value="Representative&#x2bc;s ID No.">Representative's ID No.</option>
                          </select></label></div><br>

							<div class="col-md-12"><label class="labels">Registration Number</label><input type="text" class="form-control" name="ngoregistnum" id="ngoregistnum" value="<?php echo $row['ngoregistnum']?>" placeholder="Enter registration number" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Address</label><input type="textarea" class="form-control" name="doneeaddress" id="doneeaddress" rows="4" cols="50" value ="<?php echo $row['doneeaddress']?>"placeholder="Enter address" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">City</label><input type="text" class="form-control" name="city" id="city" value="<?php echo $row['city']?>" placeholder="Enter city" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" name="state" id="state" value="<?php echo $row['state']?>" placeholder="Enter state" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" name="postcode" id="postcode" value="<?php echo $row['postcode']?>" placeholder="Postcode" required/></div><br> <br>

							<input type="hidden" name="dateregist" id="dateregist" value="<?php echo $row['dateregist']?>" placeholder="dateregist" required/>
				
						<input type="hidden" name="doneeusername" id="doneeusername" value="<?php echo $row['doneeusername']?>"/>
						

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
	$donee_ID = $_POST['donee_ID'];
	$doneeusername = $_POST['doneeusername'];
  $doneeimage = $_POST['doneeimage'];
	$password = $_POST['password'];
	$donee_password = $_POST['donee_password'];
	$fullname = $_POST['fullname'];
	$ngoname = $_POST['ngoname'];
	$typeofid = $_POST['typeofid'];
	$ngoregistnum = $_POST['ngoregistnum'];
	$email = $_POST['email'];
	$contact_num = $_POST['contact_num'];
	$doneeaddress = $_POST['doneeaddress'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postcode = $_POST['postcode'];
	$dateregist = date('Y-m-d H:i:s');
	

	$query = "UPDATE `donee` SET doneeusername ='$_POST[doneeusername]',doneeimage ='$_POST[doneeimage]',password ='$_POST[password]',donee_password ='$_POST[donee_password]',fullname ='$_POST[fullname]',ngoname ='$_POST[ngoname]',typeofid ='$_POST[typeofid]',ngoregistnum ='$_POST[ngoregistnum]',email ='$_POST[email]',contact_num ='$_POST[contact_num]',doneeaddress ='$_POST[doneeaddress]',city ='$_POST[city]',state ='$_POST[state]',postcode ='$_POST[postcode]',dateregist ='$_POST[dateregist]' where doneeusername='$_POST[doneeusername]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Data Updated'); window.location = 'doneedetail.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>

 
</body>
</html>