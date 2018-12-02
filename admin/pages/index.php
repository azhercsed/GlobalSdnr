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
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <form role="form" method="post" action="includes/sold.inc.php">
                                        
                        <div class="form-group col-md-6">
                            <label>Date<small>(Default Today)</small></label>
                            <input class="form-control" type="date" name="date" id="date">
                        </div>
                    
                                  
                        <div class="form-group col-md-3">
                            <label>Starting Serial Number</label>
                            <input class="form-control" placeholder="Default is <?php echo $current; ?>" name="current">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Number of Stamps</label>
                            <input class="form-control" placeholder="Default is 1" name="numofstamps">
                        </div>

                                
                                            
                                                <script>
                                                    var name,fname,address;
                                                    function loadValues(i){
                                                        //alert(item);
                                                        var str=i;
                                                        var name=str.substr(5,str.indexOf('/O')-7);
                                                        var fname=str.slice(str.indexOf("/O")+3,str.indexOf("Address:"));
                                                        var address=str.slice(str.indexOf("Address:")+9,str.indexOf("Detail:"));
                                                        var detail=str.slice(str.indexOf("Detail:")+8);
                                                        var co=str.slice(str.indexOf("/O")-1,str.indexOf("/O")+2);
                                                        co=co.replace("/","");
                                                        co=co.toLowerCase();
                                                        //window.alert(item);
                                                        //window.alert(co);
                                                        document.getElementById("name").value=name;
                                                        document.getElementById("fname").value=fname;
                                                        document.getElementById("address").value=address;
                                                        document.getElementById("detail").value=detail;
                                                        document.getElementById(co).checked=true;
                                                    }
                                                    </script>
                                                
                                            
                         
                                       

                         <div class="form-group col-md-12">
                            <label>Search</label>
                            <input class="form-control" type="text" id="search" autocomplete="off" name="" >
                        </div>
                         <script type="text/javascript">
                            $.get("includes/auto.inc.php", function(data){
                            $("#search").typeahead({ source:data,
                            autoSelect:true,
                            afterSelect:function(item){
                                var i=item;
                                loadValues(i);
                                $("#stamp").focus();
                            }
                        });
                            },'json');
                        </script> 

                        <div class="form-group col-md-12">
                            <label>Name</label>
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>
                      
                                  
                        <div class="form-group col-md-12">
                        <label>C/O Details</label>
                        <label class="checkbox-inline">
                                <input type="radio" name="co" value="so" id="so" checked>S/O
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="co" value="do" id="do">D/O
                            </label>
                            <label class="checkbox-inline" >
                                <input type="radio"  name="co" value="wo" id="wo">W/O
                            </label>
                            <input class="form-control" id="fname" name="fname" required>
                        </div>
                

                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" id="address" name="address" required></textarea>
                        </div>
                        

                          <div class="form-group col-md-12">
                            <label>Other Details</label>
                            <textarea class="form-control" rows="3" id="detail" name="detail"></textarea>
                        </div>
                                             
                           
                        <div class="form-group col-md-12">
                            
                            <label class="checkbox-inline">
                                <input type="checkbox" name="save" value="1">Keep Record
                            </label>
                           
                            
                        </div>
                     
                     
                        <div class="form-group col-md-12">
                            <label>For Whom</label>
                            <label class="checkbox-inline">
                                <input type="radio" name="whom" value="self" checked>Self
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="whom" value="self-others">Self & Others
                            </label>
                            <label class="checkbox-inline" >
                                <input type="radio"  name="whom" value="others">Others
                            </label>
                            
                        </div>

                  


                        <div class="form-group col-md-12">
                            <label>Stamp Value</label>
                            <select class="form-control" name="stamp" id="stamp">
                                <option value="20">Rs.20</option>
                                <option value="50">Rs.50</option>
                                <option value="100">Rs.100</option>
                            </select>
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

<?php
include("footer.php");
?>