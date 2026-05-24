<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 

$doneeusername = $_POST["doneeusername"];
$doneeimage = $_POST["doneeimage"];
$password = $_POST["password"];
$donee_password = $_POST["donee_password"];
$fullname = $_POST["fullname"];
$ngoname = $_POST["ngoname"];
$typeofid = $_POST["typeofid"];
$ngoregistnum = $_POST["ngoregistnum"];
$email = $_POST["email"];
$contact_num = $_POST["contact_num"];
$doneeaddress = $_POST["doneeaddress"];
$city = $_POST["city"];
$state = $_POST["state"];
$postcode = $_POST["postcode"];
$dateregist = date('Y-m-d H:i:s');

$sql = "SELECT * FROM donee WHERE doneeusername='$doneeusername'";
$result=mysqli_query($conn,$sql); 
$sql2 = "SELECT * FROM donee WHERE ngoregistnum='$ngoregistnum'";
$result2=mysqli_query($conn,$sql2); 
  
if (mysqli_num_rows($result)>0)
{     
echo "<script> alert('Username number already registered.Please login. '); window.location = 'logindonee.html' </script>";
} 
else if (mysqli_num_rows($result2)>0) { 
  echo "<script> alert('Registration number already registered.Please login. '); window.location = 'logindonee.html' </script>";
}
else {   
$insert_sql="INSERT INTO donee VALUES(null,'$doneeusername','$doneeimage','$password','$donee_password','$fullname','$ngoname','$typeofid','$ngoregistnum','$email','$contact_num','$doneeaddress','$city','$state','$postcode','$dateregist')";
mysqli_query($conn,$insert_sql);
}

if($insert_sql)
{
echo "<script> alert('Successfully Registered as Donee.'); window.location = 'logindonee.html' </script>";
}else{
echo "Fail";
}
?>