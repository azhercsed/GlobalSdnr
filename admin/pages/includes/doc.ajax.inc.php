<?php

include_once("db.inc.php");
if($_POST['table']=="document"){
    $docn=mysqli_escape_string($con,$_POST['doc']); 
    $date=mysqli_escape_string($con,$_POST['date']); 
    $plotno=mysqli_escape_string($con,$_POST['plotno']); 
    $extent=mysqli_escape_string($con,$_POST['extent']); 
    $cvalue=mysqli_escape_string($con,$_POST['cvalue']); 
    $vendorid=mysqli_escape_string($con,$_POST['vendorid']); 
    //$vdetail=mysqli_escape_string($con,$_POST['vdetail']); 
    $vname=mysqli_escape_string($con,$_POST['vname']);
    $fname=mysqli_escape_string($con,$_POST['vname']); 
    $svg=$_POST['svg']; //"{\"version\":\"2.4.3\",\"objects\":mysql_escape_string($con,$_POST['']);}" ) 
    //echo json_decode($_POSTmysql_escape_string($con,$_POST[''json'']););

    $sql="INSERT INTO document(vendor_id,date_created,doc_n,vendee_name,fname,plot_no,extent,cons_value,plan) 
    VALUES('$vendorid','$date','$docn','$vname','$fname','$plotno','$extent','$cvalue','$svg');";
//echo $sql;
    //echo $svg;
    //echo print_r($_POST);
    if(mysqli_query($con,$sql)){
        echo  '<div class="alert alert-info alert-dismissible col-md-4 col-md-offset-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Information! </strong>'."Success".
      '</div>';
    }else{
        echo mysqli_error($con);
    }

}else if($_POST['table']=="vendor"){
    $vodetail=mysqli_escape_string($con,$_POST['vodetail']); 
    $vage=mysqli_escape_string($con,$_POST['vage']); 
    $vocc=mysqli_escape_string($con,$_POST['vocc']); 
    $vcomp=mysqli_escape_string($con,$_POST['vcomp']); 
    $vaddress=mysqli_escape_string($con,$_POST['vaddress']); 
    $vmobile=mysqli_escape_string($con,$_POST['vmobile']); 
    $vpan=mysqli_escape_string($con,$_POST['vpan']); 
    $vaadhar=mysqli_escape_string($con,$_POST['vaadhar']); 
    $vcity=mysqli_escape_string($con,$_POST['vcity']); 
    $vmktval=mysqli_escape_string($con,$_POST['vmktval']); 
    $snum=mysqli_escape_string($con,$_POST['snum']); 
    $lpno=mysqli_escape_string($con,$_POST['lpno']); 
    $village=mysqli_escape_string($con,$_POST['village']); 
    $mandal=mysqli_escape_string($con,$_POST['mandal']); 
    $district=mysqli_escape_string($con,$_POST['district']); 


    $sql_vendor="INSERT INTO vendor(vendor,age,occupation,vaddress,vmobile,vpan,vaadhar,vcity,mktval,syno,lpno,village,mandal,district)
    VALUES('$vodetail','$vage','$vocc','$vaddress','$vmobile','$vpan','$vaadhar','$vcity','$vmktval','$snum','$lpno','$village','$mandal','$district');";

//echo $sql_vendor;
 
    if(mysqli_query($con,$sql_vendor)){
        echo  '<div class="alert alert-info alert-dismissible col-md-4 col-md-offset-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Information! </strong>'."Success".
      '</div>';
    }else{
        echo mysqli_error($con);
    }

//    echo print_r($_POST);
}