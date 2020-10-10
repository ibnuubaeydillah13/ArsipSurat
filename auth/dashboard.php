<?php


  //ob_start & ob_end_flush digunakan untuk membetulkan bug -->
  //Warning: Cannot modify header information - headers already sent by
  
  ob_start();

  //session_start->memulai session
  session_start();
  include 'includes/header.php';
  include 'includes/navbar.php';
  include '../_config/config.php';
  
  //mengecek apakah session tidak kosong
  if (!isset($_SESSION['username'])){
      header('Location:index.php');

  // echo "<div class='alert alert-success'> Login Berhasil</div> 
  // <script> document.location.href = 'index.php'</script>";
  }else {
  ?>

      <!-- PESAN ALERT LOGIN BERHASIL -->
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat datang <?php $con      = mysqli_connect('localhost','root','','arsipsurat');
              $usr      = $_SESSION['username'];
              $level    = @$_SESSION['level'];
              $get_user = $con->query("SELECT * FROM user WHERE username='$usr'");
              $data     = $get_user->fetch_array();
              $lvl      = $data['username'];

              if($lvl == 'admin'){
                echo "Admin";
              }elseif($lvl== 'pegawai'){
                echo "Pegawai";
              }
               ?>, </strong> Login anda berhasil!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- PENUTUP PESAN ALERT -->

    <?php
  }
    //  $usr   = $_SESSION['username'];
    // $result = $con->query("SELECT * FROM user WHERE username='$usr'");  
    // $data   = $result->fetch_array();
    // // $lvl = $data['level'];

    ob_end_flush();
  ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DASHBOARD -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Cetak</a>
  </div>

  <!-- Content Row -->
  <div class="row">
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total User</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

               <h4>Total User: 2 </h4>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Surat</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-file-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Surat Masuk</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-folder-open fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Surat Keluar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-folder fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- SCRIPT -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="js/sb-admin-2.min.js"></script>
  

<!-- PENUTUP SCRIPT -->

