<?php
session_start();

$ID=$_GET['ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from courses_files where ID ='$ID'");

echo "<script language='JavaScript'>
alert ('This Course File Has Been Deleted Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Courses_List.php';
        </script>";

?>