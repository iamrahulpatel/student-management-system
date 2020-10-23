

<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
	<style>
	.admin-container{
	line-width:20px;				
	text-align: center;
	background-color: #6086F5;
	margin-right: 50px;
	margin-left: 50px;
	height: 140px;
	line-height:140px;
	border: 2px solid red;
    border-radius: 12px;

	}
	table, td, th {    
    border: 2px solid #00437E;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
	
}

th, td {
    padding: 15px;
}

.button {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button:hover {
    background-color: #81BBEE;
}
a:hover{
	color:#0081F2;
}
.logins{
	background-color:#BBDBF7;
	
}
a{
	color:white;
	font-size:20px;
}
.admintitle{
	text-align: center;
	background-color: powderblue;
	margin-right: 50px;
	margin-left: 50px;
	height: 140px;
	line-height:140px;
	border: 2px solid #122B71;
        border-radius: 12px;
}


	</style>
</head>
<body bgcolor="#a5c6ff" style="padding:10px 30px 10px 30px">

<div class="admintitle" align="center">
		<h4><a href="index.php" style="float: left; margin-left: 30px; color:#fff; font-size: 20px;">Home</a></h4>
		<h4><a href="student-login-form.php" style="float: left; margin-left: 30px; color:#fff; font-size: 20px;">Student Login</a></h4>
		<h4><a href="admin-login-form.php" style="float: right; margin-right: 30px; color:#fff; font-size: 20px;">Admin Login</a></h4>
		<h1 align="center" >Welcome To Student Management</h1>
</div>

<form method="post" action="show-info.php">
<table style="width: 30%;" align="center" border="1">
	<tr>
		<td colspan="2" align="center">Student Information</td>
	</tr>
	<tr>
		
		<td align="left">Choose Standard</td>
		<td>
			<select name="std">
				<option value="10">10th</option>
				<option value="11">11th</option>
				<option value="12">12th</option>
				
			</select>
		</td>
	</tr>
	<tr>
		<td align="left">Enter Roll No</td>
		<td><input type="text" name="rollno" required="required"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info" class="button"></td>
	</tr>	


</table>
</form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];
	include('dbconn.php');
	include('function.php');

	showdetails($standard,$rollno);
}

?>