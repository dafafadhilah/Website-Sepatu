<?php
include"../pengaturan/koneksi.php";
error_reporting(0);

$pegawai=$_POST['pegawai'];
$absen=$_POST['absen'];
$jumlah=$_POST['jumlah'];
$alasan=$_POST['alasan']; 

if ($absen == "Tidak Hadir"){
	$simpan=mysqli_query($koneksi,"insert into alasan_karyawan(nama,alasan,tanggal) values('$pegawai','$alasan',now())");
	$absensi=mysqli_fetch_array(mysqli_query($koneksi,"select*from absensi_karyawan where nama='$pegawai'"));
	$tidak_hadir=$absensi['tidak_hadir'];
	$jml=$jumlah+$tidak_hadir;
	$simpan2=mysqli_query($koneksi,"update absensi_karyawan set tidak_hadir='$jml' where nama='$pegawai'");
	if($simpan)
	echo "<script>
     alert('Alasan Absen Berhasil Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=absensipegawai'>"; //redirect ke index.php dg cara naik 1 folder
	else
	echo "<script>
     alert('Alasan Absen Gagal Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=absensipegawai'>"; //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
} else if ($absen == "Izin"){
	$absensi=mysqli_fetch_array(mysqli_query($koneksi,"select*from absensi_karyawan where nama='$pegawai'"));
	$izin=$absensi['izin'];
	$jml=$jumlah+$izin;
	$simpan=mysqli_query($koneksi,"insert into alasan_karyawan(nama,alasan,tanggal) values('$pegawai','$alasan',now())");
	$simpan2=mysqli_query($koneksi,"update absensi_karyawan set izin='$jml' where nama='$pegawai'");
	if($simpan)
	echo "<script>
     alert('Alasan Absen Berhasil Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=absensipegawai'>"; //redirect ke index.php dg cara naik 1 folder
	else
	echo "<script>
     alert('Alasan Absen Gagal Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=absensipegawai'>"; //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}
?>
