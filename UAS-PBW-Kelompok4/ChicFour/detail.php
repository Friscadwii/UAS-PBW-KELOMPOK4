<?php
    error_reporting(0);
    include 'connection.php';
    $kontak = mysqli_query($koneksi, "SELECT email, no, alamat FROM admin
    WHERE id_admin = 1");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '".$_GET['idp']."'");
    $p = mysqli_fetch_object($produk);

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
        <a href="home.php">Sebagai Pembeli</a>
      </div>

      <form class="d-flex ms-auto" action="">
              <a href="logout.php" class="mb-lg-0 btn btn-outline-light" style="margin-left: 10px;">
                <i data-feather="log-out"></i>
            </a>     
    </a>              
  </form>
    </nav>
    <!-- Navbar End -->

    <!-- Produk Detail-->
    <section class="jumbotroon pad" style="padding-top: 5rem; padding-bottom: 5rem;">
      <div class="card mx-auto" style="width: 80rem">
        <div class="card-body" style="padding: 2rem;">
        <?php
            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori");
            if(mysqli_num_rows($kategori)){
             $k = mysqli_fetch_array($kategori);
            }
        ?>
        <form class="row ">
            <div class="col-6" style="padding: 2rem;">
                <img src="img/<?php echo $p->foto?>" class="img-fluid">
            </div>
            <div class="col-6" style="padding-top: 2rem;">
                <dl class="row fw-bolder">
                    <dt class="col-sm-2">Nama</dt>
                    <dd class="col-sm-10"><?php echo $p->nama_produk ?></dd>
                    <dt class="col-sm-2">Kategori</dt>
                    <dd class="col-sm-10"><?php echo $k['kategori'] ?></dd>
                    <dt class="col-sm-2">Harga</dt>
                    <dd class="col-sm-10 text-danger">Rp. <?php echo number_format($p->harga)  ?></dd>
                    <dt class="col-sm-2">Deskripsi</dt>
                    <dd class="col-sm-10 fw-normal" style="text-align: justify; line-height: 25px;"><?php echo $p->desk?></dd>
                    <dt class="col-sm-2">Pesan</dt>
                    <dd class="col-sm-10">
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $a->no ?>&text=Hallo Shopping, saya tertarik dengan produk Anda." 
                    target="_blank" style="text-decoration: none;">Hubungi Via Whatsapps</a>
                    </dd>
                </dl>
            </div>
        </form>
        </div>
      </div>
    </section>
    <!-- Akhir Produk Detail-->

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