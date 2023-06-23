<?php
include 'connection.php';
error_reporting(0);
if(isset($_GET['deleteid']))
{
    $inid=$_GET['deleteid'];
    $sql="delete from expense where id = '.$id.'";
    $result = mysqli_query($con,$sql);
    if ($result){
        //echo "Deleted Successfully";
        header('location:expense report.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
