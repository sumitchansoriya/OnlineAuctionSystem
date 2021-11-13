<?php
include_once 'form/db.php';
 session_start();

$email= $_SESSION['email'];

$result = mysqli_query($con,"SELECT * FROM seller where email='$email' ");
?>
   

<?php

if(isset($_POST['submit'])){
    //getting text data from the fields
    $email=$_POST['email'];
	  $catNames=$_POST['catNames'];
    $pname=$_POST['pname'];
	  $pdes=$_POST['pdes'];
    $bamount=$_POST['bamount'];
	  $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    //getting image from the field
    $pro_image = $_FILES['pro_image']['name'];
    $pro_image_tmp = $_FILES['pro_image']['tmp_name'];

    move_uploaded_file($pro_image_tmp,"../product_images/$pro_image");

    $insert_product = "insert into product (email,catNames,pname,pdes,bamount,sdate,edate,pro_image) 
                  VALUES ('$email','$catNames','$pname','$pdes','$bamount','$sdate','$edate','$pro_image')";
    $insert_pro = mysqli_query($con, $insert_product);
  
  echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Record Modified Successfully')
  window.location.href='viewproducts.php';
  </SCRIPT>");
  }
else{
          echo "Something went wrong!";
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
          
          <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Seller Email</label>
                  <input type="text" name="email" value="<?php echo $row["email"]; ?>" class="form-control form-control-lg" placeholder="Enter Category Name..." class="medium" readonly/>
                </div>

                <div class="form-group">
                  <label>Select Category</label>
                  <select name="catNames" class="form-control form-control-lg" onChange="getSubcat(this.value);"  required>
                    <option value="">Select Category</option> 
                    <?php $query=mysqli_query($con,"select * from category  where email='$email'");
                    while($row=mysqli_fetch_array($query))
                    {?>

                    <option value="<?php echo $row['catNames'];?>"><?php echo $row['catNames'];?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="pname"  class="form-control form-control-lg" placeholder="Enter Product Name..." class="medium" required/>
                </div>

                <div class="form-group">
                  <label>Product Description</label>
                  <textarea class="form-control form-control-lg" name="pdes" placeholder="Enter Product Details..." ></textarea>
                </div>

                <div class="form-group">
                  <label>Product Bidding Amount</label>
                  <input type="number" name="bamount"  class="form-control form-control-lg" placeholder="Enter Bidding Amount..." class="medium" required/>
                </div>

                <div class="form-group">
                  <label>Bidding Start Date</label>
                  <input type="date" name="sdate"  class="form-control form-control-lg"  class="medium" required/>
                </div>

                <div class="form-group">
                  <label>Bidding End Date</label>
                  <input type="date" name="edate"  class="form-control form-control-lg"  class="medium" required/>
                </div>

                <div class="form-group">
                  <label>Product Image</label>
                  <input type="file" name="pro_image" id="productimage1" value="" class="form-control form-control-lg" required>
                </div>

              <div class="mt-3">
                  <input type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" Value="Submiit" />
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

