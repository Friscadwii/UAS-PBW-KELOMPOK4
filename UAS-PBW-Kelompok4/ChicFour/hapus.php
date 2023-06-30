<?php

    include 'connection.php';

    //HAPUS KATEGORI
    if(isset($_GET['idk'])){
        $delete  = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '".$_GET['idk']."' ");
        echo '<script>window.location="kategori.php"</script>';
    }

    //HAPUS PRODUK
    if(isset($_GET['idp'])){
        $produk = mysqli_query($koneksi, "SELECT foto FROM produk WHERE id_produk = '".$_GET['idp']."' ");
        $p = mysqli_fetch_object($produk);

        unlink('./img/'.$p->foto);

        $delete= mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk = '".$_GET['idp']."' ");
        echo '<script>window.location="produk.php"</script>';
    }

?>