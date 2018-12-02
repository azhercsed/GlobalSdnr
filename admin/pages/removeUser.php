<?php
include("header.php");
if($_SESSION['type']!='admin'){
    header("Location: includes/logout.inc.php");
}
include("includes/db.inc.php");

if(isset($_GET['operation'])){
    if($_GET['operation']=='success'){
        ?>
        <script>
            window.alert("Operation successfull!!");
            </script>
        <?php
    }
    else{
        ?>
        <script>
            window.alert("Operation illegal..");
            </script>
        <?php
    }
}

$sql="SELECT * FROM users;";
$result=mysqli_query($con,$sql);

?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Remove User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <form role="form" method="post" action="includes/removeUser.inc.php">
                                        <div class="col-md-6 col-md-offset-3">
                                        <div class="form-group ">
                                            <label>Select a user to remove</label>
                                            <select class="form-control" name="user">
                                                <?php
                                                while($row=mysqli_fetch_assoc($result))
                                                {
                                                    ?><option><?php echo $row['username'];?></option><?php
                                                }
                                                ?>
                                                
                                            </select>
                                        </div>
                                        <div class="pull-right">   
                        <button type="submit" class="btn btn-default btn-primary" name="submit" ><i class="fa fa-user-times"></i> Remove User</button>
                        <button type="reset" class="btn btn-default"> Reset</button>
                        </div>
                        <br><br><br><br>
                                        </div>
</form>

<?php
include("footer.php");
?>