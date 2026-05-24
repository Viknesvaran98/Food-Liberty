<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


if(isset($_POST['delete']))
{
$booking_ID = $_POST['booking_ID'];

$query = "DELETE FROM booking WHERE booking_ID='$booking_ID' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
	echo "<script> alert('Booking Deleted Successfully !!'); window.location = 'donormainpagee.php' </script>";
	
}
else
{
	echo '<script> alert("Booking Not Deleted"); </script>';
}
}
?>