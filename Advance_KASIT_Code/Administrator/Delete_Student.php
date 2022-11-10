<?php
session_start();

$S_ID=$_GET['S_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from files_rates where S_ID='$S_ID'");
mysqli_query($Conn,"delete from courses_packages where S_ID='$S_ID'");
mysqli_query($Conn,"delete from students_ratings where S_ID='$S_ID'");
mysqli_query($Conn,"delete from volunteers_courses where S_ID='$S_ID'");
mysqli_query($Conn,"delete from students where Uni_Number='$S_ID'");

echo "<script language='JavaScript'>
alert ('This Student Has Been Deleted Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Students_List.php';
        </script>";

?>