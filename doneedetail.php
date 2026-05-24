<?php
include 'dbConfigg.php';
session_start();
if(isset($_SESSION["doneeusername"]))
    $doneeusername= $_SESSION["doneeusername"];
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
<!-- Title -->
<?php
                                     

$query = $db->query("SELECT * FROM `donee` WHERE doneeusername='$doneeusername' LIMIT 1");
   
    
    if($query !== false && $query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc()){
    ?>
<title><?php echo $row['fullname']; ?>'s profile</title>
<?php } }?>
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
    background: #1a202c;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #4ca2cd, #1a202c);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to left, #4ca2cd, #1a202c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    padding: 0;
    margin: 0;
    font-family: 'Lato', sans-serif;
    color: #000;
}

.donee-profile .card {
    border-radius: 10px;
}

.donee-profile .card .card-header .profile_img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    margin: 10px auto;
    border: 10px solid #ccc;
    border-radius: 50%;
}

.donee-profile .card h3 {
    font-size: 20px;
    font-weight: 700;
}

.donee-profile .card p {
    font-size: 16px;
    color: #000;
}

.donee-profile .table th,
.donee-profile .table td {
    font-size: 14px;
    padding: 5px 10px;
    color: #000;
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
</style>

<body>
  <!-- Preloader -->
 <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->

<!--Header-->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="doneemainpage.php" class="w3-bar-item w3-button">Food Liberty</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
 
      <a href="editdonee.php" class="w3-bar-item w3-button">Update</a>
      <a href="doneemainpage.php" class="w3-bar-item w3-button">Back</a>
    </div>
  </div>
</div><br><br><br><br><br><br>
<!--End of Header-->

<?php
			require_once('connectiondonor.php');
		$result = $conn->prepare("SELECT * FROM donee where doneeusername= '".$doneeusername."'");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++)
			{
				?>
				
<div class="donee-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            
            <img class="profile_img" src="images/<?php echo $row['doneeimage']?>" alt="donor" width="250" height="100" /></td>
            <h3><center><?php echo $row ['fullname']; ?></center> </td></h3>
          </div>
          <div class="card-body">
            <p style="font-family: 'Texturina', serif;"> <center>Username:  <?php echo $row ['doneeusername']; ?></p>
            <p style="font-family: 'Texturina', serif;"> <center>Password: <?php echo $row ['password']; ?></p>
            <p style="font-family: 'Texturina', serif;"> <center>Account Type:<div style='color:#17a4e6;'>Donee</div></p>
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
                <td><?php echo $row ['donee_ID']; ?></td>
              </tr>
              <tr>
                <th width="30%">NGO's Name	</th>
                <td width="2%">:</td>
                <td><?php echo $row ['ngoname']; ?></td>
              </tr>
              <tr>
                <th width="30%">Type of ID.</th>
                <td width="2%">:</td>
                <td><?php echo $row ['typeofid']; ?></td>
              </tr>
              <tr>
                <th width="30%"><?php echo $row ['typeofid']; ?></th>
                <td width="2%">:</td>
                <td><?php echo $row ['ngoregistnum']; ?></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><?php echo $row ['email']; ?></td>
              </tr>
              <tr>
                <th width="30%">Contact Number</th>
                <td width="2%">:</td>
                <td><?php echo $row ['contact_num']; ?></td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?php echo $row ['doneeaddress']; ?></td>
              </tr>
              <tr>
                <th width="30%">City</th>
                <td width="2%">:</td>
                <td><?php echo $row ['city']; ?></td>
              </tr>
              <tr>
                <th width="30%">State</th>
                <td width="2%">:</td>
                <td><?php echo $row ['state']; ?></td>
              </tr>
              <tr>
                <th width="30%">Postcode</th>
                <td width="2%">:</td>
                <td><?php echo $row ['postcode']; ?></td>
              </tr>
              <tr>
                <th width="30%">Date Registered</th>
                <td width="2%">:</td>
                <td><?php echo $row ['dateregist']; ?></td>
              </tr>
              <tr>
                
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

<script type="text/javascript" src="pages/new/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="pages/new/js/templatemo-script.js"></script>  
</body>
</html>