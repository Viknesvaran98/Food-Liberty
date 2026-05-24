<?php
session_start();
if(isset ($_SESSION["username"]))
	$username= $_SESSION["username"];

include('dbconfig.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location:dbconfig.php");
}
?>