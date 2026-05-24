<?php
include 'dbConfig.php';

session_start();
if(isset ($_SESSION["username"]))
    $username= $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon" />
<title> Posted Food </title>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Liberty</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
    <style>
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
                <li>
                    <a href="donormainpagee.php" class="notification">Home
                    </span>
                    </a>
                    </li>
                    <li>
                        <a href="postedfood.php" class="notification mm-active">Posted Food</a>
                    </li>
                    <li>
                        <a href="postfood.php" class="notification">Post New Food</a>
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

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
        
        <h3 class="text-left">Posted food list.</h3>
     <input id="searchbar" onkeyup="search_postcode()" type="text"
        name="search" placeholder="Search by food id or food name.."><br><br>

       <!-- unwanted <h4>Please Update Posted Food <a href="updatexcess.php">Here</a></h4>-->
            
           <?php
		require_once('connectiondonor.php');
        //$result=$conn->prepare("SELECT c.* , p.* FROM donors c,excessfood p WHERE c.username=p.username AND c.donor_ID=p.donor_ID order by postedtime DESC");
        $result=$conn->prepare("SELECT donors.*,excessfood.* FROM donors INNER JOIN excessfood ON donors.username=excessfood.username ORDER BY `excessfood`.`postedtime`");
        $result->execute();
        $row = $result->fetch();
        //var_dump($row);
        
		for($i=0; $row = $result->fetch(); $i++){
            if($username==$row['username']){
	?>
		<tr>
			<div class="food-menu-box">
                <div class="food-menu-img">
                    <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
            <p class="food-detail"><label>No: <?php echo $row['excessfood_ID']; ?></label></p>
			<p class="food-detail"><label>Food Name: <?php echo $row['excessfoodname']; ?></label></p>
			<p class="food-detail"><label>Quantity Posted: <?php echo $row['quantity']; ?> packets</label></p>
			<p class="food-detail"><label>Pick up time: <?php echo $row['pickfrom']; ?> - <?php echo $row['pickby']; ?></label></p>
            
            <p class="food-detail"><label>Posted On: <?php echo date('d-m-Y h:i:sa',strtotime($row['postedtime'])); ?></label></p>
            <p class="food-detail"><label>Status: <?php echo $row['food_status']; ?></label></p>
        
        
			 <form action="donordeletefood.php" method="post">
        <input type="hidden" name="excessfood_ID" value="<?php echo $row['excessfood_ID'] ?>"><br>
        <a href="updatexcess.php?excessfood_ID=<?=$row['excessfood_ID']?>" class="btn btn-success">Edit</a> <br><br>
        <th> <input type="submit" name="delete" class="btn btn-danger" value="Delete"></th>
        </form>
		</tr>
		
			
                </div>
            </div>
        		
		<?php } }?>
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
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Powered by <a href="donormainpagee.php">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
	  <!-- Scripts -->
      <script src="main/extra/vendor/jquery/jquery.min.js"></script>
		<script src="main/extra/assets/js/owl-carousel.js"></script>
		<script src="main/extra/assets/js/imagesloaded.js"></script>
		<script src="main/extra/assets/js/custom.js"></script>
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
