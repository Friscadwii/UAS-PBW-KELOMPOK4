<?php
  session_start();
  include 'connection.php';
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

    <!-- Jumbotron -->
    <section class="jumbotroon pad" id="sewa" style="padding-top: 5rem; padding-bottom: 1rem;">
      <div class="card mx-auto" style="width: 80rem">
        <h3 class="card-header text-center fw-bolder">Kategori</h3>
        <div class="card-body">
            <a class="btn btn-primary text-light" href="tambah.php">Tambah Kategori</a>
            <form style="padding-top: 2rem;">
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr class="text-center">
                        <th width="200px">No</th>
                        <th scope="col-8">Kategori</th>
                        <th width="300px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                            if(mysqli_num_rows($kategori) > 0){
                            while($row = mysqli_fetch_array($kategori)){
                        ?>    
                            <tr class="text-center">
                                <th scope="col-2" class="align-middle"><?php echo $no++ ?></th>
                                <td class="align-middle"><?php echo $row['kategori'] ?></td>
                                <td class="align-middle"><a class="btn btn-outline-danger" href="edit.php?idk=<?php echo $row['id_kategori']?>">Edit</a>
                                <a class="btn btn-danger text-light" href="hapus.php?idk=<?php echo $row['id_kategori']?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a></td>
                            </tr>

                        <?php }}else{ ?>
                        <tr>
                        <td colspan="8" class="align-middle text-center"><h3>Tidak ada data</h3></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </div>
      </div>
    </section>
    <!-- Akhir Jumbotron-->

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