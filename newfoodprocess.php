<?php
session_start();
if(isset($_SESSION["username"]))
    $username= $_SESSION["username"];
?>
<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


$excessfoodname = $_POST["excessfoodname"];
$excessfoodimage = $_POST["excessfoodimage"];
$pickfrom = $_POST["pickfrom"];
$pickby = $_POST["pickby"];
$quantity = $_POST["quantity"];
$food_status = $_POST["food_status"];
$postedtime = date('Y-m-d H:i:s');
$donor_ID = $_POST["donor_ID"];
$username = $_POST["username"];

$sql = "SELECT * FROM excessfood WHERE excessfoodname='$excessfoodname' AND donor_ID='$donor_ID'";
$result=mysqli_query($conn,$sql); 
$sql2 = "SELECT * FROM donors WHERE username='".$username."'";
$result2=mysqli_query($conn,$sql2); 
  
if (mysqli_num_rows($result)>0 && mysqli_num_rows($result2))
{     
    echo "<script> alert('Similar food already posted. Please check and post new food details.'); window.location = 'postfood.php' </script>";
} 
else{
    $insert_sql="INSERT INTO excessfood VALUES(null,'$excessfoodname','$excessfoodimage','$pickfrom','$pickby','$quantity','$food_status','$postedtime','$donor_ID','$username')";
    mysqli_query($conn,$insert_sql);

} 

if($insert_sql)
{
echo "<script> alert('Successfully posted, Thank you for using Food Liberty.'); window.location = 'postfood.php' </script>";
}else{
echo "<script> alert('Sorry. '); window.location = 'postfood.php' </script>";

}

?>