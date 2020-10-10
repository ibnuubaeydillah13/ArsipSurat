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
  }else {

  ?>
  <?php
  }

    ob_end_flush();
  ?>

<div class="responsive">
  &nbsp
  <a href="surat-masuk.php" class="btn btn-danger">Kembali</a> 

</div>
<br>
<?php
    $con            = mysqli_connect('localhost','root','','arsipsurat');
    $id             = (isset($_GET['id']))?$_GET['id']:'';
    $sql            = mysqli_query($con,"SELECT * FROM surat WHERE  id='$id'");
    $data           = mysqli_fetch_array($sql);
   
    $id             = $data['id'];
    $tanggal_surat  = $data['tanggal_surat'];
    $no_surat       = $data['no_surat'];
    $nama_surat     = $data['nama_surat'];
    
?>


<!-- Begin Page Content -->
<table class="table table-bordered">
<form action="proses-surat-masuk-edit.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <ul>
        <td>
          <label for="tanggal_surat"> Tanggal Surat : </label>
          <input type="text" name="tanggal_surat" id="tanggal_surat" required
          value="<?php echo $tanggal_surat; ?>">
      </td>
    
        <td>
          <label for="no_surat">No Surat : </label>
          <input type="text" name="no_surat" id="no_surat" required
          value="<?php echo $no_surat; ?>">
        </td>
        <td>
          <label for="nama_surat">Nama Surat : </label>
          <input type="text"  name="nama_surat" id="nama_surat" require
          value="<?php echo $nama_surat; ?>">
        </td>
        <td>
          <label for="nama_surat">File : </label>
          <input type="file"  name="file" id="file" require
          value="">
        </td>
        <td>
      
        <a href="surat-masuk.php" class="btn btn-danger">Batal</a><br><br>
        <button class="btn btn-success" name="simpan" value="simpan">Simpan</button>

        </td>
      </ul>

</form>
</table>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/sb-admin-2.min.js"></script>
<!-- PENUTUP SCRIPT -->
