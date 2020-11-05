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
    <th><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai1&id=$user[id]><center>Informasi Pegawai</center></a>";?></th>
    <th><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai2&id=$user[id]><center>Riwayat Absensi</center></a>";?></th>
    <th style="background: #fff"><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai3&id=$user[id]><center>Edit Informasi</center></a>";?></th>
  </tr>
</thead>
</table>
<br>
<?php
$data=mysqli_fetch_array(mysqli_query($koneksi,"select*from data_karyawan where name='$user[name]'"));?>
<form action="perintah/tambah_pegawai.php?aksi=edit" method="post" enctype="multipart/form-data"> 
<table width="100%px" cellspacing="0" cellpadding="10">
  <input type="hidden" name="id" value="<?php echo $id['id']; ?>">
<thead>
  <tr>
    <th style="padding-left: 30px"> Edit Informasi <?php echo $user['name']; ?></th>
  </tr>
  <tr>
    <td>Nama<br><br><input type="text" class="search2" size="70" name="nama" value="<?php echo $data['name']; ?>"></td>
  </tr>
  <tr>
    <td>Posisi<br><br><input type="text" class="search2" size="70" name="posisi" value="<?php echo $data['position']; ?>"></td>
  </tr>
  <tr>
    <td>Umur<br><br><input type="text" class="search2" size="70" name="umur" value="<?php echo $data['age']; ?>"></td>
  </tr>
  <tr>
    <td>Mulai Kerja (dd/mm/yyy)<br><br><input type="text" class="search2" size="70" name="start_date" value="<?php echo $data['start_date']; ?>"></td>
  </tr>
  <tr>
    <td>Upah<br><br><input type="text" class="search2" size="70" name="upah" value="<?php echo $data['salary']; ?>"></td>
  </tr>
  <tr>
    <td>Email<br><br><input type="text" class="search2" size="70" name="email" value="<?php echo $data['email']; ?>"></td>
  </tr>
  <tr>
    <td>Handphone<br><br><input type="text" class="search2" size="70" name="hp" value="<?php echo $data['handphone']; ?>"></td>
  </tr>
  <tr>
    <td>NIK<br><br><input type="text" class="search2" size="70" name="nik" value="<?php echo $data['nik']; ?>"></td>
  </tr>
  <tr>
    <td>Uploud Foto Diri<br><br><input type="file" class="button4" name="gambar"></td>
  </tr>
  <tr>
    <td>Tentang Pegawai (*Gunakan tag < br > untuk baris baru)<br><br><textarea name="tentang" style="width:100%;height:100px;"><?php echo $data['tentang']; ?></textarea><br><br>
    <input type="submit" name="submit" value="SIMPAN" class="button2"></td>
  </tr>
</thead>
</table>
</div>