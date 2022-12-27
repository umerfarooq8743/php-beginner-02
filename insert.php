<?php

$uxname=$_POST['uxemail'];
$uxpass=$_POST['uxpass'];

$conn=mysqli_connect("localhost","root","","dblogin_form");
$query="INSERT INTO `tbluser_detail`(`Sr.no`, `Email`, `Password`) VALUES (null,'$uxname','$uxpass')";
mysqli_query($conn,$query);
header("location:showdata.php");
?>





