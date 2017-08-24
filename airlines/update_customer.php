<?php
//echo "You are on the insert_customer.php file<br/>";
$id = $_POST['id'];
$title = $_POST['title'];
$airline  = $_POST['airline'];
$price= $_POST['price'];
$destination  = $_POST['destination'];
$rate= $_POST['rate'];

mysql_connect("localhost:3306", "root", "") or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
// make database_name the current db
mysql_select_db("pp_projekt");

$sql = "UPDATE tabl 
SET title='$title',airline='$airline',price='$price',destination='$destination',rate='$rate'
 WHERE id=$id";


$result = mysql_query($sql);

mysql_close(); 

header("Location: basic.php");
?>