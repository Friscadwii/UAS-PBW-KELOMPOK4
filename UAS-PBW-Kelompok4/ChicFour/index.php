<?php
    include 'connection.php';

    session_start();

    if($_SESSION['log'] != true){
        echo '<script>window.location="login.php"</script>';
    }
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
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg">
      <a href="#" class="navbar-logo"> Chic<span>Four</span>.</a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="kategori.php">Kategori</a>
        <a href="produk.php">Produk</a>
        <a href="home.php"> Sebagai Pembeli</a>
      </div>
      <form class="d-flex ms-auto" action="">
      <a class="nav-link" href="profile.php">
            <i data-feather="user"></i>
              <?php echo $_SESSION['global']->username?></a>
              <a href="logout.php" class="mb-lg-0 btn btn-outline-light" style="margin-left: 10px;">
                <i data-feather="log-out"></i>
            </a>     
    </a>              
  </form>

    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="home" id="home">
      <div class="container-md content">
        <span>Selamat Datang</span>
        <h3>Chic<span>Four</span> -`⚘´-</h3>
        <p>
          ChicFour adalah sebuah platform atau website yang menyediakan berbagai jenis pakaian dan aksesori fashion yang dapat dibeli secara online. 
          Melalui toko baju online, pengguna dapat menjelajahi katalog produk yang luas, 
          memilih pakaian yang diinginkan, dan melakukan pembelian dengan mudah melalui proses transaksi online.
        </p>
        <a href="produk.php" class="btn">Belanja Sekarang</a>
      </div>
      <div class="image">
        <img src="img/cover.png" alt="" class="toko" />

      </div>
    </section>

    <!-- Section -->
    <section class="blogs" id="blogs">
    <div class="heading">
        <span>Produk</span>
        <h3>Silahkan Belanja</h3>
    </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE status = 1 ORDER BY id_produk
                    DESC LIMIT 8");
                    if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
                ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="img/<?php echo $p['foto'] ?>" height="250px"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h6 class="fw-bolder"><?php echo substr($p['nama_produk'], 0, 30) ?></h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-danger card-price">Rp. <?php echo number_format($p['harga']) ?></div>
                            <div class="card-actions">
                            <a class="btn btn-outline-dark" href="edit-produk.php?idp=<?php echo $p['id_produk']?>">Edit</a>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <?php }}else{ ?>
                    <p class="align-middle text-center">Produk Tidak Ada</p>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Akhir Section -->

  
    <!-- footer section starts  -->

    <section class="footer">
      <div class="credit">
        <p>Created by <a href="">Kelompok 4.</a>. | &copy; 2023.</p>
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