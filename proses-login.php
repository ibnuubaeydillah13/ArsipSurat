<?php

    //memulai session id
    session_start();
    
    //menghubungkan file login & ddb
    include 'login.php';
    include 'includes/db.php';

    //membuat deklarasi variable
    $eml = $_POST ['email'];
    $pwd = $_POST ['password'];

    //
    $sql = "SELECT * FROM user WHERE email='$eml'";
    $qry = mysqli_query($conn, $sql);
    $rows = mysqli_fetch_array($qry);

    if ($eml && $pwd) {

        $_SESSION['user_id']=$rows['user_id'];
        $_SESSION['nama']=$rows['nama'];
        $_SESSION['email']=$rows['email'];
        $_SESSION['level']=$rows['level'];

       

    } else {
        $pesan = "Login gagal, silakan coba lagi";
    }
    


    // if ($eml = ['email'] AND $pwd = ['password']) {

    //     $_SESSION ['user_id'] = $rows ['user_id'];
    //     $_SESSION ['nama'] = $rows ['nama'];
    //     $_SESSION ['email'] = $rows ['email'];
    //     $_SESSION ['level'] = $rows ['level'];
    //     $pesan = "Login berhasil!";

    // } else {
    //     $pesan = "Login gagal, silakan coba lagi!";
    // }
    

?>

<script> 
    alert('<?php echo $pesan; ?>');
    location:'auth/index.php';
</script>