
<html>
<head>



<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: orange;
    color: white;
}
</style>
</head>
</html>

<?php

function showdetails($standard,$rollno){
	include('dbconn.php');
	$sql = "SELECT * FROM student WHERE rollno='$rollno' AND standard = '$standard'";
	$run = mysqli_query($conn,$sql);

	if (mysqli_num_rows($run)>0) {

		$data = mysqli_fetch_assoc($run);
		?>
		<table border="1" style="width: 50%; margin-top: 20px;" align="center" id="t01">
			<tr>
				<th colspan="3" align="center">Student Details</th>
			</tr>
			<tr>
				<td rowspan="5"><img src="dataimg/<?php echo $data['image'] ?>" style="max-height: 350px; max-width: 320px; padding-left: 10px;" /></td>
				<th>Roll No</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<th>Standard</th>
				<td><?php echo $data['standard']; ?></td>
			</tr>
			<tr>
				<th>Contact No</th>
				<td><?php echo $data['pcont']; ?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $data['city']; ?></td>
			</tr>
		</table>

		<?php
		
	}

	else{
		echo "<script>alert('No Student Found..');</script>";
	}
}


?>