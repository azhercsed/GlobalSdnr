<?php

if(isset($_POST['submit'])){
    include("db.inc.php");

    $grpCode=mysqli_real_escape_string($con, $_POST['grpCode']);
    $grpName=mysqli_real_escape_string($con, $_POST['grpName']);
    $grpMembers=mysqli_real_escape_string($con,$_POST['grpMembers']);
    $frmDate=mysqli_real_escape_string($con,$_POST['frmDate']);
    $toDate=mysqli_real_escape_string($con,$_POST['toDate']);
    $grpLocation=mysqli_real_escape_string($con,$_POST['grpLocation']);


    $sql="INSERT INTO groups (grpCode,grpName,grpMembers,frmDate,toDate,grpLocation) 
        VALUES ('$grpCode','$grpName','$grpMembers','$frmDate','$toDate','$grpLocation');";
        
    mysqli_query($con,$sql);
    //echo "inserted successfully";
    header("Location: ../groups.php?submit=success");
   exit();

}
else{
    header("Location: ../login.php");
    exit();
}




