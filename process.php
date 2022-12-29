<?php
include 'config.php';

$output = "";

if(isset($_POST['submit']))
{
	$sql = "SELECT * FROM `user`";
	$res = mysqli_query($link, $sql);
	$i = 1;
	if(mysqli_num_rows($res) > 0) {
		$output .= '
		<table class="table" bordered="1">
				    <tr>
				      <th>Name</th>
				      <th>Address</th>
				      <th>Gender</th>
				      <th>Designation</th>
				      <th>Age</th>
				     </tr>
		';
	  	while ($row = mysqli_fetch_array($res)) {
	  	$output .= '
	  			<tr>
			      <td>'.$row['name'].'</td>
			      <td>'.$row['address'].'</td>
			      <td>'.$row['gender'].'</td>
			      <td>'.$row['designation'].'</td>
			      <td>'.$row['age'].'</td>
			    </tr>
	  	';

	  	$output .= '</table>';

	  	header('Content-Type: application/xls');
	  	header('Content-Disposition:attachment;filename=report.xls');

	  	echo $output;
	  	}
	} else {
		echo "no data found";
	}
}
?>