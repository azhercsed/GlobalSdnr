<?php
//session_start();
include('header.php');

include('includes/printDoc.inc.php');

//if(isset($_GET)){
//$docn=$_GET['docn'];
$docn='DOC73473152';

$_SESSION['docn']=$docn;


//}else{
//    $docn="";
//}
//echo $docn;
?>

 <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"> Document Preview</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- <div><marquee>Work in progress..</marquee></div> -->
            <!-- /.row -->
<div class="row" style="padding-bottom:50px;">
<div class="form-group col-md-12">
                            <!-- <label>Final Document</label> -->
                            <textarea class="form-control" type="text" id="odetail" name="odetail" placeholder="Optional" style="display:none;"></textarea>
                            <div class="btn-group pull-right" role="group" aria-label="..." style="margin-bottom:10px;">
                                <input type="button" class="btn btn-default" id="b" value="B">
                                <input type="button" class="btn btn-default" id="i" value="I">
                                <input type="button" class="btn btn-default" id="u" value="U">
                                <input type="button" class="btn btn-default" id="size" value="Size">


                            </div>
                            <iframe class="form-control" id="iframe" name="iframe" style="height:800px;font-size:14px;line-height:1.428;padding:0px;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif"></iframe>
                        </div>
</div>

<script src="../js/iframe.js"></script>
<?php
include('footer.php');
?>