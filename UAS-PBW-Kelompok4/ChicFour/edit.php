<?php
  session_start();
  include 'connection.php';
  if($_SESSION['log'] != true){
    echo '<script>window.location="login.php"</script>';
  }

  $kategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori= '".$_GET['idk']."'");
  if (mysqli_num_rows($kategori) == 0){
    echo '<script>window.location="kategori.php"</script>';
  }

  $k = mysqli_fetch_object($kategori);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UAS PBW - Web ChicFour</title>
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

<body >
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">
      <a href="#" class="navbar-logo"> Chic<span>Four</span>.</a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="kategori.php">Kategori</a>
        <a href="produk.php">Produk</a>
        <a href="home.php">Sebagai Pembeli</a>
      </div>

      <form class="d-flex ms-auto" action="" method="POST">

        <ul class="navbar-nav mb-3 mb-lg-0">
            <a class="nav-link" href="profile.php">
            <i data-feather="user"></i>
              <?php echo $_SESSION['global']->username?></a>
            <a href="logout.php">Logout</a>               
        </ul>
      </form>
    </nav>
    <!-- Navbar End -->

    <!-- Jumbotron -->
    <section class="jumbotroon pad" id="sewa" style="padding-top: 5rem; padding-bottom: 16rem;">
      <div class="card mx-auto" style="width: 60rem">
        <h3 class="card-header text-center fw-bolder">Edit Kategori</h3>
        <div class="card-body">
          <form action="" method="POST">
            <div class="row mb-3">
              <label for="namak" class="col-sm-3 col-form-label">Edit Nama Kategori</label>
              <div class="col-sm-9">
                <input type="text" name="namak" class="form-control" id="namak" value="<?php echo $k->kategori ?>" required />
              </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Edit</button>
          </form>
          <?php
            if(isset($_POST['tambah'])){
              $nama = ucwords($_POST['namak']);

              $update = mysqli_query($koneksi, "UPDATE kategori SET
                kategori = '".$nama."'
                WHERE kategori = '".$k->kategori."' ");

              if($update){
                echo '<script>alert("Edit Data Berhasil")</script>';
                echo '<script>window.location="kategori.php"</script>';
              }else{
                echo '<script>alert("Edit Data Gagal")</script>', mysqli_error($koneksi);
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
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Javascript -->
      <script src="script.js"></script>
      <script> CKEDITOR.replace( 'desk' );</script>

</body>

</html>