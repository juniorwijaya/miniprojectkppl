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
</div>
<table width="1352" height="481" cellpadding="0" cellspacing="1">
  <tr>
    <th width="1234" height="26" align="center" bgcolor="#a1ecdf" scope="col"><blockquote>
      <h1>Admin Login</h1>
    </blockquote></th>
  </tr>
  <tr>
    <th height="443" align="center" valign="top" bgcolor="#EAE6D5" scope="col">
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
       
	   <form id='login' action='actionlogin.php' method='post' accept-charset='UTF-8'>
			<fieldset >
			
 
			<label for='username' >UserName*:</label>
			<input type='text' name='username' id='username'  maxlength="50" />
 
			<label for='password' >Password*:</label>
			<input type='password' name='password' id='password' maxlength="50" />
 
			<input type='submit' name='Submit' value='Submit' />
 
			</fieldset>
		</form>

    </p></th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>