<?php
session_start();
if (isset($_SESSION['login'])) {}
else {
header('location:warning.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MakanApaYa</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="header">
  <p><center><font face="Cambria" color="white">MakanApaYa</font></center></p>
  <p>&nbsp;</p>
</div>
<table width="1350" cellpadding="1" cellspacing="1">
<tr>
  <td width="133" align="center" bgcolor="#55f631"><table width="1350" cellpadding="1" cellspacing="1">
    <tr>
      <td width="401" height="18" align="right" bgcolor="#55f631"><a href="beranda.php">Home</a></td>
      <td width="88" align="center" bgcolor="#55f631"><a href="akun_klien.php">Akun Klien</a></td>
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
<table width="1118" cellpadding="1" cellspacing="1">
  <tr>
    <td width="1110" height="629"><table width="1354" height="613" cellpadding="0" cellspacing="1">
      <tr>
        <th width="1366" height="26" align="left" bgcolor="#a1ecdf" scope="col"><blockquote>
          <h1> Notifikasi</h1>
          </blockquote></th>
        </tr>
      <tr>
        <th height="570" align="left" valign="top" bgcolor="#EAE6D5" scope="col">&nbsp;</th>
        </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
<div id="navigasi"></div>

</html>