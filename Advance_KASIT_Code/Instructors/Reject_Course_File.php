<?php
session_start();

$ID=$_GET['ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"update courses_files set Status='Rejcet' where ID ='$ID'");

echo "<script language='JavaScript'>
alert ('This Course File Has Been Rejected Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Courses_List.php';
        </script>";

?>