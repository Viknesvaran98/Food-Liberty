<?php
include 'dbConfigg.php';

session_start();
if(isset($_SESSION["username"]))
    $username= $_SESSION["username"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Liberty</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
                        <a href="doneemainpage.php">Back</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <?php
                    require_once('connectiondonor.php');
                    $result=$conn->prepare("SELECT c.* , p.* FROM donors c,excessfood p WHERE c.donor_ID=p.donor_ID");
                    $result->execute();
                    for($i=0; $row = $result->fetch(); $i++){
                ?>

                
                        <div class="food-menu-img">
                            <img width="auto" src="images/<?php echo $row['excessfoodimage']?>" class="img-responsive img-curve">
                        </div>
                    
    
                    <div class="food-menu-desc">
                        <h3>Food Title</h3>
                       

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Volunteer's Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Phone Number " class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Email " class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                    <a href="doneemainpage.php" class="btn btn-primary">Back</a>
                </fieldset>

            </form>
            <?php } ?>
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
            <p>Designed for <a href="#">Food Liberty</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>


<?php
session_start();
if(isset($_SESSION["doneeusername"]))
    $username= $_SESSION["doneeusername"];
?>
<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 

$excessfoodimage = $_POST["excessfoodimage"];
$excessfoodname = $_POST["excessfoodname"];
$bookingquantity = $_POST["bookingquantity"];
$booking_datetime = date('Y-m-d H:i:s');
$donor_ID = $_POST["donor_ID"];
$donee_ID = $_POST["donee_ID"];

$sql = "SELECT * FROM booking WHERE booking_ID='$booking_ID'";
$result=mysqli_query($conn,$sql); 
  
if (mysqli_num_rows($result)>0)
{     

echo "<script> alert('Similar excess food already posted. '); window.location = 'doneemainpage.php' </script>";

} else {   

$insert_sql="INSERT INTO booking VALUES(null,'$excessfoodimage','$excessfoodname','$bookingquantity','$booking_datetime','$donor_ID','$donee_ID','$excessfood_ID')";
mysqli_query($conn,$insert_sql);
}

if($insert_sql)
{
echo "<script> alert('Successfully posted, Thank you for using Food Liberty.'); window.location = 'doneemainpage.php' </script>";
}else{
echo "Fail";

}

?>