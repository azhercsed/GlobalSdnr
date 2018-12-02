<?php
//echo print_r($_POST);
include("db.inc.php");
//if(isset($_POST['submit'])){
    $vname=mysqli_escape_string($con, $_POST['vname']);
    $fname=mysqli_escape_string($con, $_POST['fname']);
    $odetail=mysqli_escape_string($con, $_POST['odetail']);
    $vage=mysqli_escape_string($con, $_POST['vage']);
    
    $vocc=mysqli_escape_string($con, $_POST['vocc']);
    $vcomp=mysqli_escape_string($con, $_POST['vcomp']);
    $vaddress=mysqli_escape_string($con, $_POST['vaddress']);
    $vmobile=mysqli_escape_string($con, $_POST['vmobile']);

    $vpan=mysqli_escape_string($con, $_POST['vpan']);
    $vaadhar=mysqli_escape_string($con, $_POST['vaadhar']);
    $vcity=mysqli_escape_string($con, $_POST['vcity']);

    $vmktval=mysqli_escape_string($con, $_POST['vmktval']);
    $vsnum=mysqli_escape_string($con, $_POST['snum']);
    $lpno=mysqli_escape_string($con, $_POST['lpno']);

    $village=mysqli_escape_string($con, $_POST['village']);
    $mandal=mysqli_escape_string($con, $_POST['mandal']);
    $district=mysqli_escape_string($con, $_POST['district']);

    $state='Telangana';

/**
 * INSERT INTO `vendor` (`id`, `vname`, `vcompany`, `fname`, `age`, `occupation`, `vaddress`, `vmobile`, `vpan`, `vaadhar`, `vcity`, `mktval`, `syno`, `lpno`, `village`, `mandal`, `district`) 
 * VALUES (NULL, 'Azhar', 'Ammara Enterprise', 'Khan', '31', 'Information Technology', 'Bahadurpura', '709305117', 'abcdefg', 'hijklmno', 'Hyderabad', '250000', '1234', '(kjhk0/fh654/2017)', 'Kishanbagh', 'Bahadurpura', 'Telangana');
 */

    $sql="INSERT INTO vendor (vname,vcompany,fname,other_detail,age,occupation,vaddress,vmobile,vpan,vaadhar,vcity,mktval,syno,lpno,village,mandal,district) ".
    "VALUES ('$vname','$vcomp','$fname','$odetail','$vage','$vocc','$vaddress','$vmobile','$vpan','$vaadhar','$vcity','$vmktval','$vsnum','$lpno','$village','$mandal','$district');";
    if(  mysqli_query($con,$sql)){
        //header("Location: ../newvendor.php?status=success");
        echo '<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Indicates a successful or positive action.
      </div>';
    }
    else{
        echo mysqli_error($con);
        //header("Location: ../newvendor.php?status=error");
    }
//}