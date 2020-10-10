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


    <?php
  }
    //  $usr   = $_SESSION['username'];
    // $result = $con->query("SELECT * FROM user WHERE username='$usr'");  
    // $data   = $result->fetch_array();
    // // $lvl = $data['level'];

    ob_end_flush();
  ?>
<div class="responsive">
  &nbsp
  <a href="tambah-data-surat-masuk.php" class="btn btn-danger">Tambah Data</a> <br><br>
</div>
<!-- Begin Page Content -->
<table class="table table-bordered">

<?php
     $con      = mysqli_connect('localhost','root','','arsipsurat');
     $sql      = "SELECT id, no_surat, tanggal_surat, nama_surat,nama_file FROM surat";
     $data     = mysqli_query($con, $sql);
    //  $no = 1;
     
     if (!$data) {
         die ('SQL Error : '. mysqli_error($con));
     }

     echo '
     <thead>
     <tr>
       <th scope="col">No</th>
       <th scope="col">Tanggal Surat</th>
       <th scope="col">No Surat</th>
       <th scope="col">Nama Surat</th>
       <th scope="col">File</th>
       <th scope="col">Action</th>
     </tr>
    </thead>';
     while ($rows = mysqli_fetch_array($data)) {
         echo '
    <tbody>
    <tr>
      <td>'.$rows['id'].'</td> 
      <td>'.$rows['tanggal_surat'].'</td>
      <td>'.$rows['no_surat'].'</td>   
      <td>'.$rows['nama_surat'].'</td>                            
      <td>'.$rows['nama_file'].'</td>
      <td>
      <a href="surat-masuk-edit.php?id='.$rows['id'].'" class="btn btn-info">Edit</a> 
      <a href="php?id='.$rows['id'].'" class="btn btn-warning">Lihat</a>
      <a href="function.php?id='.$rows['id'].'" class="btn btn-danger">Hapus</a>  
      </td>
    </tr>
  </tbody>
         
         ';
        //  $no++;
                                                                                                                               
?>
  <?php
  }
  ?>
  
</table>

<!-- SCRIPT -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="js/sb-admin-2.min.js"></script>
  

