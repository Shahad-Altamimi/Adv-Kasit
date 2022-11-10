<?php
session_start();

$L_ID=$_GET['L_ID'];

require_once('../includes/config.php');


mysqli_query($Conn,"delete from libraries where ID ='$L_ID'");

echo "<script language='JavaScript'>
alert ('This Library Has Been Deleted Successfully !');
        </script>";


	echo "<script language='JavaScript'>
document.location='View_Libraries_List.php';
        </script>";

?>