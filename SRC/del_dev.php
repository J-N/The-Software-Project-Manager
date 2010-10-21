<?php
include ('config.php');
include ('custom_functions.php');

$t = $_GET["i"];
if (isset($t))
{

	$id = $_GET['i'];
	
	$f = myq("select * from developers where id=$id");
	$dname = $f[0]['name'];

	echo"Are you sure you want to remove $dname	as a Developer<br />";
	
	startform("deldev","POST","handle_rem_dev.php");

	hidden("id",$id);

	stopform("Yes");
}
else
{

	echo"Please Select a Developer to Remove: <br />";

	foreach( $feat = myq("select * from developers order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <a href='del_dev.php?i=$id'>$name</a><br />";
	}

}
?>
