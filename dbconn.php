<?php
$conn = mysqli_connect('localhost','root','','sms');
if ($conn==TRUE) {
	echo "";
}
else{
	echo "Error in Connection To Database";
}


?>