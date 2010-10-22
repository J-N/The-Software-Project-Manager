<?php

define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_HOST', 'localhost');
define ('DB_NAME', 'cs');

$dbc = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );

mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );

$head = "";
echo"test":
echo"<table width='100%'><tr><td><img src='banner.png'></td></tr></table>";
echo"<center>";
?>