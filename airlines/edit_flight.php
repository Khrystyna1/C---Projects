<?php
echo $id = $_GET['id'];
//echo "<br/> ura<br/>";
mysql_connect("localhost:3306", "root", "") or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
// make database_name the current db
mysql_select_db("pp_projekt");

$sql = "SELECT * FROM tabl WHERE id = $id LIMIT 1";
$result = mysql_query($sql);
$row =mysql_fetch_array($result);

?>

<html>
<head>
 <title>::record to edit::</title>
 </head>
 <body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">
 <div style="background-color:#7cced6;color:white;padding:4px">
 <form method="POST" action="update_flights.php">
 <blockquote>
 <h3> + record to edit + </h3><br/>
 
 id: <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly="readonly" /><br/>
 title: <input type="text" name ="title"  value="<?php echo $row['title']; ?>" /><br/>
 airline: <input type="text" name ="airline"  value="<?php echo $row['airline']; ?>" /><br/>
 price: <input type="text" name ="price"  value="<?php echo $row['price']; ?>" /><br/>
 destination: <input type="text" name ="destination"  value="<?php echo $row['destination']; ?>" /><br/>
 rate: <input type="text" name ="airline"  value="<?php echo $row['rate']; ?>" /><br/>
 <input type ="submit" name="submit" value="save"/>
 <input type ="button" name="cancel" value="cancel" onclick="location.href='view_flights.php'"/><br/>

 </blockquote>
 </form>
 </div>
 
 </body>
 </html>
 <?php
 mysql_close(); 
?>