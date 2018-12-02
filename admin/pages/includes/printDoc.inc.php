<?php
//session_start();
//if(!isset($_SESSION['docn'])){
  //  header("Location: ../login.php");
    //exit();
//}
//else{
    
   $docn=$_SESSION['docn'];
   // unset($_SESSION['docn']);

include('includes/db.inc.php');

$doc_sql="SELECT * FROM document WHERE doc_n LIKE '$docn';";
$doc_result=mysqli_query($con,$doc_sql);
$doc_row=mysqli_fetch_assoc($doc_result);
if(mysqli_num_rows($doc_result)>0){
  // print_r($doc_row); 

}
$vendor_id=$doc_row['vendor_id'];
$vendee_id=$doc_row['vendee_id'];

$vendor_sql="SELECT * FROM vendor WHERE id LIKE '$vendor_id';";

$vendor_result=mysqli_query($con,$vendor_sql);
$vendor_row=mysqli_fetch_assoc($vendor_result);
if(mysqli_num_rows($vendor_result)>0){
   //print_r($vendor_row);
   echo stripslashes($vendor_row['other_detail']) ;

}

$vendee_sql="SELECT * FROM vendee WHERE id LIKE '$vendee_id';";


$top_text="REGISTRATION PLAN SHOWING THE OPEN PLOT NO:";
$ref_text="REFERENCE :";
$inc_text="INCL :";
$exc_text="EXCL :";
$area_text="AREA :";
$merge_text="MERGEFIELD EXTENT :";
$merge_mtr_text="MERGEFIELD EXTMTRS :";
$witness_text="WITNESSES :";
$sign_text="SIGN OF THE VENDOR";

$plot_no="plotno";
$lp_no="lpno";
$sy_no="IN SY.Nos.";
$situated_text="SITUATED AT";

$vendor_text="vendortext";
$vendee_text="vendeetext";

$svg="svg";
//}