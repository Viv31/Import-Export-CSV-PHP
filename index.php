<?php 
	require_once('header/header.php'); 
	require_once('config/config.php');
?>
              
  <div class="row">
  	<div class="col-md-6 mx-auto">
  		<h2>CSV Upload </h2>
  		<form action="insert_csv.php" method="POST" enctype="multipart/form-data">
  			<div class="form-group">
  				<input type="file" name="file" id="file" class="form-control" placeholder="Import CSV here" value="">
  				<br>
  				<input type="submit" name="import" id="import" class="btn btn-primary" value="Import">
  			</div>
  			
  		</form>
  	</div>
  </div>

<div class="row">
  	<div class="col-md-10 mx-auto">
  		<form action="export_csv.php" method="POST" enctype="multipart/form-data">
  		<input type="submit" name="export_csv" id="export_csv" value="Export CSV" class="btn btn-dark">
  	</form>
  		<table class="table">
    <thead>
      <tr>
      	<th>Sno</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    	<?php  
$getAllData = "SELECT * FROM users";
$res = mysqli_query($conn,$getAllData);
if(mysqli_num_rows($res)>0){
	$sno=1;
	while($rs = mysqli_fetch_assoc($res)) { ?>
		<tr>
        <td>#<?php echo $sno++; ?></td>
        <td><?php echo $rs['first_name']; ?></td>
        <td><?php echo $rs['last_name']; ?></td>
        <td><?php echo $rs['email']; ?></td>
      </tr>

	<?php } } ?>
      
     
    </tbody>
  </table>
  	</div>
  	
  </div>

  
<?php require_once('footer/footer.php'); ?>
