<?php

include('db.php');

if(isset($_POST['register'])){
$username = $_POST['username'];
$cemail = $_POST['cemail'];
$cnum = $_POST['cnum'];
$password = $_POST['password'];
$address = $_POST['address'];


    $insert_c = "insert into customer(username,cemail,cnum,password,address) values('$username','$cemail','$cnum','$password','$address')";

            $run_c=mysqli_query($con,$insert_c);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Registered Succesfully')
            window.location.href='../customerlogin.php';
            </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>