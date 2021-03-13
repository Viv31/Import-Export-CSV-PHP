<?php
require_once('config/config.php');

if(isset($_POST['export_csv'])){

header('Content-Type:text/csv; charset=utf-8');
header('Content-Disposition:attachment; filename = myreport.csv');
$output = fopen("php://output","w");
fputcsv($output,array('first_name','last_name','email'));
$query = "SELECT `first_name`,`last_name`,`email` FROM users ORDER BY id DESC";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
	fputcsv($output,$row);
}
fclose($output);

}

?>