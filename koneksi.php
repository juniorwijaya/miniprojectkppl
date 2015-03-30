<?php
$host = "localhost";
$user = "juniorwijaya";
$pass = "123456";
$dbnm = "makanapaya";
$conn = mysql_connect ($host, $user, $pass);
mysql_select_db($dbnm,$conn);
if ($conn) {
} else {
 die ("Server MySQL tidak terhubung");
}
?>