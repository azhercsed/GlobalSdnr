<?php

include("db.inc.php");
if(isset($_POST['submit'])){
    if($_POST['user']=='admin'){
        header("Location: ../removeUser.php?operation=illegal");
        exit();
    }
    else{
        $pass=md5("12345");
        $username=$_POST['user'];
        $sql="UPDATE users SET password='$pass' WHERE username='$username';";

        mysqli_query($con,$sql);
        header("Location: ../resetUser.php?operation=success");
        exit();
    }
}