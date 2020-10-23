<?php

include ('../dbconn.php');
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std = $_POST['std'];
    $id = $_POST['sid'];
    $imagename = $_FILES['simg']['name']; //store image name
    $tempname = $_FILES['simg']['tmp_name']; //store temp image name
    move_uploaded_file($tempname, "../dataimg/$imagename"); //storing temp name , destination


    $qry = "UPDATE student SET rollno = '$rollno',name = '$name',city = '$city',pcont = '$pcon', standard = '$std',image = '$imagename' WHERE id = '$id'  ";
    
    $run = mysqli_query($conn,$qry);
    
    if($run==TRUE) {

        ?>
        <script>
            alert('Data Updated Successfully...');
            window.open('updateform.php?sid=<?php echo $id ?>','_self');
        </script>
        <?php
    }

else{
    echo "Errr!!";
}




?>