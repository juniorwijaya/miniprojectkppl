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

<?php		
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
						echo '<h3>Username dan Password belum diisi!</h3>';
					} else if ($_GET['error'] == 2) {
						echo '<h3>Username belum diisi!</h3>';
					} else if ($_GET['error'] == 3) {
						echo '<h3>Password belum diisi!</h3>';
					} else if ($_GET['error'] == 4) {
						echo '<h3>Username dan Password tidak terdaftar!</h3>';
					}
				}
			?>
			
<table width="1362" cellpadding="1" cellspacing="1">
    <tr>
      <td width="700" height="26" bgcolor="#55f631" align="right" valign="middle"><form action="actionloginpengunjung.php" method="post" name="input">
          <input name="textfield2" type="text" id="textfield" value="username" />
          <input name="textfield3" type="password" id="password" value="password" />
          <input type="submit" name="Login" id="button" value="Sign In" />
      </form></td>
      <td width="70" bgcolor="#55f631">
      <form action="register.php">
      <input type="submit" name="button2" id="button2" value="Register" />
    </form>
    </td>
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
      <input type="text" name="textfield" id="textfield" />
      <input type="submit" name="button" id="button" value="Search" />
    </form></td>
  </tr>
</table>
<table width="1361" cellpadding="1" cellspacing="1">
  <tr>
    <td width="245" height="629" valign="top" bgcolor="#ffffff"><h1><a href="daftar_tempat_makan.php">Kategori</a></h1>
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
    <td width="1110"><table width="1110" height="613" cellpadding="0" cellspacing="1">
      <tr>
        <th width="1026" height="26" align="left" bgcolor="#a1ecdf" scope="col"><blockquote>
          <h1>Home</h1>
        </blockquote></th>
      </tr>
      <tr>
        <th height="570" align="left" valign="top" bgcolor="#EAE6D5" scope="col">&nbsp;</th>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1359" height="598" cellpadding="5" cellspacing="5">
  <tr>
    <th width="660" height="48" align="center" bgcolor="#a1ecdf" scope="col"><h1>Tempat Makan Populer Bulan ini</h1></th>
    <th width="662" bgcolor="#a1ecdf" scope="col"><h1><center>Tempat Makan Baru</center></h1></th>
  </tr>
  <tr>
    <td height="533" bgcolor="#EAE6D5">&nbsp;</td>
    <td bgcolor="#EAE6D5">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<div id="navigasi"></div>

</html>