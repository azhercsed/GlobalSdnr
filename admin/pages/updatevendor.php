<?php
include("header.php");


/**
 * vname,vcompany,fname,age,occupation,vaddress,vmobile,vpan,vaadhar,vcity,mktval,syno,lpno,village,mandal,district
 */
$id=$_GET['id'];
$vname=$_GET['name'];
$fname=$_GET['fname'];
$vage=$_GET['vage'];

$vocc=$_GET['vocc'];

$odetail=$_GET['other_detail'];
 
$vcomp=$_GET['co'];
$vaddress=$_GET['vaddress'];
$vmobile=$_GET['vmobile'];

$vpan=$_GET['vpan'];
$vaadhar=$_GET['vaadhar'];
$vcity=$_GET['vcity'];

$vmktval=$_GET['vmktval'];
$vsnum=$_GET['vsnum'];
$lpno=$_GET['lpno'];

$village=$_GET['village'];
$mandal=$_GET['mandal'];
$district=$_GET['district'];

$state=$_GET['state'];


?>
       
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Update Vendor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <form role="form" method="get" action="includes/vendor_mgmt.inc.php">

                        <div class="form-group col-md-4">
                            <label>ID</label>
                            <input class="form-control" type="text" id="id" name="id" value="<?php echo htmlspecialchars($id); ?>" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Vendor Name</label>
                            <input class="form-control" type="text" id="vname" name="vname" value="<?php echo htmlspecialchars($vname); ?>">
                        </div>
                      
                                  
                        <div class="form-group col-md-3">
                        <label>Father's Name</label>
                                           
                            <input class="form-control" type="text" id="fname" name="fname"  value="<?php echo htmlspecialchars($fname); ?>">
                        </div>

                        <div class="form-group col-md-2">
                        <label>Age</label>
                                           
                            <input class="form-control" type="number" id="vage" name="vage" value="<?php echo htmlspecialchars($vage); ?>">
                       
                        </div>




                        <div class="form-group col-md-4">
                        <label>Occupation</label>
                                           
                            <input class="form-control" type="text" id="vocc" name="vocc"  value="<?php echo htmlspecialchars($vocc); ?>">
                        </div>

                        <div class="form-group col-md-8">
                        <label>Company</label>
                                           
                            <input class="form-control" type="text" id="vcomp" name="vcomp"  value="<?php echo htmlspecialchars($vcomp); ?>">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label>Vendor Other Details</label>
                            <textarea class="form-control" type="text" id="odetail" name="odetail" placeholder="Optional" style="display:none;"></textarea>
                            <div class="btn-group pull-right" role="group" aria-label="..." style="margin-bottom:10px;">
                                <input type="button" class="btn btn-default" id="b" value="B">
                                <input type="button" class="btn btn-default" id="i" value="I">
                                <input type="button" class="btn btn-default" id="u" value="U">
                                <input type="button" class="btn btn-default" id="size" value="Size">


                                <!-- <input class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" value="FontSize &#9660;">
                                        <span class="caret"></span></input>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><h1>Heading 1</h1></a></li>
                                        <li><a href="#"><h2>Heading 2</h2></a></li>
                                        <li><a href="#"><h3>Heading 3</h3></a></li>
                                        <li><a href="#"><h4>Heading 4</h4></a></li>
                                        <li><a href="#"><h5>Heading 5</h5></a></li>
                                        <li><a href="#"><h6>Heading 6</h6></a></li>
                                        
                                        srcdoc="<?php //echo urldecode($odetail);?>"
                                    </ul> -->
                            </div>
                            <iframe class="form-control" id="iframe" name="iframe" style="height:100px;font-size:14px;" ></iframe>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Full Address</label>
                            <textarea class="form-control" rows="3" id="vaddress" name="vaddress"  ><?php echo htmlspecialchars($vaddress); ?></textarea>
                        </div>
                        

                         <div class="form-group col-md-4">
                        <label>Mobile</label>
                                           
                            <input class="form-control" type="number" id="vmobile" name="vmobile"  value="<?php echo htmlspecialchars($vmobile); ?>">
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>PAN</label>
                                           
                            <input class="form-control" type="text" id="vpan" name="vpan"  value="<?php echo htmlspecialchars($vpan); ?>">
                        </div>


                         <div class="form-group col-md-4">
                        <label>Aadhar</label>
                                           
                            <input class="form-control" type="text" id="vaadhar" name="vaadhar"  value="<?php echo htmlspecialchars($vaadhar); ?>">
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>City</label>
                                           
                            <input class="form-control" type="text" id="vcity" name="vcity"  value="<?php echo htmlspecialchars($vcity); ?>">
                        </div>
                        <div class="form-group col-md-4">
                        <label>Market Value</label>
                                           
                            <input class="form-control" type="number" id="vmktval" name="vmktval"  value="<?php echo htmlspecialchars($vmktval); ?>">
                        </div>
                                             
            
                        <div class="col-lg-12">
                            <h3 class="page-header"> Plot Details</h3>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Survey Numbers</label>
                            <textarea class="form-control" rows="3" id="snum" name="snum" ><?php echo htmlspecialchars($vsnum); ?></textarea>
                        </div>
                        
                        
                        
                        
                         <div class="form-group col-md-4">
                        <label>LP Number</label>
                                           
                            <input class="form-control" type="text" id="lpno" name="lpno"  value="<?php echo htmlspecialchars($lpno); ?>">
                       
                        </div>
                        


                         <div class="form-group col-md-4">
                        <label>Village</label>
                                           
                            <input class="form-control" type="text" id="village" name="village"  value="<?php echo htmlspecialchars($village); ?>">
                       
                        </div>
                        <div class="form-group col-md-4">
                        <label>Mandal</label>
                                           
                            <input class="form-control" type="text" id="mandal" name="mandal"  value="<?php echo htmlspecialchars($mandal); ?>">
                        </div>
                        <div class="form-group col-md-4">
                        <label>District</label>
                                           
                            <input class="form-control" type="text" id="district" name="district"  value="<?php echo htmlspecialchars($district); ?>">
                        </div>
                        <div class="form-group col-md-4">
                        <label>State</label>
                                           
                            <input class="form-control" type="text" id="state" name="state"  value="<?php echo htmlspecialchars($state); ?>">
                        </div>

                      
                       
                

                        
                        <div class="col-md-12">
                            <div class="pull-right">
                        <button type="submit" class="btn btn-default btn-primary" name="submit" value="submit"><i class="fa fa-print"></i> Submit</button>
                        <button type="reset" class="btn btn-default"><i class="fa fa-window-restore"></i> Reset</button>
                        </div>
                        <br><br><br><br>

                        </div>
                        
                    </div>
                   
                </form>
                
            </div>
<script src="../js/iframe.js"></script>
<?php
include("footer.php");
?>