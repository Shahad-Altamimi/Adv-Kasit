<?php
session_start();

$S_ID=$_GET['S_ID'];

require_once('../includes/config.php');


$sql = mysqli_query($Conn,"select * from students where Volunteer_Status='Accept' AND Uni_Number='$S_ID'");
if (mysqli_num_rows($sql)>0){
	
	



echo "<script language='JavaScript'>
alert ('Sorry ! You Are Already Signed As A Volunteer !');
        </script>";


	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";
		
		
		
}else{





mysqli_query($Conn,"update students set Volunteer_Status='Pending' where Uni_Number='$S_ID'");

echo "<script language='JavaScript'>
alert ('Your Request Has Been Sent Successfully !');
        </script>";
		


	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";
}

?>