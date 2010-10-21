<?php

include ('config.php');
include ('custom_functions.php');

$t = $_GET["i"];
if (isset($t))
{
	echo"Modify a Developer	<br />";

	startform("moddev","POST","handle_mod_dev.php");

	$id = $_GET['i'];
	
	$f = myq("select * from developers where id=$id");
	$dname = $f[0]['name'];
	$email = $f[0]['email'];

	tbox("Name","dname",$dname);
	tbox("Email","email",$email);

	hidden("id",$id);

	stopform("Modifify Developer");
}
else
{

	echo"Please Select a Developer to Modify: <br />";

	foreach( $feat = myq("select * from developers order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <a href='mod_dev.php?i=$id'>$name</a><br />";
	}

}
?>
