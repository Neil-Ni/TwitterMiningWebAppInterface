<?php
	header('Content-Type: application/json');
	$string= $_POST['input01'];

	$data = array(
		'input01' => $string,
	);
	#echo json_encode($data)
	file_put_contents('config.txt', serialize(json_encode($data)));

?>
