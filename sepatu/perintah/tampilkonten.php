<?php

//file tampil konten, di-include-kan di index, jadi anggaplah posisi file ini, adalah posisi file index.php
$tampilan=$_GET['tampilan']; //menerima variabel (bernama tampilan) yang dikirim dari tampilan.
switch($tampilan){
	
	case "dashboard";
	include "tampilan/dashboard.php";
	break;

	case "edit1p";
	include "tampilan/edit1p.php";
	break;

	case "edit2p";
	include "tampilan/edit2p.php";
	break;

	case "datapegawai";
	include "tampilan/datapegawai.php";
	break;

	case "caripegawai";
	include "tampilan/caripegawai.php";
	break;

	case "tambahpegawai";
	include "tampilan/tambahpegawai.php";
	break;

	case "absensipegawai";
	include "tampilan/absensipegawai.php";
	break;

	case "pengaturan";
	include "tampilan/pengaturan.php";
	break;

	case "lihat_pegawai1";
	include "tampilan/edit1.php";
	break;

	case "lihat_pegawai2";
	include "tampilan/edit2.php";
	break;

	case "lihat_pegawai3";
	include "tampilan/edit3.php";
	break;

	default: //default halaman yang tampil
	include "tampilan/home.php";
}


?>