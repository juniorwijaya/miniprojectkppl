<?php

include('koneksi.php');

session_start();

$user = $_POST['textfield2'];
$pass = $_POST['textfield3'];

if (empty($user) && empty($pass)) {
    //kalau username dan password kosong
    header('location:index.php?error=1');
    break;
} else if (empty($user)) {
    //kalau username saja yang kosong
    header('location:index.php?error=2');
    break;
} else if (empty($pass)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:index.php?error=3');
    break;
}

$sql="Select * from user where Username='" . $user . "' and Password='". $pass ."'";
$result = mysql_query($sql, $conn);
$num=mysql_num_rows($result);

if ($num == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:index.php');
} else {
	echo '<h3>Username dan Password tidak terdaftar!</h3>';
    //kalau username ataupun password tidak terdaftar di database
    //header('location:index.php?error=4');
}

?>