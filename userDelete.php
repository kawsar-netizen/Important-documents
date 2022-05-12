<?php
    include('header.php');
    $branch_code=$_SESSION['mt_agent_br_id'];

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $delete_query1 = "DELETE from employees where id = '$id' ";
    $queryResult1 = mysqli_query($conn, $delete_query1);
    
    if($queryResult1 > 0) {
?>
<script> 
    alert('Record has been successfully deleted !!'); window.location.replace("userList.php");
</script>

<?php } else{ ?>

<script> 
    alert('Database Error!'); window.location.replace("userList.php");
</script>

 <?php } ?>