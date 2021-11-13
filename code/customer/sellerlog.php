
<?php
include("form/db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
  $cemail=$_POST['cemail'];
  $password=$_POST['password'];
  
   if(empty($cemail)||empty($password))
         {
           echo "<script>alert('Please Fill cemail and password');</script>";
         }
         else
         {
     $sel="select * from customer where cemail='$cemail' and password='$password' && status='Approved'";
     $result=$con->query($sel);
      
      if($row=mysqli_fetch_array($result))        
       {
          $_SESSION['id']=$row['id'];
          $id= $_SESSION['id'];
            $_SESSION['cemail']=$row['cemail'];
          $cemail= $_SESSION['cemail'];
          echo "<script>window.location.href='dashboard.php'</script>";  
      }
      else
      {
        echo "<script>alert('Invalid cemail or password or admin not allowed');</script>";
        echo "<script>window.location.href='customerlogin.php'</script>";  
          }
   }
}
?>