<?php
include 'connection.php';

if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from income where id = $id";
    $result = mysqli_query($con,$sql);
    if ($result){
        //echo "Deleted Successfully";
        header('location:income report.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
