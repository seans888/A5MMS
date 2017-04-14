<?php 

$db = "a5mmsdb";
$link = mysql_connect("localhost","root");
				
if(!$link) die ("Couldn't connect to MySQL");
mysql_select_db($db,$link) or die ("Couldn't open $db:".mysql_error());

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "a5mmsdb";

// create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// check connection 
if($connect->connect_error) {
	die("Connection Failed : " . $connect->connect_error);
} else {
	//echo "Successfully Connected";
}

?>