<h1>Sonix Shoes</h1><br>
<hr>
Dashboard > Tambah Pegawai
<br><br>
<table width="1000px" border="1" cellspacing="0" cellpadding="10">
<thead>
  <tr>
    <th>Pengaturan Absensi</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>

    	<form action="perintah/tambah_pegawai.php?aksi=tambah" method="post" enctype="multipart/form-data">	
    	<table width="100%" cellspacing="0" cellpadding="10">
  <tr>
  	<td>Nama<br><br><input type="text" class="search2" size="70" name="nama" required></td>
  </tr>
  <tr>
  	<td>Posisi<br><br><input type="text" class="search2" size="70" name="posisi" required></td>
  </tr>
  <tr>
  	<td>Umur<br><br><input type="text" class="search2" size="70" name="umur" required></td>
  </tr>
  <tr>
  	<td>Mulai Kerja (dd/mm/yyy)<br><br><input type="text" class="search2" size="70" name="start_date" required></td>
  </tr>
  <tr>
  	<td>Upah<br><br><input type="text" class="search2" size="70" name="upah" required></td>
  </tr>
  <tr>
  	<td>Email<br><br><input type="text" class="search2" size="70" name="email" required></td>
  </tr>
  <tr>
  	<td>Handphone<br><br><input type="text" class="search2" size="70" name="hp" required></td>
  </tr>
  <tr>
  	<td>NIK<br><br><input type="text" class="search2" size="70" name="nik" required></td>
  </tr>
  <tr>
  	<td>Kata Sandi<br><br><input type="text" class="search2" size="70" name="password" required></td>
  </tr>
  <tr>
  	<td>Uploud Foto Diri<br><br><input type="file" class="button4" name="gambar" required></td>
  </tr>
  <tr>
  	<td>Tentang Pegawai (*Gunakan tag < br > untuk baris baru)<br><br><textarea name="tentang" style="width:100%;height:100px;" required></textarea></td>
  </tr>
</table>
<br>
<input type="submit" name="submit" value="SIMPAN" class="button2">
</form>
<br>

	</td>
  </tr>
</tbody>
</table>