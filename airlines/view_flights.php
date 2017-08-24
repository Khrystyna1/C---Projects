<?php
mysql_connect("localhost:3306", "root", "") or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
// make database_name the current db
mysql_select_db("pp_projekt");

$sql = "SELECT * FROM tabl ";
$result = mysql_query($sql);
mysql_close(); 
?>
<html>
<head>
 <title>::view fligths details::</title>
 </head>
  <body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
 <div style="background-color:#7cced6;color:white;padding:4px">
 <blockquote>
 <h3>+ List of fligths +</h3><h3><a href="basic.php"> + home +</a></h3>
 <table border="1">
 <?php
 // echo "You are in the view_flights.php"
 while ($row = mysql_fetch_array($result)){
	 echo "<tr>";
	 echo "<td>".$row['title']."</td>";
	 echo "<td>".$row['airline']."</td>";
	 echo "<td>".$row['price']."</td>";
	 echo "<td>".$row['destination']."</td>";
	 echo "<td>".$row['rate']."</td>";
	 echo "<td><a href=\"edit_flight.php?id=".$row['id']."\">+ edit + </a></td>";
	  echo "</tr>";
 }
 
 ?>
 <table>
 </blockquote>
 </div>
 </body>
 </html>
 <?php
 mysql_close();
 ?>