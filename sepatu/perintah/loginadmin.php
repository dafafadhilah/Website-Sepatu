<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../pengaturan/koneksi.php';
 
// menangkap data yang dikirim dari form login
$nik = $_POST['nik'];
$password =md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from users_karyawan where nik='$nik' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
  $data = mysqli_fetch_assoc($login);
 
  // cek jika user login sebagai admin
  if($data['level']=="admin"){
 
    // buat session login dan username
    $_SESSION['nik'] = $nik;
    $_SESSION['level'] = "admin";
    $_SESSION['loginadmin']=1;
    $simpan=mysqli_query($koneksi,"insert into history_karyawan(nama,info,tanggal) values('Admin','Admin Telah Melakukan Login',now())");
    // alihkan ke halaman dashboard admin
    header("location:../halaman_admin.php?tampilan=dashboard");
 
  // cek jika user login sebagai pegawai
  }else if($data['level']=="Karyawan"){
    // buat session login dan username
    $_SESSION['nik'] = $nik;
    $_SESSION['level'] = "Karyawan";
    $_SESSION['loginpegawai']=1;
    $tampil="select * from data_karyawan where nik='$nik'";
    $query=mysqli_query($koneksi, $tampil)or die("gagal");
    $row=mysqli_fetch_array($query);
    $nama=$row['name'];
    $simpan=mysqli_query($koneksi,"insert into history_karyawan(nama,info,tanggal) values('$nama','$nama Telah Melakukan Login',now())");
    // alihkan ke halaman dashboard pegawai
    header("location:../halaman_pegawai.php?tampilan=edit1p");

  }else{
 
    // alihkan ke halaman login kembali
    header("location:../loginadmin.php?pesan=gagal");
  } 
}else{
  header("location:../loginadmin.php?pesan=gagal");
}
 
?>