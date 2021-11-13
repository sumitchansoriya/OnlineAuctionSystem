<?php
include_once 'Seller/form/db.php';

$result = mysqli_query($con,"SELECT * FROM Auction ");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Online Auction</title>

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="#" class="navbar-brand">Online&nbsp;<span class="text-primary">Auction.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="login.php">login &nbsp;|&nbsp; Register</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Let's Bid Now</h1>
            <p class="text-lg text-grey mb-5">An online auction project is a system that holds online auctions for various products on a
              website and serves sellers and bidders accordingly.</p>
            <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="assets/img/images-removebg-preview.png" style="width:100%" alt="">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <center><h1>Our Products</h1></center>
      <hr>
      
      <div class="row">
      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                       
                    if($i%2==0)
                    $classname="even";
                    else
                    $classname="odd";
                    ?>
                
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
            <img  src='product_images/<?php echo $row["pro_image"];?>' width='120px' height='150px'>
            </div>
            <div class="body">
              <h5 class="text-secondary"><?php echo $row["pname"];?></h5>
              <p><?php echo $row["pdes"];?></p>
              <a href="customer/customerlogin.php" onClick="return confirm('First Login')" class="btn btn-primary">Bid Now</a>
            </div>
          </div>
        </div>
        <?php
                $i++;
                }
                ?>
       
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  

  

  <footer class="page-footer bg-image" style="background-image: url(assets/img/world_pattern.svg);">
    
      <p class="text-center" id="copyright">Copyright &copy; 2021. This template design and develop by <a href="undex.php" target="_blank">Online Auction System</a></p>
    
  </footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>
  
</body>
</html>