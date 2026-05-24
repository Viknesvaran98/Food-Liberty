<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


if(isset($_POST['delete']))
{
$booking_ID = $_POST['booking_ID'];

$query = "DELETE FROM booking WHERE booking_ID='$booking_ID' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
	echo "<script> alert('Data Deleted Successfully !!'); window.location = 'adminbookinglist.php' </script>";
	
}
else
{
	echo '<script> alert("Data Not Deleted"); </script>';
}
}
?>