<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$t= $_GET["i"];
if (isset($t))
{
	echo"Modify a Feature <br />";
/*
	startform("modfeat","POST","handle_mod_feature.php");

	$id = $t;
	echo"<br /> $id <br />";
	$f = myq("select * from features where id=$id");
	$fname = $f[0]['name'];
	$desc = $f[0]['description'];
	$details = $f[0]['details'];

	tbox("Feature","fname",$fname);
	tbox("Description","desc",$desc);
	tbox("Details","details",$details);

	hidden("id",$id);

	stopform("Modifify Feature");*/
*/
else
{

	echo"Please Select a Feature to Modify: <br />";

	foreach( $feat = myq("select * from features order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <a href='mod_feature.php?i=$id'>$name</a><br />";
	}

}
?>
