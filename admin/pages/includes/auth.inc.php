<?php


function authorize($days){
    if(isset($_COOKIE['ammara'])){
        echo "Already Authorized";
    }
    else{
      

    $expiry = time()+3600*24*(int)$days;
    $data = md5("ammara");

    setcookie( "ammara", $data , $expiry ,'/');

    echo "Authorized for ".$days. " days";


    }
}

function deauthorize(){
setcookie("ammara","",time()-3600,'/');
}



if(isset($_POST['submit'])){
    if(isset($_POST['days'])){
        $days=$_POST['days'];
    }
    authorize($days);
    header("Location: ../authorize.php?result=1");
    exit();
}
if(isset($_POST['submit1'])){
    deauthorize();
    header("Location: ../authorize.php?result=2");
    exit();
}
