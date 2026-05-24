<html>
<?php
$conn=mysqli_connect("localhost", "root", "", "mainproject") OR die ("Error"); 
$username = $_POST["username"];
$password = $_POST["password"];
$usertype = $_POST["usertype"];

$username = stripslashes($username);
$password = stripslashes($password);
$usertype = stripslashes($usertype);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$usertype = mysqli_real_escape_string($conn, $usertype);

$sql="SELECT username FROM donors WHERE username='".$username."'"; 
$result=mysqli_query($conn,$sql);

if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			//read from database
			$query = "select * from donors where username = '".$username."'";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						if($user_data['usertype']=="1")
						{
							session_start();
							$_SESSION['username'] = $username;
						echo "<script> alert('Welcome $username'); window.location = 'donormainpagee.php' </script>";
						die();
					}
					else
					{
						echo "<script> alert('Welcome $username'); window.location = 'adminmainpage.php' </script>";
					}
				}
			}
      echo "<script> alert('Invalid login. Please enter again.'); window.location = 'logindonor.html' </script>";
		}}else
		{
       echo "<script> alert('Please enter all fields'); window.location = 'logindonor.html' </script>";
       exit();
		}
?>
</html>