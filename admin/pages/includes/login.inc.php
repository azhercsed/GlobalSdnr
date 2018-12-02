<?php

session_start();


if(isset($_POST['submit'])){
include_once("db.inc.php");

$uid=mysqli_real_escape_string($con,$_POST['username']);
$pwd=mysqli_real_escape_string($con,$_POST['password']);

if(strtolower( $uid)!="admin"){
    if(!isset($_COOKIE['ammara'])){
        header("Location: ../login.php?login=!authorize");
        exit();    
    }
}

$pwd=md5($pwd);

//echo $uid;
//echo $pwd;
if(empty($uid)||empty($pwd)){
    header("Location: ../login.php?login=empty");
    exit();
}
else{
    $sql="SELECT * FROM users WHERE username='$uid'";
    $result=mysqli_query($con,$sql);

    $resultChecked=mysqli_num_rows($result);
    if($resultChecked<1){
        header("Location: ../login.php?login=error");
    exit(); 
    }
    else{
        if($row=mysqli_fetch_assoc($result)){
            if($pwd==$row['password']){
                $_SESSION['id']=$row['id'];
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                $_SESSION['name']=$row['name'];
                $_SESSION['type']=$row['type'];

                header("Location: ../index.php?login=success");
                exit();
            }
            else{
                header("Location: ../login.php?login=error");
                exit();     
            }
            
        }
    }
}

}
else{
    header("Location: ../login.php?login=error");
    exit();  
}
