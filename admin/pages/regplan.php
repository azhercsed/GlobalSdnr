<?php
include("header.php");
include("includes/db.inc.php");
global $msg;
if(isset($_GET['submit'])){
    $msg="<script>document.write(code);</script>";
     
}
//uniqid($_SESSION['username'],true)
$uid=uniqid("",true);
$strpos=strpos($uid,'.');
$uid=substr($uid,$strpos+1);
$uid='DOC'.$uid;
?>

        
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"> Registration Plan</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- <div><marquee>Work in progress..</marquee></div> -->
            <!-- /.row -->
<div class="row" style="padding-bottom:50px;">
    <form role="form" id="form" >
                                        <div id="result">
                                        
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label>Document Number</label>
                                            <input class="form-control" placeholder="Document Number" name="doc" id="doc" value='<?php echo $uid;?>' readonly>
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Date Created</label>
                                            <input class="form-control" type="date" name="date" id="date" value='<?php echo date('Y-m-d');?>'>
                                        </div>
                                    
                                        <div class="form-group col-md-3">
                                            <label>Plot Number</label>
                                            <input class="form-control" placeholder="Plot Number" name="pno" id="pno" type="number">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Area</label>
                                            <input class="form-control" placeholder="Area" name="area" id="area" type="text">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Cons-Value</label>
                                            <input class="form-control" placeholder="Cons-Value" name="cvalue" id="cvalue" type="text">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label>Vendor ID</label>
                                            <input class="form-control" name="vendorid" id="vendorid" readonly>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label>Vendor</label>
                                            <input class="form-control" placeholder="Vendor" name="vendor" id="vendor" autocomplete="off">
                                        </div>
                                        <!-- <div class="form-group col-md-10">
                                            <label>Vendor Detail</label>
                                            <textarea rows="5" cols="50" class="form-control" placeholder="Vendor Detail" name="vdetail" id="vdetail"></textarea>
                                        </div> -->


                                        <div class="form-group col-md-3">
                                            <label>Vendee ID</label>
                                            <input class="form-control" name="vendeeid" id="vendeeid" readonly>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label>Vendee</label>
                                            <input class="form-control" placeholder="vendee" name="vendee" id="vendee" autocomplete="off">
                                        </div>

                                      
                                        
                                        <!-- <div class="form-group col-md-3">
                                            <label> </label>
                                            <input type="submit" id="submit" class="form-control btn btn-primary" value="submit" name="submit">
                                        </div>
     -->




<!-- ----------------------------start of canvas-------------------------------------- -->
<div class="col-md-12">
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-primary btn-sm" id="line" value="Line"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="dline" value="DashLine"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="rect" value="Rect"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="stroke" value="Stroke"></input>
                        
                    </div>   

                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                    <input type="button" class="btn btn-primary btn-sm" id="itext" value="Text"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="b" value="B"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="i" value="I"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="u" value="U"></input>
                        <input type="button" class="btn btn-primary btn-sm" id="size" value="Size"></input>
                    </div>

                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-default btn-sm" id="copy" value="Copy"></input>
                        <input type="button" class="btn btn-default btn-sm" id="paste" value="Paste"></input>
                    </div>                      
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="button" class="btn btn-warning btn-sm" id="remove" value="Remove"></input>
                        <input type="button" class="btn btn-warning btn-sm" id="clear" value="ClearAll"></input>
                    </div>
                 
                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px">
                        <input type="submit" class="btn btn-default btn-success btn-sm" name="submit" id="submit" value="submit"></input>
                        <input type="button" class="btn btn-default btn-success btn-sm" name="preview" id="preview" value="Preview"></input>
                    </div>
                </div>

                <div class="col-md-12">
                    <canvas id="c" style="border:1px solid #ccc;border-radius:5px; margin-bottom:50px;"></canvas>
                
                
                </div>
                </form>
                </div>


         <script type="text/javascript">
                            
                            $.get("includes/search_vendor.inc.php", function(data){
                                //var vendor_id;
                                $("#vendor").typeahead({ source:data,
                            autoSelect:true,
                            afterSelect:function(item){
                                var vendor_id=loadValues("vendor",item);
                                document.getElementById('vendorid').value=vendor_id;
                             
                            }
                           
                        });
                        
                            },'json');
                            //alert(vendor_id+"vid");
                        </script> 




         <script type="text/javascript">
                            $.get("includes/search_vendee.inc.php", function(data){
                            $("#vendee").typeahead({ source:data,
                            autoSelect:true,
                            afterSelect:function(item){
                               // loadValues("vendee",item);
                                var vendee_id=loadValues("vendee",item);
                                document.getElementById('vendeeid').value=vendee_id;
                                //$("#stamp").focus();
                            }
                        });
                            },'json');
                        </script> 



                <script type="text/javascript" src="../js/myfabric.js"></script>



<?php
include("footer.php");
?>