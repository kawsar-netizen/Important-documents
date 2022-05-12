<?php
include('header.php');
$branch_code = $_SESSION['mt_agent_br_id'];


?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>User</strong> Insert
                        </div>
                        <div class="card-body card-block">
                            <form action="userStore.php" method="post" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Mysis <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="mysis" id="mysis">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <div class="input-group-btn">               
                                                <input type="button" class="btn btn-primary" value="Search" onclick="trend()">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Name <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Password <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="password" id="user_password">
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Confirm Password <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="confirmPassword" id="conf_password">
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Email <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label"><strong>Branch Name <span style="color:red;">*</span></strong></label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                    <?php
                                        $branches = mysqli_query($conn,"SELECT * FROM branches");
                                    ?>
                                    <select class="form-control" id="branch" name="branch" required="1">
                                            <option value="">-- Select --</option>
                                            <?php
                                            
                                            while($branchesData = mysqli_fetch_array($branches))
                                            {
                                            ?>
                                                <option value="<?php print $branchesData['branch_code'];?>"><?php print $branchesData['branch_name'];?></option>
                                            <?php
                                            }
                                            ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"><strong>Phone Number <span style="color:red;">*</span></strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="phone_number" id="phone_number">
                                    </div>
                                </div>
                                <div class="hr-line-dashed" style="border-top: 1px dashed #e7eaec;color: #ffffff;background-color: #ffffff;height: 1px;margin: 20px 0;"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                    <input type="submit" class="au-btn au-btn--block au-btn--green m-b-20" name="submit" value="Save Your Information">
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
    if(user_id !=''){
        $.ajax({
            type : "post",
            url : "user_data/user_data_fetch.php",
            data : {
                "user_id" : user_id
            },
            dataType:"json",
            success:function(response){
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