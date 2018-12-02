<?php
include("header1.php");
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form" method="post" action="includes/changeUserPwd.inc.php">
                                        <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group ">
                                            <label>Current Password</label>
                                            <input class="form-control" placeholder="Enter Current Password" type="password" name="cpass" autofocus>
                                            
                                        </div>
                                    
                                                  
                                        <div class="form-group ">
                                            <label>New Password</label>
                                            <input class="form-control" placeholder="Enter New Password" type="password" name="npass">
                                            <small class="form-text text-muted"><i class="fa fa-lock"></i> All Passwords are <i>MD5 Encrypted.</i></small>
                                        </div>
                                        <div class="pull-right">   
                        <button type="submit" class="btn btn-default btn-primary" name="submit" ><i class="fa fa-key"></i> Change</button>
                        <button type="reset" class="btn btn-default"> Reset</button>
                        </div>
                        <br><br><br><br>
                                        </div>
</form>

<?php
include("footer.php");
?>