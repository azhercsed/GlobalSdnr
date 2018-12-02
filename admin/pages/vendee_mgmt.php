<?php
include("header.php");
include("includes/db.inc.php");

global $alertmsg;
if(isset($_GET['status'])){
    if($_GET['status']=="del_success"){
    $alertmsg="Vendor Deleted Successfully !!";
    
    }
    else{
        $alertmsg="Vendor Updated Successfully !!";
        
    }
    echo '<div class="alert alert-info alert-dismissible col-md-4 col-md-offset-4" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>Information! </strong>'.$alertmsg.
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
                    <h2 class="page-header"> Vendor Management</h2>
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
                        <th>Father Name</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php
            $sql="SELECT * FROM vendor;";
            if($result=mysqli_query($con,$sql)){
                while($row=mysqli_fetch_assoc($result)){
                    
                    echo '<tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['vname'].'</td>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['vcompany'].'</td>
                            <td>'.$row['vaddress'].'</td>
                            <td><a href="updatevendor.php?operation=update&id='.$row['id'].
                            '&name='.$row['vname'].
                            '&co='.$row['vcompany'].
                            '&fname='.$row['fname'].

                            '&vage='.$row['age'].

                            '&vocc='.$row['occupation'].
                            
                            '&vaddress='.$row['vaddress'].
                            '&vmobile='.$row['vmobile'].

                            '&vpan='.$row['vpan'].
                            '&vaadhar='.$row['vaadhar'].
                            '&vcity='.$row['vcity'].

                            '&vmktval='.$row['mktval'].
                            '&vsnum='.$row['syno'].
                            '&lpno='.$row['lpno'].

                            '&village='.$row['village'].
                            '&mandal='.$row['mandal'].
                            '&district='.$row['district'].

                            '&state='.$row['state'].

                            '">Update</a></td>
                            <td><a href="includes/vendor_mgmt.inc.php?operation=delete&id='.$row['id'].'">Delete</a></td>
                        </tr>';
                }
            }        
?>
</tbody>
</table>

<?php
include("footer.php");
?>