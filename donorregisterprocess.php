<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 

$username = $_POST["username"];
$donorimage = $_POST["donorimage"];
$password = $_POST["password"];
$donor_password = $_POST["donor_password"];
$donorfullname = $_POST["donorfullname"];
$outletname = $_POST["outletname"];
$outlet_type = $_POST["outlet_type"];
$registrationnumber = $_POST["registrationnumber"];
$donoremail = $_POST["donoremail"];
$donorcontact_num = $_POST["donorcontact_num"];
$donoraddress = $_POST["donoraddress"];
$dcity = $_POST["dcity"];
$dstate = $_POST["dstate"];
$dpostcode = $_POST["dpostcode"];
$usertype = $_POST["usertype"];
$dateregist = date('Y-m-d H:i:s');

$sql = "SELECT * FROM donors WHERE username='$username'";
$result=mysqli_query($conn,$sql); 
$sql2 = "SELECT * FROM donors WHERE registrationnumber='$registrationnumber'";
$result2=mysqli_query($conn,$sql2);
  
if (mysqli_num_rows($result)>0)
{     
echo "<script> alert('Username name already registered.Please login. '); window.location = 'logindonor.html' </script>";
} 
else if (mysqli_num_rows($result2)>0) { 
  echo "<script> alert('Registration number already registered.Please login. '); window.location = 'logindonor.html' </script>";
}
else {   
$insert_sql="INSERT INTO donors VALUES(null,'$username','$donorimage','$password','$donor_password','$donorfullname','$outletname','$outlet_type','$registrationnumber','$donoremail','$donorcontact_num','$donoraddress','$dcity','$dstate','$dpostcode','$usertype','$dateregist')";
mysqli_query($conn,$insert_sql);
}
if($insert_sql)
{
echo "<script> alert('Successfully Registered as Donor. Please Login'); window.location = 'logindonor.html' </script>";
}else{
echo "Fail";
}
?>