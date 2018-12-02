<?php

include("db.inc.php");

$date=date("d/m/Y");
if(isset($_POST['date'])){
    global $date,$co;
    $date=date_create($_POST['date']);
    $date=date_format($date,"d/m/Y");
}

$name=mysqli_escape_string($con,$_POST['name']);
$co_id=mysqli_escape_string($con,$_POST['co']);
if($co_id=='so'){
    $co="S/O";
}else if($co_id=='do'){
    $co="D/O";
}else{
    $co="W/O";
}
$fname=mysqli_escape_string($con,$_POST['fname']);
$address=mysqli_escape_string($con,$_POST['address']);
$detail=mysqli_escape_string($con,$_POST['detail']);


$numofstamps;

$sql="SELECT * FROM current;";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $current=$row['current'];
        $stsno=$current;
    if(!empty($_POST['numofstamps'])){
       global $numofstamps;
        $numofstamps=mysqli_escape_string($con,$_POST['numofstamps']);
    }
    else{
        $numofstamps=1;
    }

if(isset($_POST['submit'])){
    if(!empty($_POST['current'])){
        $current=mysqli_escape_string($con,$_POST['current']);
        $stsno=$current;

    }

    $current=$current+$numofstamps;
    
    $sql="UPDATE current SET current='$current' WHERE id='1';";
    mysqli_query($con,$sql);


    if(isset($_POST['save'])){
   

      $sql="INSERT INTO datatable (name,co,fname,address,detail) VALUES ('$name','$co_id','$fname','$address','$detail');";
      mysqli_query($con,$sql);
    }

    
    if($_POST['whom']=="others"){
        global $whom;
        $whom=$detail;
    }
    else if($_POST['whom']=="self-others"){
        
        $whom="--Self %26 Others--";
        //$whom=htmlentities($whom);
        
        
        
    }
    else{
        $whom="--Self--";
    }
    //$whom=$_POST['whom'];
    $stamp=$_POST['stamp'];

    
       header("Location: ../printView.php?whom=".$whom."&name=".$name."&co=".$co."&fname="
       .$fname."&address=".$address."&date=".$date."&stsno=".$stsno."&stamp=".$stamp."&numofstamps=".$numofstamps);
    exit();

}
else{
    header("Location: ../index.php");
}