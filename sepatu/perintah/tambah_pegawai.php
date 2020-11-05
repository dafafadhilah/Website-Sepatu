<?php
include"../pengaturan/koneksi.php";
error_reporting(0);

$nama=$_POST['nama'];
$posisi=$_POST['posisi'];
$umur=$_POST['umur'];
$gambar=$_FILES['gambar']['name'];
$start_date=$_POST['start_date'];
$sumber_gambar=$_FILES['gambar']['tmp_name'];
$upah=$_POST['upah'];
$email=$_POST['email'];
$hp=$_POST['hp'];
$nik=$_POST['nik'];
$password=md5($_POST['password']);
$tentang=$_POST['tentang'];
$level="Karyawan";

$aksi=$_GET['aksi'];
if($aksi=="tambah"){
$simpan=mysqli_query($koneksi,"insert into data_karyawan(name,position,age,start_date,salary,email,handphone,nik,tentang,image_name) values('$nama','$posisi','$umur','$start_date','$upah','$email','$hp','$nik','$tentang','$gambar')");
$simpan2=mysqli_query($koneksi,"insert into users_karyawan(nik,password,level) values('$nik','$password','$level')");
$simpan3=mysqli_query($koneksi,"insert into absensi_karyawan(nama,absen,hadir,tidak_hadir,izin) values('$nama','0','0','0','0')");
move_uploaded_file($sumber_gambar,"../gambar/".$gambar); // dipindahkan dari sumber ke folder gambar di server dengan nama yg sama seperti nama aslinya
if($simpan)
echo "<script>
     alert('Data Berhasil Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=datapegawai'>"; //redirect ke index.php dg cara naik 1 folder
else
echo "<script>
     alert('Data Gagal Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=datapegawai'>"; //redirect ke index.php?tampilan=daftar dg cara naik 1 folder

}else if($aksi=="hapus")
{
	$id=$_GET['id'];
	$user=mysqli_fetch_array(mysqli_query($koneksi,"select*from data_karyawan where id='$id'"));
	$nik=$user['nik'];
     $nama=$user['name'];
	$gambar=mysqli_fetch_array(mysqli_query($koneksi,"select image_name from data_karyawan where id='$id'"));
	unlink('../gambar/'.$gambar['image_name']);  //menghapus file gambar di folder gambar
	$hapus=mysqli_query($koneksi,"delete from data_karyawan where id='$id'");
	$hapus2=mysqli_query($koneksi,"delete from users_karyawan where nik='$nik'");
     $hapus3=mysqli_query($koneksi,"delete from absensi_karyawan where nama='$nama'");
	if($hapus)
		echo "<script>
     alert('Data Berhasil Dihapus!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=datapegawai'>";
	else
		echo "<script>
     alert('Data Gagal Dihapus!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=datapegawai'>";
}else if($aksi=="edit")
{
$id=$_POST['id'];

     if(empty($gambar)) // kalo gambarnya gak dipilih/ gak dirubah

     {

          $simpan=mysqli_query($koneksi,"update data_karyawan set name='$nama',position='$posisi',age='$umur',start_date='$start_date',salary='$upah',email='$email',handphone='$hp',nik='$nik',tentang='$tentang' where id='$id'");
     }
     else 
     {
          $pegawai=mysqli_fetch_array(mysqli_query($koneksi,"select gambar from data_karyawan where id ='$id'"));
          unlink('../gambar/'.$pegawai['image_name']);  //menghapus file gambar di folder gambar
          $simpan=mysqli_query($koneksi,"update data_karyawan set name='$nama',position='$posisi',age='$umur',start_date='$start_date',salary='$upah',email='$email',handphone='$hp',nik='$nik',tentang='$tentang', image_name='$gambar' where id='$id'");
          move_uploaded_file($sumber_gambar,"../gambar/".$gambar); 
          }
          if($simpan)
          echo "<script>
     alert('Data Berhasil Diubah!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=lihat_pegawai3&id=$id[id]'>";
     else
          echo "<script>
     alert('Data Gagal Diubah!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=lihat_pegawai3&id=$id[id]'>";
}
?>