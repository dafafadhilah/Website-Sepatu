<?php
error_reporting(0);
session_start();
$nik=$_SESSION['nik'];

  if(empty($_SESSION['loginpegawai'])){ // klo belum login sebagai admin
echo "<script>
     alert('Tidak Berhak Akses!');
     </script>
     <meta http-equiv='refresh' content='0 url=loginadmin.php'>";
}
include"fungsi/fungsi.php";
include"pengaturan/koneksi.php";
include"pengaturan/waktu.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <title>Sonix Shoes - Halaman Pegawai</title>
    <link rel="icon" href="gambar/beritafast2.png">
  <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
  <link rel="stylesheet" type="text/css" href="aset/style.css"/> <!-- style css adalah file yg mengatur tampilan desain / layout -->
    <link rel="stylesheet" type="text/css" href="aset/fontawesome/css/font-awesome.css"/> <!-- style css adalah file yg mengatur tulisan berbentuk icon -->
    
     <!-- Example assets -->
       <link rel="stylesheet" type="text/css" href="aset/carousel_basic/jcarousel.basic.css">
      
      <script type="text/javascript" src="aset/jquery-2.1.4.js"></script>
       <script type="text/javascript" src="aset/carousel_basic/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="aset/carousel_basic/jcarousel.basic.js"></script>
    
    
    
</head>
<body>
  <div id="container">
    <div id="header">
      <img src="gambar/beritafast2.png" width="60px">
    </div>

    <div id="right-column">
    <?php
    //taruh skrip 5 halaman index.php 
    include "tampilan/menu.php";
    ?>  
    </div>

    <div id="content">
      
      <p>
        <?php
        //taruh skrip 6 halaman index.php
         include "perintah/tampilkonten.php";
          ?>
      </p>
    
      
    </div>

  <div id="footer">
    &copy; 2020 sonix
  </div>
  
</div>

</body>
</html>
