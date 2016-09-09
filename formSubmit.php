<?php

define('DB_NAME', 'marciesbridalcontacts');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
  die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
  die('cant use ' . DB_NAME . ': ' . mysql_error());
}

$value1 = $_POST["email"];
$value2 = $_POST["phoneNumber"]

$sql = "INSERT INTO emailAndNumber ('email', 'phoneNumber') VALUES ([$value1], [$value2])";

if(!mysql_query($sql)) {
  die('Error: ' . mysql_error());
}

mysql_close();

?>
