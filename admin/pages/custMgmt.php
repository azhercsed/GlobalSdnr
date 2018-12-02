<?php
include("header.php");
include("includes/db.inc.php");

global $alertmsg;
if(isset($_GET['status'])){
    if($_GET['status']=="del_success"){
    $alertmsg="Customer Deleted Successfully !!";
    
    }
    else{
        $alertmsg="Customer Updated Successfully !!";
        
    }
    echo '<div class="alert alert-info alert-dismissible col-md-4 col-md-offset-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Info! </strong>'.$alertmsg.
  '</div>';
}

?>
<style>
.alert {
  margin-bottom: 1px;
  height: 30px;
  line-height:30px;
  padding:0px 25px;
}
</style>
<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>





            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> Customer Management</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- <div><marquee>Work in progress..</marquee></div> -->
            <!-- /.row -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Care Of</th>
                        <th>Address</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php
            $sql="SELECT * FROM datatable;";
            if($result=mysqli_query($con,$sql)){
                while($row=mysqli_fetch_assoc($result)){
                    if($row['co']=='so'){
                        $co="S/O";
                    }
                    else if($row['co']=='wo'){
                        $co="W/O";
                    }
                    else{
                        $co="D/O";
                    }
                    echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['name'].'</td>
                            <td>'.$co." ".$row['fname'].'</td>
                            <td>'.$row['address'].'</td>
                            <td><a href="cust_update.php?operation=update&id='.$row['id'].
                            '&name='.$row['name'].
                            '&co='.$row['co'].
                            '&fname='.$row['fname'].
                            '&address='.$row['address'].
                            '&detail='.$row['detail'].
                            '">Update</a></td>
                            <td><a href="includes/cust_mgmt.inc.php?operation=delete&id='.$row['id'].'">Delete</a></td>
                        </tr>';
                }
            }        
?>
</tbody>
</table>

<?php
include("footer.php");
?>