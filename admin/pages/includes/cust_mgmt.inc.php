<?php
include("db.inc.php");
$id=$_GET['id'];
if(isset($_GET['operation'])=='delete'){
    $id=$_GET['id'];
    $sql="DELETE FROM datatable WHERE id=".$id.";";
    if(mysqli_query($con,$sql)){
        header("Location: ../custMgmt.php?status=del_success");
    }
}else {
    $name=$_GET['name'];
    $co=$_GET['co'];
    $fname=$_GET['fname'];
    $address=$_GET['address'];
    $detail=$_GET['detail'];

    $sql="UPDATE datatable SET name='$name',fname='$fname',co='$co',address='$address',detail='$detail' WHERE id='$id';";
    if(mysqli_query($con,$sql)){
        header("Location: ../custMgmt.php?status=upd_success");
    }

    
}