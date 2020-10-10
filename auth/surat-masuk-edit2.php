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
  <a href="surat-masuk.php" class="btn btn-danger">Kembali</a> 

</div>
<br>
<?php

    $id             = $_GET['id'];    
    $con            = mysqli_connect('localhost','root','','arsipsurat');
    $sql            = mysqli_query($con,"SELECT * FROM surat WHERE id='$id'");
    $rows           = mysqli_fetch_array($sql);

    // $con         = mysqli_connect('localhost','root','','arsipsurat');
    // $id          = $_GET['id'];
    // $sql         = "SELECT * FROM surat WHERE id='$id'";
    // $data        = mysqli_query($con, $sql);
    // while ($rows = mysqli_fetch_array($data)) {
?>
<!-- Begin Page Content -->
<form acion="proses-surat-masuk-edit.php?id=<?php echo $id; ?>"  method="POST">
<table class="table table-bordered">
<?php

     echo '
     <thead>
     <tr>
       <th scope="col">No</th>
       <th scope="col">Tanggal Surat</th>
       <th scrope="col">No Surat</th>
       <th scope="col">Nama Surat</th>
       <th scope="col">File</th>
       <th scope="col">Action</th>
     </tr>
    </thead>';
     
         echo '
         <tbody>
    <tr>
      <td><input type="hidden" name="id" value="'.$rows['id'].'">
      </td>  
      <td>
      <input type="text" name="tanggal_surat" class="form-control" placeholder="tanggal" value="'.$rows['tanggal_surat'].'"></input>
      </td>
      <td>
      <input type="text" name="name_surat" class="form-control" placeholder="no surat" value="'.$rows['no_surat'].'"></input>
      </td>
      <td>
      <input type"text" nama="nama_surat" class="form-control" placeholder="nama surat" value="'.$rows['nama_surat'].'"></input>
      </td> 
      <td>
      <input class="btn btn-light" type="file" value="file"></input>
      </td>
      <td>
      <input type="submit" value="Batal" class="btn btn-danger"></a>
      <input type="submit" value="Simpan" class="btn btn-success"></a>
      </td>
    </tr>
  </tbody>  
         ';
        //  $no++;

        ?>


</table>
</form>

<!-- SCRIPT -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/sb-admin-2.min.js"></script>
<!-- PENUTUP SCRIPT -->
