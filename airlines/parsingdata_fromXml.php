<?php 
//include_once('airlines/curl_quary.php');

	$doc = new DOMDocument(); 
	$filename = 'http://localhost:81\airlines\dane.xml';
	$doc->load( $filename );
	echo $doc->saveXML();
	$web_rate_elements = $doc->getElementsByTagName( "web_rate_element" );
if(!$web_rate_elements){exit;}
//Connect databse
$link = mysql_connect('localhost:3306', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$db_selected = mysql_select_db('pp_projekt', $link);
if (!$db_selected) {
    die ('Can\'t use database_name : ' . mysql_error());
}

foreach( $web_rate_elements as $web_rate_element )
	{ 
	    $destinations = $web_rate_element->getElementsByTagName( "destination" );
		$access_numbers = $web_rate_element->getElementsByTagName( "access_number" );
		$rates = $web_rate_element->getElementsByTagName( "rate" );
		$sms_rates = $web_rate_element->getElementsByTagName( "sms_rate" );
		$bt_rates = $web_rate_element->getElementsByTagName( "bt_rate" );

		//Get Values
		$destination = trim($destinations->item(0)->nodeValue);
		$access_number = $access_numbers->item(0)->nodeValue;
		$rate = trim($rates->item(0)->nodeValue);
		$sms_rate = $sms_rates->item(0)->nodeValue;
		$bt_rate = $bt_rates->item(0)->nodeValue;

$sql = "INSERT INTO tabl (title,airline, price,  destination, rate ) 
VALUES
 ('$destination' ,'$access_number' ,'$rate' , '$sms_rate' ,'$bt_rate')";
		

		@mysql_query($sql);



}
mysql_close($link); 
?>