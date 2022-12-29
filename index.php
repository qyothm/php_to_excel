<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP to Excel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="card mt-2 mb-2">
  	<div class="card-header text-center">
  		<h4>Report Data</h4>
  		<form action="process.php" method="post">
  			<button type="submit" name="submit" class="btn btn-primary float-right">Download</button>
  		</form>
  	</div>
  	<div class="card-body">
  		<table class="table table-striped table-hover">
		 <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Address</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Designation</th>
		      <th scope="col">Age</th>
		    </tr>
		  </thead>
  <tbody>
  	<?php
  		$sql = "SELECT * FROM `user`";
  		$res = mysqli_query($link, $sql);
  		if(mysqli_num_rows($res) > 0) {
  			$i = 1;
  			while ($row = mysqli_fetch_array($res)) {
  	?>
	  	<tr>
	      <th scope="row"><?php echo $i++; ?></th>
	      <td><?php echo $row['name']; ?></td>
	      <td><?php echo $row['address']; ?></td>
	      <td><?php echo $row['gender']; ?></td>
	      <td><?php echo $row['designation']; ?></td>
	      <td><?php echo $row['age']; ?></td>
	    </tr>
  	<?php
  			}
  		} else {
  			echo "no data found";
  		}
  	?>
  </tbody>

		</table>
  	</div>
  </div>
</div>

</body>
</html> 