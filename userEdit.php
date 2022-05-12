<?php
    include('header.php');
    $branch_code = $_SESSION['mt_agent_br_id'];

    $id = $_GET['id'];
    $ur_q = mysqli_query($conn,"SELECT * FROM employees where id='$id'");
    $ur_f = mysqli_fetch_array($ur_q);
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Update <strong><?php print $ur_f['full_name']; ?>'s </strong> information
                        </div>
                        <div class="card-body card-block">
                            <form action="userEditDataSave.php" method="post" class="form-horizontal">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Mysis <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="mysis_id" id="mysis" value="<?php print $ur_f['mysis_id']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"
                                    style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Name <span
                                                style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="full_name" id="name" value="<?php print $ur_f['full_name']; ?>" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"
                                    style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Email <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="email" value="<?php print $ur_f['email']; ?>" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"
                                    style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;">
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label"><strong>Branch Name <span style="color:red;">*</span></strong></label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <?php
                                            $bId = $ur_f['branch_id'];
                                            $b_d = mysqli_query($conn,"SELECT * FROM branches");
                                            
                                        ?>
                                        <select class="form-control" id="branch" name="branch" required="1">
                                            <option value="">-- Select --</option>
                                            <?php
                                                while($b_f_d = mysqli_fetch_array($b_d)) {
                                            ?>

                                            <option value="<?php print $b_f_d['id'];?>" <?php echo ( $b_f_d['id'] == $bId) ? 'selected' : '';?>>
                                                <?php print $b_f_d['branch_name']. $b_f_d['id']; ?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"
                                    style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;">
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Phone Number <span
                                                style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="mobile" id="phone_number" value="<?php print $ur_f['mobile']; ?>" />
                                    </div>
                                </div>
                                <div class="hr-line-dashed"
                                    style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <input type="submit" class="au-btn au-btn--block au-btn--green m-b-20"
                                            name="submit" value="Update">
                                        <!-- <button class="btn btn-ms btn-success" type="submit">Save</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<script>
var b_data = '';

function trend() {
    var user_id = $('#mysis').val();
    //console.log(user_id)
    if (user_id != '') {
        $.ajax({
            type: "post",
            url: "user_data/user_data_fetch.php",
            data: {
                "user_id": user_id
            },
            dataType: "json",
            success: function(response) {
                //console.log(response);
                $('#name').val(response.user_name);
                $('#phone_number').val(response.phone_number);
                $('#user_password').val('123456');
                $('#conf_password').val('123456');
                //$('#branchData').val(response.branch_number);

                $('#branch').val(response.branch_number);

            }
        });
    }

}
</script>