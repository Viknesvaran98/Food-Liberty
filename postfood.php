<?php
include 'dbConfigg.php';

session_start();
if(isset($_SESSION["username"]))
    $username= $_SESSION["username"];
?>

<html lang="en">
    <style>
.container{
  margin-left:auto;
  margin-right:auto;  
  margin-top:calc(calc(100vh - 405px)/2);
}
#form1{
  width:auto;
}
.alert{
  text-align:auto;
}

#preview{  
  max-height:256px;
  height:auto;
  width:auto;
  display:block;
  margin-left: auto;
   margin-right: auto;
  padding:5px;
}
#img_container{
  border-radius:5px;
  margin-top:20px;
  width:auto;  
}
.input-group{  
  margin-left:calc(calc(100vw - 100%)/2);
  margin-top:40px;
  width:320px;
}
.imgInp{  
  width:150px;
  margin-top:10px;
  padding:10px;
  background-color:#d3d3d3;  
}
.loading{
   animation:blinkingText ease 2.5s infinite;
}
@keyframes blinkingText{
    0%{     color: #000;    }     
    50%{   color: #transparent; }
    99%{    color:transparent;  }
    100%{ color:#000; }
}
.custom-file-label{
  cursor:pointer;
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
<title> Post New Food </title>
<script type=text/javascript> 
function check( ) 
{    if ((document.form1.excessfoodname.value == "") || (document.form1.pickfrom.value == "") || (document.form1.pickby.value == "") || (document.form1.quantity.value == "") || (document.form1.food_status.value == "")) 

{       alert("Please enter all fields");     
         return false;                  } 
    else        return true; }
</script>
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
                    <img src="images/adminwall6.png" alt="Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="donormainpagee.php" class="notification">Home</a>
                    </li>
                    <li>
                        <a href="postedfood.php" class="notification">Posted Food</a>
                    </li>
                    <li>
                        <a href="postfood.php" class="notification mm-active">Post New Food</a>
                    </li>
                    <li>
                    <?php
                                     
                                     $connection = mysqli_connect("localhost","root","");
                                     $db = mysqli_select_db($connection,'mainproject');
                                     
                                         $query = "SELECT * FROM `donors` WHERE username='$username' LIMIT 1"; 
                                         $query_run = mysqli_query($connection,$query);
                                         if ($row = mysqli_fetch_array($query_run))
                                         {
                                           ?>
                    <a href="donordetail.php" class="notification"><?php echo $row['donorfullname']; ?></a>
                    <?php }?>
                        
                    </li>
                    <li>
                        <a href="logout.php" class="notification">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            
            <h2 class="text-center text-black">Fill this form to post excess food.</h2>

            <form name="form1" form method="post" action="newfoodprocess.php" id="signup-form" class="signup-form" onsubmit="return check( )">
                <fieldset>
                     <h3>New Food</h3>

                     <div class="alert"></div>
                     <div id='img_container'><img id="preview" src="https://webdevtrick.com/wp-content/uploads/preview-img.jpg" alt="your image" title=''/></div> 
                     <div class="input-group"> 
                     <div class="custom-file">
                        <div class="food-menu-img">                
		                    <input enctype="multipart/form-data" class="form-input" type="file" name="excessfoodimage" id="excessfoodimage"/>  
                        <br />  
                     	</div>
                </fieldset>
                <fieldset>
                    <h3>Food Details</h3>
                    <div class="order-label">Food Name</div>
                    <input type="text" name="excessfoodname" id="excessfoodname" placeholder="Excess food name" class="input-responsive" required>
                    <div class="order-label">Pick up time from</div>
                    <input type="time" name="pickfrom" id="pickfrom" placeholder="From" class="input-responsive" required>    
                    <div class="order-label">By</div>
                    <input type="time" name="pickby" id="pickby" placeholder="By" class="input-responsive" required>
                    <div class="order-label">Quantity Available (Packets)</div>
                    <input type="number" name="quantity" id="quantity" class="input-responsive" value="1" required>
                    <div class="order-label">Food Status: </div>
                     
<div class="label"><select name = "food_status">

<option value = "Available" required>Available</option>
<option value = "Out of Stock">Out of Stock</option>

</select></div><br><br>

                    <?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'mainproject');

    $query = "SELECT * FROM `donors` where username = '".$_SESSION['username']."'"; 
    $query_run = mysqli_query($connection,$query);

  while ($row = mysqli_fetch_array($query_run))
  {
    ?>
                    <input type="hidden" name="donor_ID" id="donor_ID" value="<?php echo $row['donor_ID']?>"/>
                    <input type="hidden" name="username" id="username" value="<?php echo $row['username']?>"/>
                    <?php
					}
			?>
                    <input type="submit" name="submit" id="Submit" class="btn btn-primary">
                    <a href="donormainpagee.php" class="btn btn-primary">Back</a>
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

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
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Powered by <a href="#">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
    
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    // Code By Webdevtrick ( https://webdevtrick.com )
$("#excessfoodimage").change(function(event) {  
  RecurFadeIn();
  readURL(this);    
});
$("#excessfoodimage").on('click',function(event){
  RecurFadeIn();
});
function readURL(input) {    
  if (input.files && input.files[0]) {   
    var reader = new FileReader();
    var filename = $("#excessfoodimage").val();
    filename = filename.substring(filename.lastIndexOf('\\')+1);
    reader.onload = function(e) {
      debugger;      
      $('#preview').attr('src', e.target.result);
      $('#preview').hide();
      $('#preview').fadeIn(500);      
      $('.form-input').text(filename);             
    }
    reader.readAsDataURL(input.files[0]);    
  } 
  $(".alert").removeClass("loading").hide();
}
function RecurFadeIn(){ 
  console.log('ran');
  FadeInAlert("Loading..");  
}
function FadeInAlert(text){
  $(".alert").show();
  $(".alert").text(text).addClass("loading");  
}
</script>
	  
    <script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>
</body>
</html>