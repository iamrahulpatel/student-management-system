<?php


session_start();
    if(isset($_SESSION['uid']))
    {
    	echo "";
    	
    }
    else
    {
    	header('location:../student-login-form.php');
    }
	setcookie('id','name',time()+10);
?>
<?php
include ('header.php');

?>
<html>
<head>

<style>
a{
	color:#fff;
}
a:hover {
    color: #0F4D71;
}
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
    background-color: #4C7EFA;
    color: white;
}
</style>
</head>
</html>

	<div class="admintitle" align="center">
		<h4><a href="../index.php" style="float: left; margin-left: 30px; color:#fff; font-size: 20px;">Home</a></h4>
		<h4><a href="logout.php" style="float: right; margin-right: 30px; color:#fff; font-size: 20px;">Logout</a></h4>
		<h1>Welcome to Student Dashboard</h1>
	</div>
	

<?php

$rollno = $_SESSION['rollno'];
$name = $_SESSION['name'];


	include('../dbconn.php');
	$sql = "SELECT * FROM student WHERE rollno='$rollno' AND name = '$name'";
	$run = mysqli_query($conn,$sql);

	if (mysqli_num_rows($run)>0) {

		$data = mysqli_fetch_assoc($run);
		?>
		<table border="1" style="width: 50%; margin-top: 20px;" align="center" id="t01">
			<tr>
				<th colspan="3" align="center">Student Details</th>
			</tr>
			<tr>
			
			
				<td rowspan="6"><img src="../dataimg/<?php echo $data['image'] ?>" style="max-height: 350px; max-width: 320px; padding-left: 30px;" /></td>
				
	
				<th>Roll No</th>
				<td><?php echo $data['rollno']; ?></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><?php echo $data['name']; ?></td>
			</tr>
			<tr>
				<th>English</th>
				<td><?php echo $data['english']; ?></td>
			</tr>
			<tr>
				<th>Hindi</th>
				<td><?php echo $data['hindi']; ?></td>
			</tr>
			
			<tr>
				<th>Maths</th>
				<td><?php echo $data['maths']; ?></td>
			</tr>
			<tr>
				<th>Chemistry</th>
				<td><?php echo $data['chemistry']; ?></td>
			</tr>
			<?php
$hindi = $data['hindi'];
$maths = $data['maths'];
$chemistry = $data['chemistry'];
$english = $data['english'];
$total=($english+$hindi+$chemistry+$maths);

?>			
			<tr>
				<th>Total</th>
				<td colspan="2"><?php echo $total ?></td>
			</tr>
		</table>
		

		<?php
		
		


	}



?>

<?php

if($total>200){
	?>
	<marquee style="font-size:30px; color:#FE6356">Congratulations You Are Pass</marquee>
	<?php 
	}
	else{
		?>
		<marquee style="font-size:30px; color:#FE6356"> You Are Fail All The Best For Next Year</marquee>
	<?php
	}

?>



