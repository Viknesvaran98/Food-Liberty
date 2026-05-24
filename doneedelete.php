<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


if(isset($_POST['delete']))
{
$donee_ID = $_POST['donee_ID'];

$query = "DELETE FROM donee WHERE donee_ID='$donee_ID' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
	echo "<script> alert('Data Deleted Successfully !!'); window.location = 'admindoneelist.php' </script>";
	
}
else
{
	echo '<script> alert("Data Not Deleted"); </script>';
}
}
?>