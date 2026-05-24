<?php
$connection = mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 


if(isset($_POST['delete']))
{
$excessfood_ID = $_POST['excessfood_ID'];

$query = "DELETE FROM excessfood WHERE excessfood_ID='$excessfood_ID' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
	echo "<script> alert('Food Details Deleted Successfully !!'); window.location = 'postedfood.php' </script>";
	
}
else
{
	echo '<script> alert("Food Details Not Deleted"); </script>';
}
}
?>