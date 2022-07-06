<?php
include "connect.php";
$name=$_POST['fullname'];
$contact=$_POST['contact'];
$emali=$_POST['email'];
$address=$_POST['address'];
$msg=$_POST['msg'];
$insert_sli = "INSERT INTO `project`(`id`, `name`, `contact`, `email`, `address`, `msg`) VALUES ('','$name','$contact','$emali','$address','$msg')";
$query = mysqli_query($con, $insert_sli);
if($query)
{
header ('location:test.php');
}
else{
    echo "slider not Inserted";
}
