<?php 

include("app/_main/model/_herder.php");
include("app/_main/model/_connect.php");

$DOMAIN = isset($uri_past[0]) && $uri_past[0]!="" ? $uri_past[0] : null;
$ACTION = isset($uri_past[1]) && $uri_past[1]!="" ? $uri_past[1] : null;
$PAGE = $DOMAIN."/model/".$ACTION;


$json["date_now"] = date("Y-m-d H:i:s");

$actionFile = "app/". $PAGE.".php";
if (file_exists($actionFile)){
	
	include($actionFile);

	if (function_exists($ACTION)){
		$json = $ACTION($conn);
	}else{
		$json["alert"] = "Function not found!!!";
	}
}else{
	$json["alert"] = "File not found!!!";
}



mysqli_close($conn);

echo json_encode($json);
?>