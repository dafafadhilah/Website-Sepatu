<?php
include"../pengaturan/koneksi.php";
error_reporting(0);

$absen=$_POST['mulai'];
$selesai=$_POST['selesai'];
$nama=$_POST['nama'];

$aksi=$_GET['aksi'];
if($aksi=="simpan")
{
$id=1;
$simpan=mysqli_query($koneksi,"update setting_absensi set mulai_absen='$absen', selesai_absen='$selesai' where id='$id'");
	if($simpan)
	echo "<script>
     alert('Jadwal Absen Berhasil Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=pengaturan'>"; //redirect ke index.php dg cara naik 1 folder
	else
	echo "<script>
     alert('Jadwal Absen Gagal Disimpan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=pengaturan'>"; //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}
elseif($aksi=="resetabsen")
{
$simpan=mysqli_query($koneksi,"update absensi_karyawan set absen='0'");
	if($simpan)
	echo "<script>
     alert('Absen Berhasil Direset!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=pengaturan'>"; //redirect ke index.php dg cara naik 1 folder
	else
	echo "<script>
     alert('Absen Gagal Direset!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=pengaturan'>"; //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}elseif($aksi=="absen")
{
$absensi=mysqli_fetch_array(mysqli_query($koneksi,"select*from absensi_karyawan where nama='$nama'"));
$absen=$absensi['absen'];
$h=$absensi['hadir'];
$hadir=$h+1;
     if ($absen=="0") {
          $simpan=mysqli_query($koneksi,"update absensi_karyawan set absen='1', hadir='$hadir' where nama='$nama'");
          echo "<script>
          alert('Anda Berhasil Absen!');
          </script>
          <meta http-equiv='refresh' content='0 url=../halaman_pegawai.php?tampilan=edit1p'>";
     } else if ($absen=="1") {
          echo "<script>
          alert('Anda Sudah Absen!');
          </script>
          <meta http-equiv='refresh' content='0 url=../halaman_pegawai.php?tampilan=edit1p'>";
     }
}elseif($aksi=="aktifpulang")
{
$simpan=mysqli_query($koneksi,"update absensi_karyawan set absen_pulang='0'");
     if($simpan)
     echo "<script>
     alert('Absen Pulang Berhasil Diaktifkan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=pengaturan'>"; //redirect ke index.php dg cara naik 1 folder
     else
     echo "<script>
     alert('Absen Pulang Gagal Diaktifkan!');
     </script>
     <meta http-equiv='refresh' content='0 url=../halaman_admin.php?tampilan=pengaturan'>"; //redirect ke index.php?tampilan=daftar dg cara naik 1 folder
}elseif($aksi=="absenpulang")
{
$absensi=mysqli_fetch_array(mysqli_query($koneksi,"select*from absensi_karyawan where nama='$nama'"));
$absenpulang=$absensi['absen_pulang'];
     if ($absenpulang=="0") {
          $simpan=mysqli_query($koneksi,"update absensi_karyawan set absen_pulang='1' where nama='$nama'");
          echo "<script>
          alert('Anda Berhasil Absen Pulang!');
          </script>
          <meta http-equiv='refresh' content='0 url=../halaman_pegawai.php?tampilan=edit1p'>";
     } else if ($absenpulang=="1") {
          echo "<script>
          alert('Belum Waktunya untuk pulang!');
          </script>
          <meta http-equiv='refresh' content='0 url=../halaman_pegawai.php?tampilan=edit1p'>";
     }
}