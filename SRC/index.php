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
	$email = $dev[$k]['email'];
	if ($id!=1)
	{
		echo"<a href='dev.php?i=$id'>$name</a> - ";
		//print seperator and then $email
		echo"$email<br />";
	}
}

echo"<br /><br /><a href='add_developer.php'>Add a Developer</a>";
echo"<br /><a href='mod_dev.php'>Modify a Developer</a>";
echo"<br /><a href='del_dev.php'>Remove a Developer</a>";


?>