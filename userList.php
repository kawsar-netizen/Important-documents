<?php
include('header.php');
$branch_code = $_SESSION['mt_agent_br_id'];
?>

<!-- MAIN CONTENT-->
<div class="main-content">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="exportTableToExcel('tblData', 'rppm-data')" class="btn btn-success">Export To Excel</button>

    <br><br>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table id="tblData" class="table table-borderless table-striped table-earning nowrap">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Mysis</th>
                                    <th>Full name</th>
                                    <th>Email</th>
                                    <th>Phone no.</th>
                                    <th>Branch</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $counter = 1;
                                $q = mysqli_query($conn, "SELECT * FROM employees ORDER BY id DESC");
                                while ($f = mysqli_fetch_array($q)) {
                                ?>

                                    <tr>
                                        <td><?php echo $counter; ?></td>
                                        <td><?php print $f['mysis_id']; ?></td>
                                        <td><?php print $f['full_name']; ?></td>
                                        <td><?php print $f['email']; ?></td>
                                        <td><?php print $f['mobile']; ?></td>
                                        <td>
                                            <?php
                                            $branch_id = $f['branch_id'];
                                            $br_q = mysqli_query($conn, "SELECT branch_code,branch_name FROM `branches` where id='$branch_id'");
                                            $br_f = mysqli_fetch_array($br_q);
                                            print $br_f['branch_name'];
                                            ?>
                                        </td>

                                        <td>
                                            <a href="userEdit.php?id=<?php echo $f['id']; ?>" class="btn btn-info">Edit</a>
                                            <a href="userDelete.php?id=<?php echo $f['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $counter++;
                                }
                                ?>
                            </tbody>
                        </table>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</body>

</html>
<!-- end document-->
<script>
    function exportTableToExcel(tableID, filename = '') {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';

        // Create download link element
        downloadLink = document.createElement("a");

        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

            // Setting the file name
            downloadLink.download = filename;

            //triggering the function
            downloadLink.click();
        }
    }
</script>
