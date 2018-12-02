<?php
session_start();
if(empty($_SESSION['id'])){
    header("Location: ../login.php");
    exit();
}
else{
include("db.inc.php");

if(isset($_POST['submit'])){
    $nuser=mysqli_real_escape_string($con,$_POST['nuser']);
    $npass=mysqli_real_escape_string($con,$_POST['npass']);
  
    $fname=mysqli_real_escape_string($con,$_POST['fname']);

    $sql="SELECT * FROM users WHERE username='$nuser';";
    
    $result=mysqli_query($con,$sql)or die(mysqli_error());
    if(mysqli_num_rows($result)>0){
        header("Location: ../newUser.php?status=user_exist");
        //echo $sql;
        exit();
    }
    else{
        if(!empty($npass)){
            $npass=md5($npass);
            $sql="INSERT INTO users (username,password,name) VALUES ('$nuser','$npass','$fname');";
        }else{
            $sql="INSERT INTO users (username,name) VALUES ('$nuser','$fname');";
 
        }
        //echo $sql;
        mysqli_query($con,$sql) or die(mysqli_error());
        header("Location: ../newUser.php?status=success");
        exit();
    }
}
else{
    header("Location: logout.inc.php");
    exit();
}

}