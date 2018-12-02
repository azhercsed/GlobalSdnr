<?php
include_once('db.inc.php');
//echo print_r($_POST);
$tablename=mysqli_escape_string($con,$_POST['table']);
$item=mysqli_escape_string($con,$_POST['item']);



$sql="SELECT id FROM $tablename WHERE vname like '%$item%';";
if($result=mysqli_query($con,$sql)){
    $row= mysqli_fetch_assoc($result);
    echo $row['id']; 
}
else{
    echo mysqli_error($con);
}
?>