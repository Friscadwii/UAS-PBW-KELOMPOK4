<?php
  session_start();
  include 'connection.php';
  if($_SESSION['log'] != true){
    echo '<script>window.location="login.php"</script>';
  }

  $produk = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = '".$_GET['idp']."' ");

  if(mysqli_num_rows($produk) == 0){
    echo '<script>window.location="produk.php"</script>';
  }

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
      <section class="jumbotroon pad" id="sewa" style="padding-top: 5rem; padding-bottom: 5rem;">
        <div class="card mx-auto" style="width: 60rem">
          <h3 class="card-header text-center fw-bolder">Edit Data Produk</h3>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="namap" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                  <input type="text" name="namap" class="form-control" id="namap" value="<?php echo $p->nama_produk?>" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                  <select name="kategori" class="form-control" id="kategori">
                    <option value="">--Pilih--</option>
                      <?php
                        $kategori = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                        while($r = mysqli_fetch_array($kategori)){
                      ?> 
                        <option value="<?php echo $r['id_kategori'] ?>" 
                          <?php echo ($r['id_kategori'] == $p->id_kategori)? 'selected':''; ?>>
                          <?php echo $r['kategori'] ?>
                        </option>
                      <?php } ?>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                  <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $p->harga?>" required />
                </div>
              </div>
              <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select name="status" id="status" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="1" <?php echo ($p->status == 1)? 'selected':''; ?>>Aktif</option>
                    <option value="0" <?php echo ($p->status == 0)? 'selected':''; ?>>Tidak Aktif</option>
                  </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                  <img src="img/<?php echo $p->foto ?>" width="200px">
                  <input type="hidden" name="foto" value="<?php echo $p->foto ?>">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-10 ms-auto ">
                  <input type="file" name="gambar" class="form-control" id="gambar"/>
                </div>
              </div>
              <div class="row mb-3" style="padding-bottom: 2rem;">
                <label for="desk" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea name="desk" class="form-control" id="desk" required><?php echo $p->desk?></textarea>
                </div>
              </div>
              <button type="submit" name="tambah" class="btn btn-primary">Edit</button>
            </form>
            <?php
              if(isset($_POST['tambah'])){
                //data imputan dari form
                $nama      = $_POST['namap'];
                $kategori  = $_POST['kategori'];
                $harga     = $_POST['harga'];
                $status    = $_POST['status'];
                $foto      = $_POST['foto'];
                $desk      = $_POST['desk'];

                //data gambar yang baru
                $filename  = $_FILES['gambar']['name'];
                $tmp_name  = $_FILES['gambar']['tmp_name'];

                //jika admin ganti gambar
                if($filename != ''){
                  $type1     = explode('.',$filename);
                  $type2     = $type1[1];

                  $newname   = 'produk'.time().'.'.$type2;

                  //menampung data format file yang diizinkan
                  $tipe_diizinkan = array('jpg','jpeg','png','gif','jfif');

                  if(!in_array($type2, $tipe_diizinkan)){
                    //jika format file tidak sesuai array tipe maka tidak diizinkan
                    echo '<script>alert("Format file tidak diizinkan")</script>';
                  }else{
                    unlink('./img/' .$foto);
                    move_uploaded_file($tmp_name, './img/' .$newname);
                    $namagambar = $newname;
                  }
                }else{
                  //jika admin tidak ganti gambar
                  $namagambar = $foto;
                }

                //quary update data produk
                $update = mysqli_query($koneksi, "UPDATE produk SET 
                  id_kategori = '".$kategori."',
                  nama_produk = '".$nama."',
                  harga       = '".$harga."',
                  status      = '".$status."',
                  foto        = '".$namagambar."',
                  desk        = '".$desk."'
                  WHERE id_produk = '".$p->id_produk."' ");
                      
                if($update){
                  echo '<script>alert("Produk berhasil di edit")</script>';
                  echo '<script>window.location="produk.php"</script>';
                }else{
                  echo 'Produk gagal di edit' .mysqli_error($koneksi);
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