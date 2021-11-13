<?php

include('db.php');

if(isset($_POST['register'])){
$username = $_POST['username'];
$email = $_POST['email'];
$cnum = $_POST['cnum'];
$password = $_POST['password'];
$address = $_POST['address'];


    $insert_c = "insert into seller(username,email,cnum,password,address) values('$username','$email','$cnum','$password','$address')";

            $run_c=mysqli_query($con,$insert_c);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Registered Succesfully')
            window.location.href='../sellerlogin.php';
            </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>