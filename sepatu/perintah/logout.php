<?php
session_start(); //memulai membaca sesi
unset($_SESSION['nik']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['level']); //menghapus nilai sesi yang diregistrasi
unset($_SESSION['loginadmin']);
unset($_SESSION['loginpegawai']);
session_destroy(); //menghancurkan sesi
header('location:../loginadmin.php'); //mendirect ke index.php

?>