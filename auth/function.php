<?php

// $con                 = mysqli_connect('localhost','root','','arsipsurat');
// if(isset($_POST["simpan"])){
//     $temp  = "simpan/";
//     if(!file_exists($temp)){
//         mkdir($temp);

//         $file_upload = $_FILES['file_name']['temp_name'];
//         $file_name   = $_FILES['file_name']['name'];
//         $file_type   = $_FILES['file_name']['type'];

//         if(!empty($file_upload)){
//             $random   = rand(00000000, 99999999);
//             $file_ext = substr($file_name, strpos($file_name,'.'));
//             $file_ext = str_replace('.','',$file_ext);
//             $file_name = preg_replace("/\.[^.\s]{3,4}$/","", $file_name);
//             $new_file_name = $random.'.'.$file_ext;

//             move_uploaded_file($_FILES["file_upload"]["temp_name"], $temp.$new_file_name);
//             echo "<script>alert('berhasil di upload'); location:'surat-masuk.php'</script>";
//         }
//     }
// }


$con           = mysqli_connect('localhost','root','','arsipsurat');
$tanggal_surat = htmlspecialchars($_POST['tanggal_surat']);
$no_surat      = htmlspecialchars($_POST['no_surat']);
$nama_surat    = htmlspecialchars($_POST['nama_surat']);
$file          = "";



$konek         = mysqli_query($con, "INSERT INTO surat SET tanggal_surat='$tanggal_surat', no_surat='$no_surat', nama_surat='$nama_surat', nama_file='$file'");


if ($konek) {
    echo "<scipt>alert('Sukses menambahkan data');location=''";
    header('location:surat-masuk.php');
}else {
    echo "Data tidak berhasil di update";

}  

$id = $_GET['id'];
$delet = mysqli_query($con,"DELETE from surat WHERE id='$id'");
if ($delet) {
    header('location:surat-masuk.php');
}


?>

