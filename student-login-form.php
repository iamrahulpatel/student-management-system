<?php 
session_start();
if(isset($_SESSION['uid'])) {
	header('location:student/studentdash.php'); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Login Form</title>
<link href="css/form-font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/form-style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body background="images/banner2.jpg">
	<h1>Student Login Form</h1>
	<div class="main-agile">
		<div class="alert-close"> </div>
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<h2>Login</h2>
			<form action="student-login-form.php" method="post">
								
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
						
									<input type="text" name="rollno" placeholder=" Enter Roll No" required=""/>
									</div>
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="name" placeholder="Enter Name" required=""/>
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
	$standard = $_POST['standard'];
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	
	$qry = "SELECT * FROM student WHERE `rollno` = '$rollno' AND `name` = '$name'";
	$run = mysqli_query($conn,$qry);
	$row = mysqli_num_rows($run);
if ($row<1) {
	?>
	<script>
		alert('Roll No Or Name not Match!!');
		window.open('student-login-form.php','_self');
	</script>
	<?php	
           }

else{
	$data = mysqli_fetch_assoc($run);
	//$id = $data['id'];
	//$uname = $data['username'];
	//$pass  = $data['password'];
	
	

	$_SESSION['uid'] = $data['id'];
	$_SESSION['standard'] = $data['standard'];
	$_SESSION['rollno'] = $data['rollno'];
	$_SESSION['name'] = $data['name'];
	
	header('location:student/studentdash.php');

    }

}

?>