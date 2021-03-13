<?php
require_once('config/config.php');

if(isset($_POST['import'])){

	$file = $_FILES["file"]["tmp_name"];
	if($_FILES["file"]["size"] > 0){
		$file_open = fopen($file, 'r');
		while ($getData = fgetcsv($file_open,10000,",")) {
			
			$insert_CSV = "INSERT INTO users(first_name,last_name,email) VALUES('".$getData[0]."','".$getData[1]."','".$getData[2]."')";
			$result = mysqli_query($conn,$insert_CSV);
			if(!isset($result)){
				echo "Failed To Upload";

			}
			else{
				echo "Imported Successfully!!!";
			}
		}
		

	}
	fclose($file_open);

}

?>