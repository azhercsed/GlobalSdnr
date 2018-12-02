<?php
include("header.php");
?>
       <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Shedules Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a shedule
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="form1" method="post", action="includes/publish.inc.php">
                                        <div class="form-group">
                                            <label>Group Code</label>
                                            <input type="text" class="form-control" name="grpCode">
                                            <p class="help-block">Field is optional.</p>

                                            <label>Group Name</label>
                                            <input type="text" class="form-control" name="grpName">
                                            <p class="help-block">Name field is optional.</p>

                                            <label>No. of Members</label>
                                            <input type="text" class="form-control" name="grpMembers">
                                            <p class="help-block">Field is optional.</p>

                                            <label>From Date</label>
                                            <input type="date" class="form-control" name="frmDate" required>
                                            <br>

                                            <label>To Date</label>
                                            <input type="date" class="form-control" name="toDate" required>
                                            <br>

                                            <label>Location</label>
                                            <input type="text" class="form-control" name="grpLocation">
                                            <p class="help-block">Field is optional.</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
             
                             
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<?php
include("footer.php");
?>