<?php
include("header.php");

//echo $_SERVER['PHP_SELF'];

$client_name= gethostbyaddr( $_SERVER['REMOTE_ADDR']);

$client_ip=$_SERVER['REMOTE_ADDR'];

$user_agent= $_SERVER['HTTP_USER_AGENT'];

if(isset($_COOKIE['ammara'])){
    $key=$_COOKIE['ammara'];

}else{
    $key="Not_Authorised";
}

?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> Authorize Client</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form" method="post" action="includes/auth.inc.php">
                                        <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group ">
                                            <label><span style="font-weight:bold;font-size:12pt;text-decoration: underline;">System Details</span></label><br>
                                            <label>ClientName : <small><?php echo $client_name;?></small></label><br>
                                            <label>ClientIp : <small><?php echo $client_ip;?></small></label><br>
                                            <label>UserAgent : <small><?php echo $user_agent;?></small></label><br>
                                            <label>AuthorizationKey : <span class="text-primary"><small><b><u><?php echo $key;?></u></b></small></span></label><br>
                                        </div>
                                    
                                        <?php
                                        if($key=="Not_Authorised"){?>          
                                        <div class="form-group ">
                                            <label>Number of days</label>
                                            <input class="form-control" placeholder="Example 365 for one year" type="text" name="days" autofocus required>
                                            
                                        </div>
                                        
                                        <div class="pull-right">   
                        <button type="submit" class="btn btn-default btn-success" name="submit" ><i class="fa fa-key"></i> Continue</button>
                        
                        </div>
                        <br><br><br><br>
                                        </div>
                                        <?php
                                        }else{
                                           ?>
                                            <div class="pull-right">   
                        <button type="submit" class="btn btn-default btn-danger" name="submit1" ><i class="fa fa-key"></i> Deauthorize</button>
                        
                                           <?php 
                                        }
                                        ?>
</form>

<?php
include("footer.php");
?>