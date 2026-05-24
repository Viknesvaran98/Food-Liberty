<?php
session_start();
if(isset ($_SESSION["username"]))
	$username= $_SESSION["username"];
?>


<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
	<title>Update Food Details</title>
	
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
	body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
	background: rgb(129, 197, 149)
}

#searchbar{
     margin-left: auto;
     padding:5px;
     border-radius: 2px;
   }
 
   input[type=text] {
      width: 20%;
      -webkit-transition: width 0.13s ease-in-out;
      transition: width 0.13s ease-in-out;
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
    font-size: 14px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
/* When the input field gets focus,
        change its width to 100% */
				input[type=text]:focus {
     width: 20%;
   }
	 mark{
 background-color:#c0ffc8;
}
.button {
  background-color: #838383; 
  border: none;
  color: white;
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.dropdown {
  display: inline-block;
  position: relative;
}
.dropdown-content {
  display: none;
  position: absolute;
  width: 100%;
  overflow: auto;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  display: block;
  color: #000000;
  padding: 5px;
  text-decoration: none;
}
.dropdown-content a:hover {
  color: #FFFFFF;
  background-color: #00A4BD;
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

.text-center {
    margin-left: 41.5%;
    margin-right: 50%;
    width: 8em
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
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="donormainpagee.php" class="w3-bar-item w3-button">FOOD LIBERTY</a>
		 <!-- Search bar -->
<input id="searchbar" onkeyup="search_food()" type="text" name="search" placeholder="Search by food ID..">
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="postedfood.php" class="w3-bar-item w3-button">Back</a>
    </div>
  </div>
</div>
	<center>
	<body>
	<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Excess Food Settings</h4>
                </div>
								<div class="row mt-3">

<!-- Connecting db -->
<?php
                                        

                                          /**require_once('connectiondonor.php');
        // $result=$conn->prepare("SELECT c.* , p.* FROM donors c,excessfood p WHERE c.username=p.username AND c.donor_ID=p.donor_ID order by postedtime DESC");
       //$result=$conn->prepare("SELECT donors.*,excessfood.* FROM donors INNER JOIN excessfood ON donors.username=excessfood.username AND excessfood_ID='$excessfood_ID' LIMIT 1");
       $result=$conn->prepare("SELECT * from `excessfood` WHERE excessfood_ID='$excessfood_ID' LIMIT 1");
        $result->execute();
        $row = $result->fetch();
        //var_dump($row);
        
		for($i=0; $row = $result->fetch(); $i++){ **/
                                            if(isset($_GET['excessfood_ID']))
                                            {
                                            $excessfood_ID = $_GET['excessfood_ID'];
                                            $connection = mysqli_connect("localhost","root","");
                                            $db = mysqli_select_db($connection,'mainproject');
                                    
                                                $query = "SELECT * FROM `excessfood` WHERE excessfood_ID='$excessfood_ID' LIMIT 1"; 
                                                $query_run = mysqli_query($connection,$query);
                                    
                                              if($row = mysqli_fetch_array($query_run))
                                              {
                                                ?>
			<center>
				<!-- Showing food data to donors to edit -->

					<form action = "" method="POST" >
          <div class="food-menu-box">
					
					<input type="hidden" name="excessfoodimage" id="excessfoodimage" value="<?php echo $row['excessfoodimage']?>"/>
						
					    <p class="food-detail"><label>ID: <?php echo $row['excessfood_ID']; ?></label></p>
							<div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="excessfoodname" id="excessfoodname" value="<?php echo $row['excessfoodname']?>" placeholder= "Enter food name" required/></div><br> <br>

							<div class="col-md-12"><label class="labels">Quantity</label><input type="number" class="form-control" name="quantity" id="quantity" value="<?php echo $row['quantity']?>" placeholder="Enter new quantity" required/></div><br> <br>


              <p class="food-detail"><label>Food Status: <?php echo $row['food_status']; ?></label></p>

              <p class="food-detail"><label><select name = "food_status">

              <option value = "Available" required>Available</option>
              <option value = "Out of Stock">Out of Stock</option>
              </select></label></p><br>
							<div class="col-md-12"><label class="labels">Pick up time from:</label><input type="time" class="form-control" name="pickfrom" id="pickfrom" value="<?php echo $row['pickfrom']?>" placeholder="Enter new time" required/>
							</div><br>

							<div class="col-md-12"><label class="labels">Pick by</label><input type="time" class="form-control" name="pickby" id="pickby" value="<?php echo $row['pickby']?>" placeholder="Enter new time" required/>
							</div><br>
              <p><label>Posted Time: <?php echo date('h:i:s',strtotime($row['postedtime'])); ?>, <?php echo date('d-m-Y',strtotime($row['postedtime'])); ?></label></p><br>
				<input class="button button1" type="submit" name="update" value="Update Data"><br>

							<label class="labels"></label><input type="hidden" class="form-control" name="postedtime" id="postedtime" value="<?php echo $row['postedtime']?>" placeholder="Enter new time" required/>
              <input type="hidden" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>" placeholder="donor_ID" required/>

						<form action="donordeletefood.php" method="post">
            <input type="hidden" name="excessfood_ID" value="<?php echo $row['excessfood_ID'] ?>">
            </form>
	        	</tr>
            </div>
						</form><br><br>

						<?php
					}}
				
			?>	
</div>
			</center>


<!-- Updating excess food details -->

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['update']))
{
	
	$excessfood_ID = $_POST['excessfood_ID'];
	$excessfoodname = $_POST['excessfoodname'];
  $excessfoodimage = $_POST['excessfoodimage'];
  $pickfrom = $_POST['pickfrom'];
  $pickby = $_POST['pickby'];
	$quantity = $_POST['quantity'];
  $food_status = $_POST['food_status'];
	$postedtime = date('Y-m-d H:i:s');
	$donor_ID = date('donor_ID');

	$query = "UPDATE `excessfood` SET excessfoodname ='$_POST[excessfoodname]',excessfoodimage ='$_POST[excessfoodimage]',pickfrom ='$_POST[pickfrom]',pickby ='$_POST[pickby]',quantity ='$_POST[quantity]',food_status ='$_POST[food_status]',postedtime ='$_POST[postedtime]' where excessfood_ID='$_POST[excessfood_ID]'";
	$query_run= mysqli_query($connection,$query);

	if ($query_run)
	{
		echo "<script> alert('Details Updated'); window.location = 'postedfood.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Data Not Updated") </script>';
	}
}

?>


 <!-- footer Section Starts Here -->
 <section class="footer">
        <div class="container text-center">
            <p class="text-center">Powered by <a href="#">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
 <!-- Scripts -->
<script>
 function search_food() {
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

 <script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>
</body>
</html>