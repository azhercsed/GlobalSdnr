<?php
include("header.php");
include("includes/db.inc.php");
$name="Name:";
$fname="Fname:";
$address="Address:";
$detail="Detail:";

$sql="SELECT * FROM current;";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$current=$row['current'];

$sql="SELECT * FROM datatable;";
$result=mysqli_query($con,$sql);


?>

       
            <div class="row">
            <div id="result"></div>
                <div class="col-lg-12">
                    <h2 class="page-header"> New Vendor</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <form role="form" id="form">
                    
<!--
                        <div class="form-group col-md-4">
                            <label>Vendor Name</label>
                            <input class="form-control" type="text" id="vname" name="vname" required>
                        </div>

                          <div class="form-group col-md-4">
                        <label>Father's Name</label>
                                           
                            <input class="form-control" type="text" id="fname" name="fname" required>
                        </div>
-->
                       
                          <div class="form-group col-md-12">
                            <label>Vendor & Other Details</label>
                            <textarea class="form-control" type="text" id="vodetail" name="vodetail" placeholder="Optional" style="display:none;"></textarea>
                            <div class="btn-group pull-right" role="group" aria-label="..." style="margin-bottom:20px;">
                                <input type="button" class="btn btn-default" id="b" value="B">
                                <input type="button" class="btn btn-default" id="i" value="I">
                                <input type="button" class="btn btn-default" id="u" value="U">
                                <input type="button" class="btn btn-default" id="size" value="Size">


                 
                            </div> 
                            <div contenteditable="true" class="form-control" id="iframe" name="iframe" style="overflow:scroll;padding:10px 10px;height:100px;font-size:14px;line-height:1.428;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif">
                            
                            
                            </div>
                        </div>
                      
                                  
                        <div class="form-group col-md-4">
                        <label>Age</label>
                                        
                            <input class="form-control" type="number" id="vage" name="vage" required>
                    
                        </div>
                      
                        <div class="form-group col-md-4">
                        <label>Occupation</label>
                                           
                            <input class="form-control" type="text" id="vocc" name="vocc" required>
                        </div>

                        <div class="form-group col-md-4">
                        <label>Company</label>
                                           
                            <input class="form-control" type="text" id="vcomp" name="vcomp" required>
                        </div>
                        
                        
                        <div class="form-group col-md-12">
                            <label>Full Address</label>
                            <textarea class="form-control" rows="3" id="vaddress" name="vaddress" required></textarea>
                        </div>
                        

                         <div class="form-group col-md-4">
                        <label>Mobile</label>
                                           
                            <input class="form-control" type="number" id="vmobile" name="vmobile" required>
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>PAN</label>
                                           
                            <input class="form-control" type="text" id="vpan" name="vpan" required>
                        </div>


                         <div class="form-group col-md-4">
                        <label>Aadhar</label>
                                           
                            <input class="form-control" type="text" id="vaadhar" name="vaadhar" required>
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>City</label>
                                           
                            <input class="form-control" type="text" id="vcity" name="vcity" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label>Market Value</label>
                                           
                            <input class="form-control" type="number" id="vmktval" name="vmktval" required>
                        </div>
                                             
            
                        <div class="col-lg-12">
                            <h3 class="page-header"> Plot Details</h3>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Survey Numbers</label>
                            <textarea class="form-control" rows="3" id="snum" name="snum" required></textarea>
                        </div>
                        
                        
                        
                        
                         <div class="form-group col-md-4">
                        <label>LP Number</label>
                                           
                            <input class="form-control" type="text" id="lpno" name="lpno" required>
                       
                        </div>
                        


                         <div class="form-group col-md-4">
                        <label>Village</label>
                                           
                            <input class="form-control" type="text" id="village" name="village" required>
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>Mandal</label>
                                           
                            <input class="form-control" type="text" id="mandal" name="mandal" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label>District</label>
                                           
                            <input class="form-control" type="text" id="district" name="district" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label>State</label>
                                           
                            <input class="form-control" type="text" id="state" name="state" value="Telangana" readonly>
                        </div>

                      
                       
                

                        
                        <div class="col-md-12">
                            <div class="pull-right">
                        <input type="submit" class="btn btn-default btn-primary" name="vsubmit" id="vsubmit" value="Submit"/>
                        <button type="reset" id="reset" class="btn btn-default"><i class="fa fa-window-restore"></i> Reset</button>
                        </div>
                        <br><br><br><br>

                        </div>
                        
                    
                   
                </form>
                
            </div>
<script src="../js/iframe.js"></script>
<script src="../js/myfabric.js"></script>
            <!-- <script type="text/javascript">
            $(document).ready(function(){

            var iframe=document.getElementById('iframe');
            var doc=iframe.contentDocument;
            doc.body.contentEditable=true;
                var iframeDoc=iframe.contentWindow.document;

            $('#b').on('click',function(){
                iframeDoc.execCommand('bold');
            });


            $('#i').on('click',function(){
                iframeDoc.execCommand('italic');
            });


            $('#u').on('click',function(){
                iframeDoc.execCommand('underline');
            });


            $('#size').on('click',function(){
                var size=window.prompt("Enter font size (1-7)","1");
                iframeDoc.execCommand("fontSize",false,size);
            });
            $('#submit').on('click',function(e){
                e.preventDefault();
                var value=document.getElementById('iframe').contentWindow.document.body.innerHTML;
                $('#odetail').text(value);
                $.ajax({

                    method:'post',
                    datatype:'text',
                    url:'includes/newvendor.inc.php',
                    data:$('#form').not('#iframe').serialize(),
                    success:function(data){
                        $('#msg').html(data);
                    }


                });
                //alert($('#iframe').contentWindow.document.body.innerHTML);
               // alert(value);
                
            });
            });

            
            
            </script> -->

<?php
include("footer.php");
?>