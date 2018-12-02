<?php
session_start();
include("db.inc.php");


 $username=$_SESSION['username'];
 $passOld=$_SESSION['password'];

 echo $username;
 echo $passOld;

if(isset($_POST['submit'])){
    if(empty($_POST['cpass'])||empty($_POST['npass'])){
        header("Location: ../changePwd.php?pass=empty");
        exit();
    }
    else{
        

        $cpass=mysqli_escape_string($con,$_POST['cpass']);
        $cpass=md5($cpass);
        $npass=mysqli_escape_string($con,$_POST['npass']);
        $npass=md5($npass);
        echo $cpass."\n";
        echo $npass;
        if($cpass==$passOld){
            $sql="UPDATE users SET password='$npass' WHERE username='$username';";
            mysqli_query($con,$sql);
           
        header("Location: logout.inc.php?pass=changed");
        exit();
        }
        else{
           header("Location: ../changePwd.php?pass=err");
        exit();
        }
    }
}