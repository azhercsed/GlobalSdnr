<?php

include("db.inc.php");
if(isset($_POST['submit'])){
    if($_POST['user']=='admin'){
        header("Location: ../removeUser.php?operation=illegal");
        exit();
    }
    else{
        $username=$_POST['user'];
        $sql="DELETE FROM users WHERE username='$username';";
        mysqli_query($con,$sql);
        header("Location: ../removeUser.php?operation=success");
        exit();
    }
}