<h1>Sonix Shoes</h1><br>
<hr>
Dashboard > Edit
<br><br>
<?php 
include"pengaturan/koneksi.php";
$id=$_GET['id'];
$user=mysqli_fetch_array(mysqli_query($koneksi,"select*from data_karyawan where id='$id'"));?>
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
    <th style="background: #fff;"><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai1&id=$user[id]><center>Informasi Pegawai</center></a>";?></th>
    <th><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai2&id=$user[id]><center>Riwayat Absensi</center></a>";?></th>
    <th><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai3&id=$user[id]><center>Edit Informasi</center></a>";?></th>
  </tr>
</thead>
</table>
<br>
<?php
$absen=mysqli_fetch_array(mysqli_query($koneksi,"select*from absensi_karyawan where nama='$user[name]'"));?>
<table width="100%px" cellspacing="0" cellpadding="10">
<thead>
  <tr>
    <th style="padding-left: 30px"> Informasi <?php echo $user['name']; ?></th>
  </tr>
  <tr>
    <td style="padding-left: 30px"><br><?php echo $user['tentang']; ?>
      <br><br><hr><br>
      Jumlah Kehadiran :<br><br>
      Hadir:<?php echo $absen['hadir']; ?><br>
      Tidak Hadir:<?php echo $absen['tidak_hadir']; ?><br>
      Izin:<?php echo $absen['izin']; ?><br>
    </td>
  </tr>
</thead>
</table>
</div>