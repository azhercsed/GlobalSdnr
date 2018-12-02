<?php
include("db.inc.php");


$id=$_GET['id'];
if(isset($_GET['operation'])=='delete'){
    $id=$_GET['id'];
    $sql="DELETE FROM vendor WHERE id=".$id.";";
    if(mysqli_query($con,$sql)){
        header("Location: ../vendor_mgmt.php?status=del_success");
    }
}else {
    $id=$_GET['id'];
    $name=$_GET['vname'];
    $co=$_GET['vcomp'];
    $fname=$_GET['fname'];
  
$vage=$_GET['vage'];

$vocc=$_GET['vocc'];

$vaddress=$_GET['vaddress'];
$vmobile=$_GET['vmobile'];

$vpan=$_GET['vpan'];
$vaadhar=$_GET['vaadhar'];
$vcity=$_GET['vcity'];

$vmktval=$_GET['vmktval'];
$vsnum=$_GET['snum'];
$lpno=$_GET['lpno'];

$village=$_GET['village'];
$mandal=$_GET['mandal'];
$district=$_GET['district'];

$state=$_GET['state'];

/**
 * vname,vcompany,fname,age,occupation,vaddress,vmobile,vpan,vaadhar,vcity,mktval,syno,lpno,village,mandal,district
 */
    $sql="UPDATE vendor SET 
    vname='$name',
    fname='$fname',
    vcompany='$co',
    vaddress='$vaddress',
    age='$vage',
    occupation='$vocc',
    vmobile='$vmobile',
    vpan='$vpan',
    vaadhar='$vaadhar',
    vcity='$vcity', 
    mktval='$vmktval',
    syno='$vsnum',
    lpno='$lpno',
    village='$village',
    mandal='$mandal',
    district='$district' 
    WHERE id='$id';";
    echo $sql;
    if(mysqli_query($con,$sql)){
        header("Location: ../vendor_mgmt.php?status=upd_success");
       // header("Location: ../vendor_mgmt.php?status=success");
    }
    else{
        echo mysqli_error($con);
    }

    
}