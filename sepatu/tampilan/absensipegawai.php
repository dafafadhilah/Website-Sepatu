<h1>Sonix Shoes</h1><br>
<hr>
Dashboard > Absensi Pegawai
<br><br>
<table width="1000px" cellspacing="0" cellpadding="10">
<thead>
	<tr>
		<th>Absensi Pegawai</th>
  	</tr>
</thead>

<?php  
	include"pengaturan/koneksi.php";
  	$tampil ="SELECT * FROM data_karyawan ORDER BY id DESC";
	$query=mysqli_query($koneksi, $tampil)or die("gagal");
?>

<tbody>
  <tr>
    <td>

    	<form action="perintah/absensipegawai.php" method="post">	
    	<table width="100%" cellspacing="0" cellpadding="10">
  <tr>
  	<td>Pilih nama pegawai dan kehadiran<br><br><select name="pegawai" class="button4" style="width: 207px" required>
<?php while ($row=mysqli_fetch_array($query))
  {
  $a=$row['name'];
  ?>
<option><?php echo $a; ?></option>
<?php } ?>
</select>
<select name="absen" style="width: 207px" class="button4" required>
<option>Tidak Hadir</option>
<option>Izin</option>
</select>
</select></td>
  </tr>
  <tr>
  	<td>Jumlah<br><br><input type="text" class="search2" size="100%" name="jumlah" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
  </tr>
  <tr>
  	<td>Alasan<br><br><textarea name="alasan" style="width:100%;height:100px;"></textarea></td>
  </tr>
</table>
<br>
<input type="submit" name="submit" value="SIMPAN" class="button2">
</tbody>

</table>