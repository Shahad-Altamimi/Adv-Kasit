<?php
session_start();

$C_ID=$_GET['C_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from courses where ID ='$C_ID'");

echo "<script language='JavaScript'>
alert ('This Course Has Been Deleted Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Courses_List.php';
        </script>";

?>