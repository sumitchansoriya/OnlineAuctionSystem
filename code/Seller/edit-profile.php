<?php
include_once 'form/db.php';
 session_start();

$email= $_SESSION['email'];

$result = mysqli_query($con,"SELECT * FROM seller where email='$email' ");
?>
   

<?php

if(count($_POST)>0) {
  mysqli_query($con,"UPDATE seller set id='" . $_POST['id'] . "', username='" . $_POST['username'] . "', email='" . $_POST['email'] . "', cnum='" . $_POST['cnum'] . "', password='" . $_POST['password'] . "', address='" . $_POST['address'] . "'   WHERE id='" . $_POST['id'] . "'");
  echo "<script>window.location.href='dashboard.php'</script>";  
  }
    

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $get_pro = "select * from Seller where id='$id'";
    $run_pro = mysqli_query($con, $get_pro);
    $row = mysqli_fetch_array($run_pro);
    $id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $cnum = $row['cnum'];
    $password = $row['password'];
    $address = $row['address'];
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Auction</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
     <?php
      include_once 'include/header.php';
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    if($i%2==0)
                    $classname="even";
                    else
                    $classname="odd";
                    ?>
                      <h3 class="font-weight-bold">Welcome <?php echo $row["username"]; ?></h3>
                      
                  
                 
                </div>
                
              </div>
            </div>
          </div>
          <center><h1>Update Profile</h1></center>
          <form action="" method="POST"  class="pt-3">  
          
              <div class="form-group">
                  <label>Id</label>
                  <input type="text" name="id" value="<?php echo $id;?>"  class="form-control form-control-lg"  class="medium" readonly/>
                </div>

                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" name="username" value="<?php echo $username;?>"  class="form-control form-control-lg"  class="medium" required/>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $email;?>" class="form-control form-control-lg"  class="medium" required/>
                </div>
          
                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" name="cnum" value="<?php echo $cnum;?>"  class="form-control form-control-lg"  class="medium" required/>
                </div>

                

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" value="<?php echo $password;?>"  class="form-control form-control-lg"  class="medium" required/>
                </div>

                

                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address"  class="form-control form-control-lg" value="<?php echo $address;?>"  class="medium" required/>
                </div>

                

                

              <div class="mt-3">
              <input type="submit" value="Update" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="register"  id="submit" />
                </div>
            </form>
            <?php
                  $i++;
                  }
                  ?>
          
          
          
          
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

