<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo "Developers: <br />";
foreach( $dev = myq("SELECT * FROM developers order by name") as $k=>$v)
{
	$id = $dev[$k]['id'];
	$name = $dev[$k]['name'];
	if (!$id==1)
	echo"<a href='dev.php?i=$id'>$name</a><br />";
}

?>
