<?php

session_start();
    if(isset($_SESSION['uid']))
    {
    	echo "";
    	
    }
    else
    {
    	header('location:../login.php');
    }
?>
<?php
include ('header.php');
include ('titlehead.php');
?>
<style>
table, td, th {    
    border: 3px solid #5CC2B8;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>
<table align="center" style="margin-top: 20px;">
<form method="post" action="deletestudent.php">
	<tr>
		<th>Enter Standard</th>
		<td><input type="number" name="standard" placeholder=" Enter Standard" required="required">
</td>
	
		<th>Enter Student Name</th>
		<td><input type="text" name="stuname" placeholder=" Enter Student Name" required="required"></td>
		

<td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>

</table>	
</form>

<table align="center" width="80%" border="1" style="margin-top: 10px; border-color:#F58260;" >
	<tr style="background-color: #F96236; color: #fff;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>RollNo</th>
		<th>Edit</th>
	</tr>
<?php
	if (isset($_POST['submit'])) {
		include '../dbconn.php';
		$standard = $_POST['standard'];
		$name = $_POST['stuname'];
		$qry = "SELECT * FROM student WHERE standard='$standard' AND name LIKE '%$name%'";
		$run = mysqli_query($conn,$qry);
		if (mysqli_num_rows($run)<1) {
			echo "<tr><td colspan='5'>No Record Found</td></tr>";
		}
		else{
			$count=0;
			while ($data=mysqli_fetch_assoc($run)) {
				$count++;
				?>
				 <tr align="center">
					<td><?php echo $count; ?></td>
					<td><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;" /></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['rollno']; ?></td>
					<td><a href="deleteform.php?sid=<?php echo $data['id']?>">Delete</a></td>
				</tr>

				<?php
			}
		}
	}


?>

</table>

