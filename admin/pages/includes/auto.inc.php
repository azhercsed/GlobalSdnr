<?php
include("db.inc.php");


$sql="SELECT * FROM datatable;";
$result=mysqli_query($con,$sql);
$auto=array();
$name="Name";
$fname="Fname:";
$address="Address:";
$detail="Detail:";
                                            
while($row=mysqli_fetch_assoc($result)){
    if($row['co']=='so'){
        $co='S/O';
    }else if($row['co']=='wo'){
        $co='W/O';
    }else{
        $co='D/O';
    }
    array_push($auto,$name." ".$row['name']." ".$co." ".$row['fname']." ".$address." ".$row['address']." ".$detail." ".$row['detail']);
    
}
//array_push($auto,"azhar","ammara");
echo json_encode($auto);
?>