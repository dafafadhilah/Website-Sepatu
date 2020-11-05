<h1>Sonix Shoes</h1><br>
<hr>
Dashboard > Pengaturan Absensi
<br><br>
<table width="1000px" border="1" cellspacing="0" cellpadding="10">
<thead>
  <tr>
    <th colspan="2">Pengaturan Absensi</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td colspan="2">

    	<form action="perintah/pengaturan.php?aksi=simpan" method="post">	
    	<table width="100%" cellspacing="0" cellpadding="10">
  <tr>
  	<td colspan="2">Mulai Absen (*Contoh: 06:00)<br><br><input type="text" class="search2" size="70" name="mulai" required></td>
  </tr>
  <tr>
  	<td colspan="2">Selesai Absen (*Contoh: 08:00)<br><br><input type="text" class="search2" size="70" name="selesai" required></td>
  </tr>
</table>
<br>
<input type="submit" name="submit" value="SIMPAN" class="button2">
<br><br><hr>
</form>
<br>
<tr>
  <td>
    <form action="perintah/pengaturan.php?aksi=resetabsen" method="post">
    <h3>Reset data absen harian (*Semua pegawai)</h3><br>
    <button type="submit" class="button3" name="reset">RESET</button> *Lakukan sesaat sebelum jam masuk</form>
  </td>
  <td>
    <form action="perintah/pengaturan.php?aksi=aktifpulang" method="post">
    <h3>Aktifkan data absen pulang harian (*Semua Pegawai)</h3><br>
    <button type="submit" class="button2" name="aktif">AKTIFKAN</button> *Lakukan sesaat sebelum jam pulang</form>
  </td>
</tr>	
  </td>
  </tr>
</tbody>
</table>