<?php
include 'connection.php';

if(isset($_POST['daftar'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];

    $query = mysqli_query($koneksi, "SELECT user FROM login WHERE user = '$user'");
    $num = mysqli_num_rows($query);

    if($pass !== $confirm_pass){
        echo "Password Tidak Sesuai!";
        return false;
    }

    //cek user
    if($num > 1){
        echo "Registrasi Berhasil";
    }else{
        echo mysqli_error($koneksi);
    }

    //enkripsi atau hashing pass
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_query($koneksi, "INSERT INTO login VALUES ('', '$user', '$pass')");
    header("location:login-user.php");
    return mysqli_affected_rows($koneksi);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href= "css/bootsrtap.min.css">
    <title>UAS PBW - Web ChicFour</title>
</head>
<body background="img/cover-baju.jpg" style="background-position: unset; background-repeat: no-repeat; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-5 bg-light bg-opacity-75">
                    <form class="card-body p-lg-5" action="login-user.php" method="POST" >
                        <div class="text-center">
                            <h2 class="text-center text-dark mt-5 fw-bolder" style="padding-bottom: 3rem;">Regist Form</h2>
                        </div>
                        <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" name= "pass" id="pass">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_pass" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" name= "confirm_pass" id="confirm_pass">
                        </div>
                        <div class="text-center"><button type="submit" name="daftar" class="btn btn-secondary px-5 mb-5 w-100">Daftar</button>
                        </div>
                    </form>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    
    <script src = "js/scripts.js" >
    </script>
</body>

</html>