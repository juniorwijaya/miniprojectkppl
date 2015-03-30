<?php
include ('session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MakanApaYa</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header">
  <p><center><font face = "Cambria" color = "white">MakanApaYa</font></center></p>
  <p>&nbsp;</p>
</div>

<section>	
  <table width="130" cellpadding="1" cellspacing="1">
<tr>
  <td width="133" align="center" bgcolor="#55f631"><table width="1350" cellpadding="1" cellspacing="1">
    <tr>
      <td width="401" height="18" align="right" bgcolor="#55f631"><a href="beranda.php">Home</a></td>
      <td width="100" align="center" bgcolor="#55f631"><a href="akun_klien.php">Akun Klien</a></td>
      <td width="84" align="center" bgcolor="#55f631"><a href="akun_user.php">Akun User</a></td>
      <td width="108" align="center" bgcolor="#55f631"><a href="tempat_makan.php">Tempat Makan</a></td>
      <td width="79" align="center" bgcolor="#55f631"><a href="testimoni.php">Testimoni</a></td>
      <td width="577" bgcolor="#55f631"><form id="form1" name="form1" method="post" action="">
        <a href="setting.php">Setting </a>
      </form></td>
    </tr>
  </table></td>
</tr>
</table>

  <table width="1358" border="0" align="left">
    <tr style="text-align: center">
      <td width="75%" bgcolor="#0b6572" class="footer" style="font-style: normal; color: #FFF; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-weight: bolder;">Akun User</td>
    </tr>
    <tr>
      <td bgcolor="#00aac3" class="body" style="font-style: normal; color: #000000;"><p>

<?php
include('koneksi.php');
$query = "SELECT * FROM user";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)){
 $nama_user = stripslashes ($hasil['Nama']);
 //tampilkan berita
 echo "<br>Nama        : ".$nama_user."<br>";
}
?>
      &nbsp;</p></td>
    </tr>
  </table>
</section>

<footer class="footer">
<form action="" method="post" name="input">
  <input type="submit" name="button" id="button" value="Log Out" />
  </form>
<?php
if(isset($_POST['button'])){
unset ($_SESSION);
session_destroy();
echo "<h1>Anda sudah berhasil LOGOUT</h1>";
header('location:admin.php');
}
?>
</footer>
<table width="100%" border="0" align="right">
    
</table>
</body>
</html>