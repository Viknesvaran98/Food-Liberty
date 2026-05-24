<?php
session_start();
if(isset ($_SESSION["booking_ID"]))
    $booking_ID= $_SESSION["booking_ID"];
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


if(isset($_POST['save']))
{
$booking_ID = $_POST['booking_ID'];
    $excessfoodimage = $_POST['excessfoodimage'];
	$excessfoodname = $_POST['excessfoodname'];
  $bookingquantity = $_POST['bookingquantity'];
  $booking_datetime = $_POST['booking_datetime'];
	$donee_ID = $_POST['donee_ID'];
  $donor_ID = $_POST['donor_ID'];
  $username = $_POST['username'];
	$excessfood_ID = date('excessfood_ID');
    $pickfrom = $_POST['pickfrom'];
  $pickby = $_POST['pickby'];
  $booking_status = $_POST['booking_status'];








$query = "UPDATE booking SET booking_status='$booking_status' WHERE booking_ID='".$booking_ID."'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
	echo "<script> alert('Data Saved Successfully !!'); window.location = 'donormainpagee.php' </script>";
	
}
else
{
	echo "<script> alert('Data Not Saved !!'); window.location = 'donormainpagee.php' </script>";
}
}
?>