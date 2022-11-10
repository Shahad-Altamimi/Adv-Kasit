<?php
session_start();


require_once('../includes/config.php');



$V_ID=$_GET['V_ID'];
$S_ID=$_GET['S_ID'];
$Rate=$_GET['Rate'];


$sql5 = mysqli_query($Conn,"select * from students_ratings where S_ID='$S_ID' AND V_ID='$V_ID'");

if (mysqli_num_rows($sql5)>0){
	
	
		echo "<script language='JavaScript'>
			  alert ('Sorry You Cant Rate This Volunteer ! You Already Rate Before !');
      </script>";
	  
	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";
	
	
}else{
	
	$sql3 = mysqli_query($Conn,"select * from students where Uni_Number='$V_ID'");
					$row3 = mysqli_fetch_array($sql3);
					$Total_Rating = $row3['Total_Rates'];

$New_Total_Rating = $Total_Rating + $Rate;

mysqli_query($Conn,"update students set Total_Rates='$New_Total_Rating' where Uni_Number='$V_ID'");
mysqli_query($Conn,"insert into students_ratings (S_ID,V_ID,Rate) values ('$S_ID','$V_ID','$Rate')");
	  
		echo "<script language='JavaScript'>
			  alert ('Thank You For Rate This Volunteer !');
      </script>";
	  
	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";
	
	
}

?>