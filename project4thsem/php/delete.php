<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from `vehicle_owner` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:vehicle_owner.php');
        
    } else{
        die(mysqli_error($con));
    }


}
?>