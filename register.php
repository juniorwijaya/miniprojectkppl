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
<table width="1362" cellpadding="1" cellspacing="1">
  <tr>
    <td width="819" height="25" bgcolor="#55f631">&nbsp;</td>
  </tr>
</table>
<table width="1358" cellpadding="1" cellspacing="1">
  <tr>
    <td width="58" bgcolor="#55f631"><a href="index.php"><center>Home</center></a></td>
    <td width="90" bgcolor="#55f631"><a href="tentang_kami.php"><center>Tentang Kami</center></a></td>
    <td width="130" bgcolor="#55f631"><a href="daftar_tempat_makan.php"><center>Daftar Tempat Makan</center></a></td>
    <td width="101" bgcolor="#55f631"><a href="kontak.php"><center>Kontak</center></a></td>
    <td width="637" bgcolor="#55f631">&nbsp;</td>
    <td width="321" bgcolor="#55f631"><form id="form1" name="form1" method="post" action="">
      <label for="textfield"></label>
    </form></td>
  </tr>
</table>
<table width="1361" cellpadding="1" cellspacing="1">
  <tr>
    <td width="245" height="200" valign="top" bgcolor="#ffffff"><h1><a href="daftar_tempat_makan.php">Kategori</a></h1>
      
	  <ul id="MenuBar1" class="MenuBarVertical">
        <li><a class="MenuBarItemSubmenu" href="#">Harga</a>
          <ul>
            <li><a href="#">10k - 25k</a></li>
            <li><a href="#">25k - 50k</a></li>
            <li><a href="#">50k - 100k</a></li>
          </ul>
        </li>
          <li><a href="#" class="MenuBarItemSubmenu">Lokasi</a>
            <ul>
              <li><a href="#">Surabaya Barat</a></li>
              <li><a href="#">Surabaya Timur</a></li>
            </ul>
        </li>
        <li><a class="MenuBarItemSubmenu" href="#">Jenis Makanan</a>
          <ul>
            <li><a href="#">Western</a></li>
            <li><a href="#">Asian</a></li>
            <li><a href="#">Korean</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Jenis Tempat Makanan</a>
          <ul>
            <li><a href="#">Jenis Tempat Makanan 1</a></li>
            <li><a href="#">Jenis Tempat Makanan 2</a></li>
          </ul>
        </li>
        <li><a href="#" class="MenuBarItemSubmenu">Rating</a>
          <ul>
            <li><a href="#">1 - 3</a></li>
            <li><a href="#">3 - 5</a></li>
          </ul>
        </li>
      </ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p></td>
    <td width="5%"><table width="1110" height="200" cellpadding="0" cellspacing="1">
	  <td width="12%" bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000;"><p>Nama</p>
      <p>Tempat Tanggal Lahir</p>
      <p>e-mail</p>
      <p>Username</p>
      <p>Password</p>
      <p>&nbsp;</p></td>
	  <td width="68%" bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000;">
	  <form action="" method="post" name="input" id="input">
        <label for="textfield2">:</label>
        <input name="nama" type="text" required="required" id="textfield2" />
        </p>
        <p>
          <label for="nama">:</label>
          <input name="ttl" type="text" required="required" id="ttl" />
        </p>
        <p>
          <label for="uname"> :</label>
          <input name="email" type="text" required="required" id="textfield4" />
        </p>
        <p>
          <label for="textfield5">:</label>
          <input name="uname" type="text" required="required" id="textfield5" />
        </p>
        <p>
          <label for="textfield6">:</label>
          <input name="password2" type="password" required="required" id="password2" />
        </p>
        <p>
          <input type="submit" name="submit2" id="submit2" value="Submit" />
        </p>
      </form>
	  
<?php
if (isset($_POST['submit2'])) {
	include('koneksi.php');
 $nama = addslashes (strip_tags ($_POST['nama'])); 
 $ttl = addslashes (strip_tags ($_POST['ttl'])); 
 $email = addslashes (strip_tags ($_POST['email'])); 
 $uname = addslashes (strip_tags ($_POST['uname'])); 
 $password = addslashes (strip_tags ($_POST['password2'])); 
 
 //insert ke tabel 
 $query ="INSERT INTO `user`(`Nama`, `TTL`, `Email`, `Username`, `Password`) VALUES ('".$nama."','".$ttl."','".$email."','".$uname."','".$password."')"; 
 $sql = mysql_query ($query); 
 if ($sql) { 
 echo "<h2><font color=blue>Sign up Berhasil</font></h2>"; 
 } else { 
 echo "<h2><font color=red>Gagal Sign up</font></h2>"; 
 } }
?>
      
    </table></td>
  </tr>
</table>

<p>&nbsp;</p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<div id="navigasi"></div>

</html>