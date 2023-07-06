<?php
include 'connection.php';

session_start();

if (isset($_SESSION['login'])) {
    header('location:home-user.php');
}

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM login WHERE user ='$user'";
    $result = mysqli_query($koneksi, $query);
    $num = mysqli_num_rows($result);

    if ($num===1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['pass'])) {
            $_SESSION['login'] = true;
            header('location:home-user.php');
            exit;
        }
    }
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
                <form class="card-body p-lg-5" action="home-user.php" method="POST">
                        <div class="text-center">
                            <h2 class="text-center text-dark mt-5 fw-bolder" style="padding-bottom: 3rem;">Login Form</h2>
                        </div>
                        <div class="mb-3">
                            <label for="user" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                aria-describedby="emailHelp" placeholder="Username" />
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                aria-describedby="emailHelp" placeholder="password" />
                        </div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-secondary px-5 mb-5 w-100">Login</button>
                        <p>Belum mempunyai akun? <a href="regist.php">Registrasi disini.</a></p>
                        </div>
                    </form>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    
    <script src = "js/scripts.js" >
    </script>
</body>

</html>
