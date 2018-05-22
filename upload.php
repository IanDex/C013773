<?php 
$ruta = "img/";

$request = 1;
if(isset($_POST['request'])){
	$request = $_POST['request'];
}

if($request == 1){

$ruta = $ruta . basename($_FILES['file']['name']);
//$ruta = chmod($ruta,0777);
move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
echo json_encode(array("res" => true));
}

// Remove file
if($request == 2){

	$filename = $ruta.$_POST['name']; 
	unlink($filename); exit;
}

 ?>