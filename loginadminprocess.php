<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 
$username = $_POST["username"];
$adminpassword = $_POST["adminpassword"];

$username = stripslashes($username);
$adminpassword = stripslashes($adminpassword);
$username = mysqli_real_escape_string($conn, $username);
$adminpassword = mysqli_real_escape_string($conn, $adminpassword);

$sql="SELECT username FROM admin WHERE username='".$username."'"; 
$result=mysqli_query($conn,$sql);

		if(!empty($username) && !empty($adminpassword) && !is_numeric($username))
		{
			//read from database
			$query = "select * from admin where username = '".$username."'";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['adminpassword'] === $adminpassword)
					{
						session_start();
						$_SESSION['username'] = $username;
						echo "<script> alert('Welcome $username'); window.location = 'adminmainpage.php' </script>";
						die;
					}
				}
			}
      echo "<script> alert('Error with Username or Password. Please enter again.'); window.location = 'loginadmin.html' </script>";
		}else
		{
       echo "<script> alert('Please enter all fields'); window.location = 'loginadmin.html' </script>";
       exit();
		}
?>