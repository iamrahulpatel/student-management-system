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
.addstu{
	border: 2px solid #3652A4;
        border-radius: 12px;
		background-color:#2F88BA;
        margin-right: 50px;
        margin-left: 50px;
}
.addstu-p{
	text-align:center;
    font-size: 50px;
    text-decoration-line: underline;
    font-family: cursive;
    color: #0C405D;


}

.addstu-table{
    border: 2px solid #122B71;
        border-radius: 12px;
		margin-bottom:40px;
}

td{
	font-size:20px;
	color:#fff;
}

</style>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
<div class="addstu">
    <table border="1" align="center" style="width:70%; margin-top:40px;" class="addstu-table">
        <tr>
		<p class="addstu-p">Add Student Details</p>
            <td>Roll No.</td>
            <td><input type="text" name="rollno" placeholder="Enter Roll No." required="required"></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" name="name" placeholder="Enter Full Name" required="required"></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" placeholder="Enter City" required="required"></td>
        </tr>
        <tr>
            <td>Parents Contact No.</td>
            <td><input type="text" name="pcon" placeholder="Enter Contact No." required="required"></td>
        </tr>
        <tr>
            <td>Standard</td>
            <td><input type="number" name="std" placeholder="Enter Standard" required="required"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="simg"  required="required"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Add Student"></td>
        </tr>
    </table>
    
</form>
</div>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    include ('../dbconn.php');
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $imagename = $_FILES['simg']['name']; //store image name
    $tempname = $_FILES['simg']['tmp_name']; //store temp image name
    move_uploaded_file($tempname, "../dataimg/$imagename"); //storing temp name , destination


    $qry = "INSERT INTO student(rollno,name,city,pcont,standard,image) VALUES ('$rollno','$name','$city','$pcon','$std','$imagename')";
    
    $run = mysqli_query($conn,$qry);
    
    if($run==TRUE) {

        ?>
        <script>
            alert('Student Record Inserted Successfully...');
        </script>
        <?php
    }

else{
    echo "Errr!!";
}
}


?>
