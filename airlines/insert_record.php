<?php

//echo "You are on the insert_customer.php file<br/>";
$title = $_POST['title'];
$airline  = $_POST['airline'];
$price= $_POST['price'];
$destination  = $_POST['destination'];
$rate= $_POST['rate'];

mysql_connect("localhost:3306", "root", "") or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
// make database_name the current db
mysql_select_db("pp_projekt");

$sql = "INSERT INTO tabl (title,airline,price,destination,rate )
 VALUES 
 ('$title' ,'$airline' ,'$price' ,'$destination' ,'$rate')";
		

$query = mysql_query($sql);

mysql_close(); 

header("Location:basic.php")





?>