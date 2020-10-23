<?php


session_start();
    if(isset($_SESSION['uid']))
    {
    	echo "";
    	/*echo $_SESSION['uid']; echo "<br>";
		echo $_SESSION['user']; echo "<br>";
		echo $_SESSION['pas']; echo "<br>";*/
    	
    }
    else
    {
    	header('location:../admin-login-form.php');
    }
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
</style>
</head>
</html>

	<div class="admintitle" align="center">
		
		<h4><a href="../index.php" style="float: left; margin-left: 30px; color:#fff; font-size: 20px;">Home</a></h4>
		<h4><a href="logout.php" style="float: right; margin-right: 30px; color:#fff; font-size: 20px;">Logout</a></h4>
		<h1>Welcome to Admin Dashboard</h1>
	</div>

	<div class="dashboard">
		<table  width="90%" align="center" style="padding-top:20px;">
			<tr>
				<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
			</tr>
			<tr>
				<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
				
			</tr>
			<tr>
				<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
				
			</tr>
		</table>
		
	</div>
	