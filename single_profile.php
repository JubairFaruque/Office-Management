<!DOCTYPE html>

<?php
include 'connection.php';
session_start();
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSM OFFICE MANAGEMENT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">CSM</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
	  <center><p><h1>Office Management</h1></p></center>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">	
			<div class="col-12">
				<!--<button class="btn btn-primary w-100" type="submit" name="logout"></button>-->
				<a href="logout.php">Log Out</a>
       		</div>
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
		<br><br><br><br><br><br><br><br><br><p><h4><b>Welcome</b></h4><h3><b>"<?php echo $_SESSION['username']; ?>"</b></h3><h4><b>To Your Profile.</b></h4></p>
    </ul>

  </aside><!-- End Sidebar-->

 <main id="main" class="main">

    <div class="pagetitle">
      
        <!--<br><br><br><br><br><br><br><br><br><center><p align="center"><h1><b style="color: red">Welcome To</b><br>Department of Computer Science and Mathematics<br>Faculty of Agricultural Engineering And Technology <br> Bangladesh Agricultural University, Mymensingh</h1></p></center><br><br><br><br><br><br><br><br>-->
		<br><br><br><br><br><br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col" style="color: black;">Office ID</th>
					<th scope="col" style="color: black;">Name</th>
					<th scope="col" style="color: black;">Designation</th>
					<th scope="col" style="color: black;">Mobile</th>
					<th scope="col" style="color: black;">E-mail</th>
					<th scope="col" style="color: black;">Present Address</th>
					<th scope="col" style="color: black;">Joining Date</th>
				</tr>
			</thead>
			<tbody>
	
            <?php
			if(isset($_GET['name'])){
			$name=$_GET['name'];
			$sql="Select * from profile where Name LIKE '%$name%'" ;
			$result=mysqli_query($con,$sql);
			if ($result)
			{
				while($row=mysqli_fetch_array($result)){
					$id=$row['Office_ID'];
					$name=$row['Name'];
					$designation=$row['Designation'];
					$mobile=$row['Mobile'];
					$mail=$row['Email'];
					$address=$row['Address'];
					$date=$row['Joining_Date'];
					echo '<tr>
					<th scope="row" style="color: black;">'.$id.'</th>
					<td style="color: black;">'.$name.'</td>
					<td style="color: black;">'.$designation.'</td>
					<td style="color: black;">'.$mobile.'</td>
					<td style="color: black;">'.$mail.'</td>
					<td style="color: black;">'.$address.'</td>
					<td style="color: black;">'.$date.'</td>
					<td style="color: black;">
					<button class="btn btn-primary" name="Update"><a href="Update_donor_info (2).php?updateDonor_ID='.$id.'" class="text-light">Update</a></button>
					<button class="btn btn-danger my-2" name="Delete"><a href="delete_donor_info.php?deleteDonor_ID='.$id.'" class="text-light">Delete</a></button>
					</td>
				</tr>';
				}
			 }
			}
			?>
				
			</tbody>
		</table>
	<br><br><br><br><br>
	</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Jubair and Fawzia</span></strong>. All Rights Reserved
    </div>
    <!--<div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ 
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> -->
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
