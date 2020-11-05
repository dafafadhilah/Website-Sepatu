<h1>Sonix Shoes</h1><br>
<hr>
Dashboard > Edit
<br><br>
<?php 
include"pengaturan/koneksi.php";
$user=mysqli_fetch_array(mysqli_query($koneksi,"select*from data_karyawan where nik='$nik'"));?>
<div id="left-column">
<table width="250px" cellspacing="0" cellpadding="10">
<thead>
	<tr>
		<th><center><br><img src="gambar/<?php echo $user['image_name']; ?>" width="140px"><br><br>
			<h2><?php echo $user['name']; ?></h2><br>
			<font size="2px"><?php echo $user['position']; ?></font><br>
			<font size="2px"><?php echo $user['nik']; ?></font>
			</center></th>
  	</tr>
  	<tr>
  		<th><font size="3px">Contact Information</font><br><br>
  			<font size="2px"><?php echo $user['email']; ?></font><br><br>
  			<font size="2px"><?php echo $user['handphone']; ?></font>
  		</th>
  	</tr>
</thead>
</table>
</div>
<div id="right-columnn">
    <table width="100%px" cellspacing="0" cellpadding="10">
<thead>
  <tr>
    <th style="background: #fff;"><?php echo "<a href=halaman_pegawai.php?tampilan=edit1p><center>Informasi Pegawai</center></a>";?></th>
    <th><?php echo "<a href=halaman_pegawai.php?tampilan=edit2p><center>Riwayat Absensi</center></a>";?></th>
  </tr>
</thead>
</table>
<br>
<?php
$absen=mysqli_fetch_array(mysqli_query($koneksi,"select*from absensi_karyawan where nama='$user[name]'"));
$setting=mysqli_fetch_array(mysqli_query($koneksi,"select*from setting_absensi where id='1'"));
$ab=$absen['absen']; 
?>
<table width="100%px" cellspacing="0" cellpadding="10">
<thead>
  <tr>
    <th style="padding-left: 30px"> Informasi <?php echo $user['name']; ?></th>
  </tr>
  <tr>
    <td style="padding-left: 30px"><br>Mulai Absen: <?php echo $setting['mulai_absen']; ?><br>
Selesai Absen: <?php echo $setting['selesai_absen']; ?><br>
Pegawai wajib absen satu hari sekali, jika tidak maka akan di anggap tidak hadir.<br><br><hr><br>
<b>
<?php
  if ($ab=="0") {
    echo "Belum Melakukan Absen.";
  } elseif ($ab=="1") {
    echo "Sudah Melakukan Absen. Jangan lupa ABSEN PULANG sebelum pulang.";
  } else {
    echo "Ada yg salah";
  }
?>
<br><br>Jumlah Absensi :<br><br>
      Hadir:<?php echo $absen['hadir']; ?><br>
      Tidak Hadir:<?php echo $absen['tidak_hadir']; ?><br>
      Izin:<?php echo $absen['izin']; ?><br><br></b>
<form action="perintah/pengaturan.php?aksi=absen" method="post">
  <input type="hidden" name="nama" value="<?php echo $user['name']; ?>">
<button type="submit" class="button2" name="absen">ABSEN HADIR</button></form>
<br>
<form action="perintah/pengaturan.php?aksi=absenpulang" method="post">
  <input type="hidden" name="nama" value="<?php echo $user['name']; ?>">
<button type="submit" class="button3" name="absen">ABSEN PULANG</button></form>
    </td>
  </tr>
</thead>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>