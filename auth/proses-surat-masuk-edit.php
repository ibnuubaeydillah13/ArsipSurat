    <?php

    $con = mysqli_connect('localhost','root','','arsipsurat');
    $id            = $_POST['id'];
    $tanggal_surat = $_POST['tanggal_surat'];
    $no_surat      = $_POST['no_surat'];
    $nama_surat    = $_POST['nama_surat'];
    $konek         = mysqli_query($con, "UPDATE surat SET tanggal_surat='$tanggal_surat', no_surat='$no_surat', nama_surat='$nama_surat' WHERE id ='$id'");
    
    if ($konek) {
        echo 'alert("Data berhasil di update")';
        header('location:surat-masuk.php');
    }else {
        echo "Data tidak berhasil di update";

    }  
    
?>