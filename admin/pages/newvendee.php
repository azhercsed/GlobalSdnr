<?php
include("header.php");
include("includes/db.inc.php");
$name="Name:";
$fname="Fname:";
$address="Address:";
$detail="Detail:";
/*
$sql="SELECT * FROM current;";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$current=$row['current'];

$sql="SELECT * FROM datatable;";
$result=mysqli_query($con,$sql);

*/
?>
       
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> New Vendee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div id="result"></div>
            <form role="form" id="form">
                    

                        
                        <div class="form-group col-md-8">
                            <label>Vendor</label>
                            <input class="form-control" type="text" id="vendor" name="vendor" autocomplete="off">
                        </div>


                        <div class="form-group col-md-4">
                            <label>VendorID</label>
                            <input class="form-control" type="text" id="vendorid" name="vendorid" readonly>
                        </div>
                      
                        <div class="form-group col-md-4">
                            <label>Vendee Name</label>
                            <input class="form-control" type="text" id="vname" name="vname" required>
                        </div>
                      
                                  
                        <div class="form-group col-md-4">
                        <label>Father's Name</label>
                                           
                            <input class="form-control" type="text" id="fname" name="fname" required>
                        </div>

                        <div class="form-group col-md-4">
                        <label>Date Created</label>
                                           
                            <input class="form-control" type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>Extent sqYds</label>
                                           
                            <input class="form-control" type="number" id="extenty" name="extenty" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label>Extent sqMtrs</label>
                                           
                            <input class="form-control" type="number" id="extentm" name="extentm" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label>Consideration Value</label>
                                           
                            <input class="form-control" type="number" id="cv" name="cv" required>
                        </div>
                        <div class="col-md-12">
                        <input type="submit" class="btn btn-success pull-right" name="s" id="s" value="Submit"/>
                        </div>
                        </form>    
                            
<!-- ----------------------------start of canvas-------------------------------------- -->
<!--
                <div class="col-md-12">
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-primary btn-sm" id="line" value="Line"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="rect" value="Rect"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="itext" value="Text"></input>
                    </div>                        
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-warning btn-sm" id="remove" value="Remove"></input>
                        <input type="button" class="btn btn-warning btn-sm" id="clear" value="ClearAll"></input>
                    </div>
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-default btn-sm" id="copy" value="Copy"></input>
                        <input type="button" class="btn btn-default btn-sm" id="paste" value="Paste"></input>
                    </div>
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-default btn-sm" id="toJson" value="toJson"></input>
                        <input type="button" class="btn btn-default btn-sm" id="fromJson" value="fromJSON"></input>
                    </div>
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="submit" class="btn btn-default btn-success" name="submit1" id="submit1" value="Submit"/>
                    </div>
                </div>

                <div class="col-md-12">
                <canvas id="c" style="border:1px solid #ccc;border-radius:5px; margin-bottom:50px;"></canvas>
                
                </div>
 


               
                
            </div>
-->

                     <script type="text/javascript">
                            $.get("includes/search_vendor.inc.php", function(data){
                            $("#vendor").typeahead({ source:data,
                            autoSelect:true,
                            afterSelect:function(item){
                                var i=item;
                               loadValues("vendor",i);
                                //$("#stamp").focus();
                                //alert(i);
                            }
                        });
                            },'json');




//     function loadValues(i){
//     //var v=vendor;
//    var str=i;
//     alert(str);

// }
                        </script> 
    <script src="../js/myfabric.js"></script>
<?php
include("footer.php");
?>