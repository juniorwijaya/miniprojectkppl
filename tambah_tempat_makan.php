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
      <td width="75%" bgcolor="#0b6572" class="footer" style="font-style: normal; color: #FFF; font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-weight: bolder;">Tambah Tempat Makan</td>
    </tr>
	<table width="1350" height="200" cellpadding="0" cellspacing="1">
    <tr>
      <td width="12%" bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000;"><p>Nama</p>
      <p>Alamat</p>
      <p>Nomor Telepon</p>
      <p>Email</p>
      <p>&nbsp;</p></td>
	  <td width="68%" bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000;">
	  <form action="" method="post" name="input" id="input">
        <label for="textfield2">:</label>
        <input name="nama" type="text" required="required" id="nama" />
        </p>
        <p>
          <label for="nama">:</label>
          <input name="alamat" type="text" required="required" id="alamat" />
        </p>
        <p>
          <label for="uname"> :</label>
          <input name="notelp" type="text" required="required" id="notelp" />
        </p>
        <p>
          <label for="textfield5">:</label>
          <input name="email" type="text" required="required" id="email" />
        </p>
        <p>
          <input type="submit" name="submit2" id="submit2" value="Submit" />
        </p>
      </form>
	  
<?php
if (isset($_POST['submit2'])) {
	include('koneksi.php');
 $nama = addslashes (strip_tags ($_POST['nama'])); 
 $alamat = addslashes (strip_tags ($_POST['alamat'])); 
 $notelp = addslashes (strip_tags ($_POST['notelp'])); 
 $email = addslashes (strip_tags ($_POST['email']));  
 
 //insert ke tabel 
 $query ="INSERT INTO `restoran`(`Nama`, `Alamat`, `NoTelp`, `Email`) VALUES ('".$nama."','".$alamat."','".$notelp."','".$email."')"; 
 $sql = mysql_query ($query); 
 if ($sql) { 
 echo "<h2><font color=blue>Pendaftaran Berhasil</font></h2>"; 
 } else { 
 echo "<h2><font color=red>Gagal Mendaftarkan</font></h2>"; 
 } }
?>
    </tr>
  </table>
</section>


    
</table>
</body>
</html>