<?php
	$dataTable = $_GET['table'];
	
	// Configuration
	$dbhost = 'localhost';
	$dbname = 'test';
	// Connect to test database
	$m = new Mongo("mongodb://$dbhost");
	$db = $m->$dbname;
	
	$collection = $db->$dataTable;
	$cursor = $collection->find();
	$jsonArr = (json_encode(iterator_to_array($cursor)));
	echo "<br><br><br>";
	echo "<script>console.log($jsonArr);</script>";
	echo $cursor;

?>