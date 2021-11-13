<?php
include("form/db.php");
$id = $_GET['id'];
$sql = "update customer set status='Approved' where id='".$id."' ";
$result=mysqli_query($con,$sql) or die(mysqli_error());
if($result)
{
  header("Location:approvecustomer.php");
}
?>