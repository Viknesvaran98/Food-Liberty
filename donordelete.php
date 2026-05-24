<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


if(isset($_POST['delete']))
{
$donor_ID = $_POST['donor_ID'];

$query = "DELETE FROM donors WHERE donor_ID='$donor_ID' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
	echo "<script> alert('Data Deleted Successfully !!'); window.location = 'admindonorlist.php' </script>";
	
}
else
{
	echo '<script> alert("Data Not Deleted"); </script>';
}
}
?>

