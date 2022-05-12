<?php
    include('database.php');
    $branch_code=$_SESSION['mt_agent_br_id'];
    $upId = '1';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $branch = $_POST['branch'];
        $mobile = $_POST['mobile'];
        
        //Check empty value
        if (empty($full_name) || empty($email) || empty($branch) || empty($mobile)) {
            ?>
                <script>
                    alert('Empty field detected!!');
                    window.location.replace("userList");
                </script>
            <?php
        } else {
            $employee_sql = "UPDATE employees SET full_name = '$full_name', email = '$email', branch_id = '$branch', mobile = '$mobile', updated_by_id = '$upId' WHERE employees.id = '$id' ";
        
            $main_data_p = mysqli_query($conn, $employee_sql);
            if ($main_data_p) {
                ?>
                    <script>
                        alert('Data updated successfully!!');
                        window.location.replace("userList");
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert('Something went wrong!!');
                        window.location.replace("userList");
                    </script>
                <?php
            }
        } 
    } else {
        ?> 
        <script> 
            alert('Try again!!'); window.location.replace("userList");
        </script>
    <?php
    }
?>