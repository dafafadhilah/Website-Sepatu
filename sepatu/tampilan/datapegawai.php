<h1>Sonix Shoes</h1><br>
<hr>
Dashboard > Data Pegawai
<br><br>
<table width="1000px" border="1" cellspacing="0" cellpadding="10">
<thead>
  <tr>
    <th>Data Pegawai</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>

    	<table width="100%" border="1" cellspacing="0" cellpadding="10">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Posisi</th>
    <th>Usia</th>
    <th>Awal Kerja</th>
    <th>Upah</th>
    <th>Nik</th>
    <th>Opsi</th>
  </tr>
  <?php

	include"pengaturan/koneksi.php";
  	$tampil ="SELECT * FROM data_karyawan ORDER BY id DESC";
	$query=mysqli_query($koneksi, $tampil)or die("gagal");

    $no=1;
  while ($row=mysqli_fetch_array($query))
  {
  $a=$row['name'];
  $b=$row['position'];
  $c=$row['age'];
  $d=$row['start_date'];
  $e=$row['salary'];
  $f=$row['nik'];
  ?>
  <tr>
  	<td><?php echo $no++; ?></td>
    <td><?php echo $a; ?></td>
    <td><?php echo $b; ?></td>
    <td><?php echo $c; ?></td>
    <td><?php echo $d; ?></td>
    <td>Rp. <?php echo $e; ?></td>
    <td><?php echo $f; ?></td>
    <td colspan="2"><?php echo "<a href=halaman_admin.php?tampilan=lihat_pegawai1&id=$row[id]> <button class=button2> LIHAT </button></a>"; echo "<a href=perintah/tambah_pegawai.php?aksi=hapus&id=$row[id]> <button class=button3> HAPUS </button></a>"; ?></td>
  </tr>
<?php } ?>
</table>

	</td>
  </tr>
</tbody>
</table>