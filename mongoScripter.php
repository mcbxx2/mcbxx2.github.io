<?php
	// Configuration
	$dbhost = 'localhost';
	$dbname = 'test';
	// Connect to test database
	$m = new Mongo("mongodb://$dbhost");
	$db = $m->$dbname;
	
	$statusCode = $_POST['intake'];
	if($statusCode == 'get'){
		$dataTable = $_POST['table'];
		$collection = $db->$dataTable;
		//$cursor = $collection->find(array("body" => array('$exists' => true)));
		$cursor = $collection->find();
		$jsonArr = (json_encode(iterator_to_array($cursor)));
		//$jsonArr = json_encode($cursor);
		echo $jsonArr;
		/*$arrayJSON = [];
		array_push($arrayJSON, json_encode($cursor));
		echo json_encode($arrayJSON);*/
		/*$arrayJSON = [];
		foreach($cursor as $document){
			error_log("added something to array");
			array_push($arrayJSON, ($document));
		}
		echo json_encode($arrayJSON);*/
	}else if($statusCode == 'insert'){
		$jsonData = $_POST['todoEs'];
		$dataTable = $_POST['table'];
		$collection = $db->$dataTable;
		$collection->remove(array());
		$collection->insert($jsonData);
		echo "inserted successfully";
	}
?>