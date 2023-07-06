<?php
  session_start();
  include 'connection.php';
  if($_SESSION['log'] != true){
    echo '<script>window.location="login.php"</script>';
  }

  $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin = '".$_SESSION['id']."'");
  $d = mysqli_fetch_object($query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS PBW - Web ChicFour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

    <!-- font-->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Monoton&family=Poppins:wght@100;300;400;700&family=Shrikhand&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--Style-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>


  <!-- Navbar Start -->

  <nav class="navbar navbar-expand-lg">
      <a href="#" class="navbar-logo"> Chic<span>Four</span>.</a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="kategori.php">Kategori</a>
        <a href="produk.php">Produk</a>
        <a href="home.php">Sebagai Pembeli</a>
      </div>

      <form class="d-flex ms-auto" action="">
      <a href="profile.php" class="nav-link mb-lg-0 btn btn-outline-light text-white" style="margin-left: 10px;">
          <i data-feather="user"></i><?php echo $_SESSION['global']->username?></a>
      <a href="logout.php" class="mb-lg-0 btn btn-outline-light" style="margin-left: 10px;">
          <i data-feather="log-out"></i></a>     
    </a>              
  </form>
    </nav>
    <!-- Navbar End -->

  <!-- Jumbotron -->
  <section class="jumbotroon pad" id="sewa" style="padding-top: 5rem; padding-bottom: 5rem;">
        <div class="card mx-auto" style="width: 60rem">
          <h3 class="card-header text-center fw-bolder">Profile</h3>
          <div class="card-body">
            <form action="" method="POST">
              <div class="row mb-3">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $d->nama_lengkap ?>" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="username" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" name="username" class="form-control" id="username" value="<?php echo $d->username ?>" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-sm-3 col-form-label">E-mail</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" value="<?php echo $d->email ?>" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="no" class="col-sm-3 col-form-label">No Telp</label>
                <div class="col-sm-9">
                  <input type="text" name="no" class="form-control" id="no" value="<?php echo $d->no ?>" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <input name="alamat" class="form-control" id="alamat" value="<?php echo $d->alamat ?>" required />
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
            <?php
              if(isset($_POST['submit'])){
                  $nama      = ucwords($_POST['nama']);
                  $username  = $_POST['username'];
                  $email     = $_POST['email'];
                  $no        = $_POST['no'];
                  $alamat    = ucwords($_POST['alamat']);

                  $update    = mysqli_query($koneksi, "UPDATE admin SET
                      nama_lengkap  = '".$nama."',
                      username      = '".$username."',
                      email         = '".$email."',
                      no            = '".$no."',
                      alamat        = '".$alamat."'
                      WHERE id_admin= '".$d->id_admin."' ");
                  if ($update){
                      echo '<script>alert("Update Berhasil")</script>';
                      echo '<script>window.location="profile.php"</script>';
                  }else{
                      echo '<script>alert("Update Gagal")</script>';
                  }
              }
            ?>
          </div>
        </div>
      </section>
      <!-- Akhir Jumbotron-->


    <!-- footer section starts  -->

    <section class="footer">
      <div class="credit">
        <p>Created by <a href="">Kelompok 4</a>. | &copy; 2023.</p>
      </div>
    </section>

    <!-- footer section ends -->

    <!-- Icons -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="script.js"></script>
  </body>
</html>
