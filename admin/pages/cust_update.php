<?php
include("header.php");
include("includes/db.inc.php");
$id=$_GET['id'];
$name=$_GET['name'];
    $co=$_GET['co'];
    $fname=$_GET['fname'];
    $address=$_GET['address'];
    $detail=$_GET['detail'];



?>
       
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Update Customer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <form role="form" method="get" action="includes/cust_mgmt.inc.php">

                        <div class="form-group col-md-4">
                            <label>ID</label>
                            <input class="form-control" type="text" id="id" name="id" value="<?php echo htmlspecialchars($id); ?>" readonly>
                        </div>
 
                        <div class="form-group col-md-8">
                            <label>Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                        </div>
                      
                                  
                        <div class="form-group col-md-12">
                        <label>C/O Details</label>
                        <label class="checkbox-inline">
                                <input type="radio" name="co" value="so" id="so">S/O
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="co" value="do" id="do">D/O
                            </label>
                            <label class="checkbox-inline" >
                                <input type="radio"  name="co" value="wo" id="wo">W/O
                            </label>
                            <input class="form-control" id="fname" name="fname" value="<?php echo htmlspecialchars($fname); ?>">
                        </div>
                

                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" id="address" name="address" ><?php echo htmlspecialchars($address); ?></textarea>
                        </div>
                        

                          <div class="form-group col-md-12">
                            <label>Other Details</label>
                            <textarea class="form-control" rows="3" id="detail" name="detail"><?php echo htmlspecialchars($detail); ?></textarea>
                        </div>
                                             
                        
                        <div class="col-md-12">
                            <div class="pull-right">   
                        <button type="submit" class="btn btn-default btn-primary" name="submit" ><i class="fa fa-print"></i> Submit</button>
                        <button type="reset" class="btn btn-default"><i class="fa fa-window-restore"></i> Reset</button>
                        </div>
                        <br><br><br><br>
                        </div>

                        
                        
                    </div>
                   
                </form>
                
            </div>

            <script type="text/javascript">
                var co= "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($co)); ?>";
                document.getElementById(co).checked=true;
                //window.alert(co);
                </script>

<?php
include("footer.php");
?>