

<?php

$filename = "export_xml_".date("Y-m-d_H-i",time()).".xml";

$mysql = new Mysqli('localhost:3306', 'root', '', 'pp_projekt');
if ($mysql->connect_errno) {
    throw new Exception(sprintf("Mysqli: (%d): %s", $mysql->connect_errno, $mysql->connect_error));
}
$sqlQuery = 'SELECT * FROM tabl';
if (!$result = $mysql->query($sqlQuery)) {
    throw new Exception(sprintf('Mysqli: (%d): %s', $mysql->errno, $mysql->error));
}
$dom = new DOMDocument;
$dom->preserveWhiteSpace = FALSE;

$table = $dom->appendChild($dom->createElement('table'));

foreach($result as $row) {
    $data = $dom->createElement('row');
    $table->appendChild($data);

    foreach($row as $name => $value) {

        $col = $dom->createElement('column', $value);
        $data->appendChild($col);
        $colattribute = $dom->createAttribute('name');
      
        $colattribute->value = $name;
        $col->appendChild($colattribute);           
    }
}


$dom->formatOutput = true;  
$test1 = $dom->saveXML(); 
$dom->save($filename); 
$dom->save('xml/'.$filename);   
?>