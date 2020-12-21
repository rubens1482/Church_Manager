<?php
//core
function dbcon(){
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "cman";
	$conn = new mysqli($host,$user,$pass,$db);
	if ($conn->connect_errno) {
		echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	} else {
		echo "http://" . $host ;
	}
	//mysqli_connect($host,$user,$pass);
	//mysqli_select_db($conn,$db);
}

function host(){
	//$h = "http://".$_SERVER['HTTP_HOST']."/bankdb/";
	//return $h;
}

function hRoot(){
	$url = $_SERVER['DOCUMENT_ROOT']."/bankdb/";
	return $url;
}

//parse string
function gstr(){
    $qstr = $_SERVER['QUERY_STRING'];
    parse_str($qstr,$dstr);
    return $dstr;
}

?>
