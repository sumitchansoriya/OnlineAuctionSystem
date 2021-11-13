<?php

include('db.php');

if(isset($_POST['submit'])){
  
  $email = $_POST['email'];
$catName = $_POST['catName'];



    $insert_c = "insert into category(email,catNames) values('$email','$catName')";

            $run_c=mysqli_query($con,$insert_c);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Category Added Succesfully')
            window.location.href='../viewcategory.php';
            </SCRIPT>");
        }
        else{
          echo "Something went wrong!";
        }
   
?>