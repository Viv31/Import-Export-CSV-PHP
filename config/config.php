<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "import_export_csv_php";
$conn = mysqli_connect($host,$user,$pass,$db_name);
if($conn){
	//echo "Connected";
}
else{
	echo "Failed";
}
?>