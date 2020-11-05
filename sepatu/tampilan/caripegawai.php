<table>
	<tr>
<?php
$kolom=3;
$i = 0;
include"pengaturan/koneksi.php";
$nama=$_POST['nama'];
$query=mysqli_query($koneksi,"select*from data_karyawan where nama like '%$nama%'");
while ($pegawai=mysqli_fetch_array($query)){
	if ($i>=$kolom) {
		echo "<tr></tr>";
		$i=0;
	}
	$i++;

	echo "<td align='center'><br><a href='halaman_admin.php?tampilan=datapegawai&id=$pegawai[nama]'><br>
	</a><br></td>";
}

?>
	</tr>	
</table>