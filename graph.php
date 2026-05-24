<?php
 $con = mysqli_connect('localhost','root','','mainproject');

?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 
 <script type="text/javascript">
 google.load('visualization', '1', {packages: ['corechart', 'bar']});
 google.setOnLoadCallback(drawMaterial);

 function drawMaterial() {
 var data = google.visualization.arrayToDataTable([
 ['State', 'Number of Donors', ''],
 <?php 
 $query = "SELECT count(donor_ID) AS count, dstate FROM donors GROUP BY dstate";

 $exec = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['dstate']."',";
 $query2 = "SELECT count(distinct donor_ID) AS count FROM donors WHERE dstate='".$row['dstate']."' ";
 $exec2 = mysqli_query($con,$query2);
 $row2 = mysqli_fetch_assoc($exec2);
 
 echo $row2['count'];
 
 

 $rvisits = $row['count']-$row2['count'];

 echo ",".$rvisits."],";
 }
 ?>
 ]);

 var options = {
 
 title: 'Registrated Donors According To States',
 
 bars: 'horizontal'
 };
 var material = new google.charts.Bar(document.getElementById('barchart'));
 material.draw(data, options);
 }
 </script>
</head>
<body>
 
 <div id="barchart" style="width: 700px; height: 300px;"></div>
</body>
</html>