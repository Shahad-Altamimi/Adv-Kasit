<?php
session_start();

$S_ID=$_GET['S_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"update students set Volunteer_Status='Reject' where Uni_Number ='$S_ID'");

echo "<script language='JavaScript'>
alert ('Volunteer Status Has Been Updated Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Students_List.php';
        </script>";

?>