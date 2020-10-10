<?php
include '../_config/config.php';
include 'includes/header.php'; 
?>

<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-6 col-md-6">
<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<!-- Nested Row within Card Body -->
<div class="row">
<div class="col-lg-12">
<div class="p-5">
<div class="text-center">
<h1 class="h4 text-gray-900 mb-4">Silakan Login!</h1>
</div>

<form class="user" action="" method="POST">

<?php
    include '../_config/config.php';

    if(isset($_POST['login'])){

        $usr    = $_POST['username'];
        $pw     = $_POST['password'];
        
      
        $result = mysqli_query($con,"SELECT * FROM user WHERE username='$usr' AND password='$pw'");
        $cek    = $result->fetch_array();
        $rows   = $result->num_rows;

        if ($rows > 0) {
          session_start();
          $_SESSION['username'] = $cek['username'];
  
          // echo "document.location.href = 'dashboard.php'; div class='alert-success'>Login berhasil</div> ";
          // echo "<script> alert('Login Sukses'); document.location.href ='dashboard.php';</script>";
        
          // echo "<div class='alert alert-success'> Login Berhasil</div> 
          // <script> document.location.href = 'dashboard.php'</script>";
          header('Location: dashboard.php');
        }else {
          
          echo "<div class='alert alert-danger'>Username dan password tidak sesuai</div>";

        }
    }


        
?>
<div class="form-group">
<input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
</div>
<div class="form-group">
<input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" required>
</div>
<div class="form-group">
<input type="checkbox" id="show-password" class="form-checkbox"> Show password </input>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){  
   $('#show-password').click(function(){
    if($(this).is(':checked')){
     $('#password').attr('type','text');
    }else{
     $('#password').attr('type','password');
    }
   });
  });
 </script>
</div>
<button type="submit" name="login" class="btn btn-primary btn-user btn-block"> Login </button>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
