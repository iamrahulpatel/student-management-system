<?php 
session_start();
if(isset($_SESSION['uid'])) {
	header('location:admin/admindash.php'); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login Form</title>
<link href="css/form-font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/form-style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body>
	<h1>Admin Login Form</h1>
	<div class="main-agile">
		<div class="alert-close"> </div>
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<h2>Login</h2>
			<form action="admin-login-form.php" method="post">
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="uname" placeholder="Username" required=""/>
								</div>
								<div class="inputs-w3ls">
									<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="pass" placeholder="Password" required=""/>
								</div>
									<input type="submit" name="login" value="LOGIN"> 
			</form>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> Made By Rahul Patel <a href="index.php">Home</a></p>
	</div>
</body>
</html>

<?php
include ('dbconn.php');


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
		window.open('admin-login-form.php','_self');
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
	$_SESSION['pass'] = $data['password'];
	
	header('location:admin/admindash.php');

    }

}

?>