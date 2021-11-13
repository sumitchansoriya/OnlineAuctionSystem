<?php

include('db.php');

if(isset($_POST['register'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


    $insert_c = "insert into contact(fname,lname,email,subject,message) values
    ('$fname','$lname','$email','$subject','$message')";

            $run_c=mysqli_query($con,$insert_c);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('message sent Succesfully')
            window.location.href='../index.php';
            </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>