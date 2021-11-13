<?php

include('db.php');

if(isset($_POST['register'])){
$email = $_POST['email'];
$catNames = $_POST['catNames'];
$pname = $_POST['pname'];
$bamount = $_POST['bamount'];
$username = $_POST['username'];
$cemail = $_POST['cemail'];
$bidam = $_POST['bidam'];


    $insert_c = "insert into bid(email,catNames,pname,bamount,username,cemail,bidam,date) values
    ('$email','$catNames','$pname','$bamount','$username','$cemail','$bidam',NOW())";

            $run_c=mysqli_query($con,$insert_c);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Registered Succesfully')
            window.location.href='../viewbid.php';
            </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>