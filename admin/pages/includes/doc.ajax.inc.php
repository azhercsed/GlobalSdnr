<?php

include_once("db.inc.php");
$docn=mysqli_escape_string($con,$_POST['doc']); 
$date=mysqli_escape_string($con,$_POST['date']); 
$pno=mysqli_escape_string($con,$_POST['pno']); 
$area=mysqli_escape_string($con,$_POST['area']); 
$cvalue=mysqli_escape_string($con,$_POST['cvalue']); 
$vendor=mysqli_escape_string($con,$_POST['vendorid']); 
//$vdetail=mysqli_escape_string($con,$_POST['vdetail']); 
$vendee=mysqli_escape_string($con,$_POST['vendeeid']); 
$svg=$_POST['svg']; //"{\"version\":\"2.4.3\",\"objects\":mysql_escape_string($con,$_POST['']);}" ) 
//echo json_decode($_POSTmysql_escape_string($con,$_POST[''json'']););

 $sql="INSERT INTO document(vendor_id,date,doc_n,vendee_id,plot_no,extent,cons_value,plan) 
 VALUES('$vendor','$date','$docn','$vendee','$pno','$area','$cvalue','$svg');";

//echo $svg;
//echo print_r($_POST);
 if(mysqli_query($con,$sql)){
     echo "success";
 }else{
     echo mysqli_error($con);
 }

