
<?php
include("form/db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
  $email=$_POST['email'];
  $password=$_POST['password'];
  
   if(empty($email)||empty($password))
         {
           echo "<script>alert('Please Fill email and password');</script>";
         }
         else
         {
     $sel="select * from seller where email='$email' and password='$password'";
     $result=$con->query($sel);
      
      if($row=mysqli_fetch_array($result))        
       {
          $_SESSION['id']=$row['id'];
          $id= $_SESSION['id'];
            $_SESSION['email']=$row['email'];
          $email= $_SESSION['email'];
          echo "<script>window.location.href='dashboard.php'</script>";  
      }
      else
      {
        echo "<script>alert('Invalid Email or password');</script>";
        echo "<script>window.location.href='sellerlogin.php'</script>";  
          }
   }
}
?>