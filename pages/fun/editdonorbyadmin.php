<?php
session_start();
if(isset ($_SESSION["username"]))
	$username= $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title> Edit Donors' Details </title>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="styleexam.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
     
   </head>
   <style>
  th, td {
  border:2px solid black;
  margin-left: auto;
  margin-right: auto;
}

h2 { text-align: center }
h2 { font-family: Georgia, serif;
  font-size: 60px;
  color: white;
} }
body {
    background: rgb(3, 4, 65)
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
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-badge-check'></i>
      <span class="logo_name">Food Liberty</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminmainpage.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="editdonorbyadmin.php" class="active">
            <i class='bx bx-edit-alt' ></i>
            <span class="links_name">Edit Details</span>
          </a>
        </li>
        <li>
          <a href="donorlistpage.php">
            <i class='bx bx-arrow-back' ></i>
            <span class="links_name">Back</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
      </div>
      <div class="search-box">
       
        <input id="searchbar" onkeyup="search_postcode()" type="text"
        name="search" placeholder="Search by registration number..">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="images/adminwall8.png" alt="">
        <span class="admin_name">Administrator</span>
      </div>
    </nav>
<input id="searchbar" onkeyup="" type="text"
        name="search" placeholder="Search by postcode..">
	<center>
	<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Edit Donors' Details</h4>
                </div>
								<div class="row mt-3">
			<?php

				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,'mainproject');

						$query = "SELECT * FROM `donors`"; 
						$query_run = mysqli_query($connection,$query);

					while ($row = mysqli_fetch_array($query_run))
					{
						?>

			<center>
					<form action = "" method="POST" >
						
				
          <div class="food-menu-box">
					
              <p class="food-menu-box"><mark><label>ID: <?php echo $row['donor_ID']; ?></label></mark></p>
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

							<div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" name="dstate" id="dstate" value="<?php echo $row['dstate']?>" placeholder="Enter state" required/>
							</div><br> <br>

							<div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" name="dpostcode" id="dpostcode" value="<?php echo $row['dpostcode']?>" placeholder="Postcode" required/></div><br>

							<input type="hidden" name="dateregist" id="dateregist" value="<?php echo $row['dateregist']?>" placeholder="Postcode" required/>
              <p class="food-detail"><label>Registered on: <mark><?php echo $row['dateregist']; ?></mark></label></p>

						 <input type="hidden" name="username" id="username" value="<?php echo $row['username']?>"/>
						

						<div class="mt-5 text-center"><input type="submit" name="update" value="Update Data"></div><br> <br>
						</form>
            <hr size="7" width="100%" color="black">  <br> <br>
            </div>
            
						<?php
					}
				
			?>	



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
	$dstate = $_POST['dstate'];
	$dpostcode = $_POST['dpostcode'];
	$dateregist = date('Y-m-d H:i:s');
	

	$query = "UPDATE `donors` SET username ='$_POST[username]',donorimage ='$_POST[donorimage]',password ='$_POST[password]',donor_password ='$_POST[donor_password]',donorfullname ='$_POST[donorfullname]',outletname ='$_POST[outletname]',outlet_type ='$_POST[outlet_type]',registrationnumber ='$_POST[registrationnumber]',donoremail ='$_POST[donoremail]',donorcontact_num ='$_POST[donorcontact_num]',donoraddress ='$_POST[donoraddress]',dstate ='$_POST[dstate]',dpostcode ='$_POST[dpostcode]',dateregist ='$_POST[dateregist]' where username='$_POST[username]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Data Updated'); window.location = 'donorlistpage.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>

<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
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