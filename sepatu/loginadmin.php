  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<script>
      alert('Username dan Password Tidak Sesuai !');
      </script>";
    }
  }
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sonix Shoes - Login</title>
    <link rel="icon" href="gambar/beritafast2.png">
</head>

<body>
<link rel="stylesheet" href="aset/style1.css">

<div align="center" style=" margin-top:200px">
<form action="perintah/loginadmin.php" method="post">
<table width="30%" border="0" cellspacing="0" cellpadding="10" id="wrap">
  <tr>
    <td colspan="2"><h2><center>Login Sonix</center></h2></td>
    </tr>
  <tr>
    <td><input type="text" class="login" name="nik" placeholder="NIK" required></td>
  </tr>
  <tr>
    <td><input type="password" class="login" name="password" placeholder="Password" required></td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" class="button" value="LOGIN"></td>
  </tr>
</table>

</form>
</div>


</body>
</html>
