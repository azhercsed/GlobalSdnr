<?php
include("header.php");

if($_SESSION['type']!='admin'){
    header("Location: includes/logout.inc.php");
}
if(isset($_GET['status'])){
    if($_GET['status']=='success'){
        ?>
        <script>
        window.alert("Operation successfull!!");
        </script>
    <?php
    }
    else
    if($_GET['status']=='user_exist'){
        ?>
        <script>
        window.alert("User already exist.");
        </script>
        <?php
    }
}
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> New User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form" method="post" action="includes/newUser.inc.php">
                                        <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group ">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Enter new username" type="text" name="nuser" autofocus required>
                                            <small class="form-text text-muted"><i class="fa fa-info-circle"></i> User type is Standard by default.</small>
                                            
                                        </div>
                                                  
                                        <div class="form-group ">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="(Optional) Default 12345." type="password" name="npass">
                                            <small class="form-text text-muted"><i class="fa fa-lock"></i> All Passwords are <i>MD5 Encrypted.</i></small>
                                        </div>

                                        <div class="form-group ">
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="Enter Fullname" type="text" name="fname" required>
                                            
                                        </div>
                                        <div class="pull-right">   
                        <button type="submit" class="btn btn-default btn-primary" name="submit" ><i class="fa fa-user"></i> Submit</button>
                        <button type="reset" class="btn btn-default"> Reset</button>
                        </div>
                        <br><br><br><br>
                                        </div>
</form>

<?php
include("footer.php");
?>