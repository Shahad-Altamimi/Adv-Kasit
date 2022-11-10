<?php
session_start();

$I_ID=$_GET['I_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from instructors where ID ='$I_ID'");

echo "<script language='JavaScript'>
alert ('This Instructor Has Been Deleted Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Instructors_List.php';
        </script>";

?>