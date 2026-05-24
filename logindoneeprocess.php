<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 
$doneeusername = $_POST["doneeusername"];
$password = $_POST["password"];

$doneeusername = stripslashes($doneeusername);
$password = stripslashes($password);
$doneeusername = mysqli_real_escape_string($conn, $doneeusername);
$password = mysqli_real_escape_string($conn, $password);

$sql="SELECT doneeusername FROM donee WHERE doneeusername='".$doneeusername."'"; 
$result=mysqli_query($conn,$sql);

if(!empty($doneeusername) && !empty($password) && !is_numeric($doneeusername))
		{
			//read from database
			$query = "select * from donee where doneeusername = '".$doneeusername."'";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
                        session_start();
						$_SESSION['doneeusername'] = $doneeusername;
						echo "<script> alert('Welcome $doneeusername'); window.location = 'doneemainpage.php' </script>";
						die;
					}
				}
			}
      echo "<script> alert('Invalid login. Please enter again.'); window.location = 'logindonee.html' </script>";
		}else
		{
       echo "<script> alert('Please enter all fields'); window.location = 'logindonee.html' </script>";
       exit();
		}
?>
