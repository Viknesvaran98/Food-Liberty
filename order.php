<?php
session_start();
if(isset ($_SESSION["doneeusername"]))
	$doneeusername= $_SESSION["doneeusername"];
?>


<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
	<title>Booking Page</title>
	<script type=text/javascript> 
function check( ) 
{    if ((document.form1.bookingquantity.value == "0")) 

{       alert("Please book again with more than 0 quantity");     
         return false;                  } 
    else        return true; }
</script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
	body { 
        font-family: "Times New Roman", Georgia, Serif;
        background-image: url(images/background1.0.jpg);
        background-repeat: no-repeat;
        background-size: cover; }
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
.box {
    border: 1px solid #dee2e6!important;
    padding: 10px;
}
.note {font-size: 12px;}
</style>
</head> 

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="doneemainpage.php" class="w3-bar-item w3-button">FOOD LIBERTY</a>
		 <!-- Search bar -->
<!--<input id="searchbar" onkeyup="search_postcode()" type="text" name="search" placeholder="Search by food ID.."> -->
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="doneemainpage.php" class="w3-bar-item w3-button">Back</a>
    </div>
  </div>
</div>
	<center>
	<body>
         <!-- Preloader -->
         <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
	<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Please book the quantity needed.</h4>
                </div>
								<div class="row mt-3">

                <?php
                                        if(isset($_GET['excessfood_ID']))
                                        {

                                            $excessfood_ID = $_GET['excessfood_ID'];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT excessfood.*, donors.*, donee.* FROM excessfood INNER JOIN donors INNER JOIN donee WHERE excessfood_ID='$excessfood_ID' AND doneeusername='$doneeusername'"; 
    $query_run = mysqli_query($connection,$query);
 if ($row = mysqli_fetch_array($query_run))
  {
    ?>

			<center>
				
					<form action = "" method="POST" >
          <div class="food-menu-box">
					
              <img class="food-detail" src="images/<?php echo $row['excessfoodimage']?>" alt="donor" width=260" height="250" />
              <div class="col-md-12"><label class="labels"></label><input type="hidden" class="form-control" name="excessfoodimage" id="excessfoodimage" value="<?php echo $row['excessfoodimage']?>" placeholder= " " required/></div>

					    <p class="food-detail"><mark><label>Food ID: <?php echo $row['excessfood_ID']; ?></label></mark></p>
              <div class="col-md-12"><label class="labels"></label><input type="hidden" class="form-control" name="excessfood_ID" id="excessfood_ID" value="<?php echo $row['excessfood_ID']?>" placeholder= " " required/></div>

			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
             <input type="hidden" class="form-control" name="excessfoodname" id="excessfoodname" value="<?php echo $row['excessfoodname']?>" placeholder= " " required/>
              <p class="food-detail"><label>Picking time: <?php echo $row['pickfrom']; ?> - <?php echo $row['pickby']; ?> </label></p>
              <div class="col-md-12"><label class="labels"></label><input type="hidden" class="form-control" name="pickfrom" id="pickfrom" value="<?php echo $row['pickfrom']?>" placeholder= " " required/></div>
              <br>
           

              <p class="food-detail"><label>Quantity Available: <?php echo $row['quantity']; ?> packet(s)</label></p>


              <div class="col-md-12">Packets needed: <label class="labels"><input type="number" class="form-control" name="bookingquantity" id="bookingquantity" placeholder="Enter quantity" onchange="calculatequantity()" value="0" required/></div>     

              <label class="labels"></label><input type="hidden" class="form-control" name="email" id="email" value="<?php echo $row['email']?>" placeholder= " " required/>
              <label class="labels"></label><input type="hidden" class="form-control" name="donee_ID" id="donee_ID" value="<?php echo $row['donee_ID']?>" placeholder= " " required/>
              <label class="labels"></label><input type="hidden" class="form-control" name="doneeusername" id="doneeusername" value="<?php echo $row['doneeusername']?>" placeholder= " " required/>
              <label class="labels"></label><input type="hidden" class="form-control" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>" placeholder= " " required/>
              <label class="labels"></label><input type="hidden" class="form-control" name="username" id="username" value="<?php echo $row['username']?>" placeholder= " " required/>

            

            
              <label class="labels"></label><input type="hidden" class="form-control" name="pickby" id="pickby" value="<?php echo $row['pickby']?>" placeholder= " " required/></div>

            
              <p class="note">*Please check the picking time and quantity available before placing order</p>	
   	
              <input type="hidden" class="form-control" name="pickby" id="pickby" value="<?php echo $row['pickby']?>" placeholder= " " required/>
				      <input class="button button1" type="submit" name="insert" value="Book">  

	        	</tr>
            </div>
						</form><br>

            <?php
                            }
                            else
                            {
                                echo "<h4>No Record Found</h4>";
                            }
                        }
                        
                        ?>	
</div>
			</center>






<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

if(isset($_POST['insert']))
{

  $excessfoodimage = $_POST['excessfoodimage'];
  $excessfoodname = $_POST['excessfoodname'];
  $bookingquantity = $_POST['bookingquantity'];
	$booking_datetime = date('Y-m-d H:i:s');
    $donee_ID = $_POST['donee_ID'];
    $donor_ID = $_POST['donor_ID'];
    $username = $_POST['username'];
    $excessfood_ID = $_POST['excessfood_ID'];
    $pickfrom = $_POST['pickfrom'];
    $pickby = $_POST['pickby'];
    $quantity = $_POST['quantity'];
    $booking_status = $_POST['booking_status'];


  $query = "INSERT INTO booking VALUES(NULL,'$excessfoodimage','$excessfoodname','$bookingquantity','$booking_datetime','$donee_ID','$donor_ID','$username','$excessfood_ID','$pickfrom','$pickby','$booking_status')";
  $query_run= mysqli_query($connection,$query);
  $update = "UPDATE `excessfood` SET quantity=quantity-'$bookingquantity' WHERE excessfood_ID='$excessfood_ID'";
  $query_run2= mysqli_query($connection,$update);

    
	if ($query_run && $query_run2)
	{
        echo "<script> alert('Ordered Successfully. Thanks for using Food Liberty'); window.location = 'sentbookings.php' </script>";
	}
	else
	{
		echo '<script type= "text/javascript"> alert ("Sorry") </script>';
	}
}

?>  


 <!-- JS -->
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


<script type="text/javascript">
  function calculatequantity() {
    var bookingQua = document.getElementById("bookingquantity").value;
    if (Number(bookingQua) >= 1) {
      Let phpval = "<?= $bookingquantity ?>";
      var quantityResult = document.querySelector('#bookingquantity');
      var remain = Number(bookingQua) - Number(phpval);

      return quantityResult.innerHTML = remain;
    }
    else{
      exit();
    }
 
    }
  

  </script>
<script type="text/javascript" src="pages/new/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="pages/new/js/templatemo-script.js"></script>   
</body>
</html>