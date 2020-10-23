<?php 
session_start();
if(isset($_SESSION['uid'])) {
	header('location:admin/admindash.php'); 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<div class="admintitle" align="center">
		
		<h4><a href="index.php" style="float: left; margin-left: 30px; color:#fff; font-size: 20px;">Home</a></h4>
		
		<h1 align="center">Admin Login</h1>
</div>

<form action="login.php" method="post">
	<table align="center">
		<tr>
			<td>Username</td><td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td><td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
include ('dbconn.php');
include ('admin/header.php');

if(isset($_POST['login'])) {
	$username = $_POST['uname'];
	$password = $_POST['pass'];
	
	$qry = "SELECT * FROM admin WHERE `username` = '$username' AND `password` = '$password'";
	$run = mysqli_query($conn,$qry);
	$row = mysqli_num_rows($run);
if ($row<1) {
	?>
	<script>
		alert('Username Or Password not Match!!');
		window.open('login.php','_self');
	</script>
	<?php	
           }

else{
	$data = mysqli_fetch_assoc($run);
	//$id = $data['id'];
	//$uname = $data['username'];
	//$pass  = $data['password'];
	
	

	$_SESSION['uid'] = $data['id'];
	$_SESSION['user'] = $data['username'];
	$_SESSION['pas'] = $data['password'];
	
	header('location:admin/admindash.php');

    }

}

?>






