<?php
include 'dbConfigg.php';

session_start();
if(isset($_SESSION["username"]))
    $username= $_SESSION["username"];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Records</title>
</head>
<body>

<form action="updatexcessprocess.php" method="post">
<input type="hidden" name="excessfood_ID" value="<?php echo $excessfood_ID; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>
<?php
		require_once('connectiondonor.php');
		$result = $conn->prepare("SELECT * FROM excessfood WHERE excessfood_ID=excessfood_ID");
		$result->execute();
		
	?>
<tr>
<td width="179"><b><font color='#663300'>Excessfoodname<em>*</em></font></b></td>
<td><label>
<input type="text" name="excessfoodname" value="<?php echo $excessfoodname; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Excessfoodimage<em>*</em></font></b></td>
<td><label>
<input type="file" name="excessfoodimage" value="<?php echo $excessfoodimage; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Timelimitation<em>*</em></font></b></td>
<td><label>
<input type="time" name="timelimitation" value="<?php echo $timelimitation; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Quantity<em>*</em></font></b></td>
<td><label>
<input type="text" name="quantity" value="<?php echo $quantity; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Postedtime<em>*</em></font></b></td>
<td><label>
<input type="text" name="postedtime" value="<?php echo $postedtime; ?>" />
</label></td>
</tr>


<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
 
</body>
</html>