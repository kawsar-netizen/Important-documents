<?php 
    include('database.php');
    $branch_code = $_SESSION['mt_agent_br_id'];
    if (isset($_POST['submit'])) {
        $userMysis = $_POST['mysis'];
        $userName = $_POST['name'];
        $userPassword = $_POST['password'];
        $userConfpassword = $_POST['confirmPassword'];
        $userEmail = $_POST['email'];
        $userBranch = $_POST['branch'];
        $userPhone = $_POST['phone_number'];

        $pass = md5($_POST['password']);

        //Check empty value
        if (empty($userMysis) || empty($userName) || empty($userPassword) || empty($userConfpassword) || empty($userEmail) || empty($userBranch) || empty($userPhone)) {
            ?>
                <script>
                    alert('Empty field detected!!');
                    window.location.replace("userInsert");
                </script>
            <?php
        } else {
            if ($userPassword === $userConfpassword) {
                //Get the branch id from branch code
                $b_q = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM branches where branch_code = '$userBranch'"));
                $bID = $b_q['id'];

                // //Take the last inserted data from eployee table
                // $e_q = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM employees order by id desc limit 1"));
                // $eID = $e_q['user_id'];
                // //Increment user_id every time from last value
                // $userId = $eID + 1;

                //Insert into employee
                $main_data_q = "INSERT INTO employees(full_name,mobile,is_admin_user, is_password_change, branch_id, is_disable, email, mysis_id, password) VALUES ('$userName','$userPhone',0,0,'$bID',0,'$userEmail', '$userMysis', '$pass')";

                file_put_contents("shahabuddin.txt", "INSERT INTO employees(full_name,mobile,is_admin_user, is_password_change, branch_id, is_disable, email, mysis_id, password) VALUES ('$userName','$userPhone',0,0,'$bID',0,'$userEmail', '$userMysis', '$pass')");

                $main_data_p=mysqli_query($conn,$main_data_q);

                if ($main_data_p) {
                    ?>
                        <script>
                            alert('Data updated successfully!!');
                            window.location.replace("userInsert");
                        </script>
                    <?php
                } else {
                    ?>
                        <script>
                            alert('Something went wrong!!');
                            window.location.replace("userInsert");
                        </script>
                    <?php
                }

            } else {
                ?>
                    <script>
                        alert('Password and confirm password not matched!!');
                        window.location.replace("userInsert");
                    </script>
                <?php
            }
        }
    }


?>