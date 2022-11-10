<?php
session_start();

$P_ID=$_GET['P_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from courses_files where P_ID ='$P_ID'");
mysqli_query($Conn,"delete from courses_packages where ID ='$P_ID'");

echo "<script language='JavaScript'>
alert ('This Package Has Been Deleted Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Courses_List.php';
        </script>";

?>