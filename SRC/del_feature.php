<?php

include ('config.php');
include ('custom_functions.php');

$t = $_GET["i"];
if (isset($t))
{

	$id = $_GET['i'];
	
	$f = myq("select * from features where id=$id");
	$dname = $f[0]['name'];

	echo"Are you sure you want to remove $dname	as a Feature<br />";
	
	startform("delfeat","POST","handle_rem_feat.php");

	hidden("id",$id);

	stopform("Yes");
	startform("nodel","POST","del_feature.php");
	hidden("id",$id);
	stopform("No");
}
else
{

	echo"Please Select a Feature to Remove: <br />";

	foreach( $feat = myq("select * from features order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		if($id != 1)
		{
			echo" <a href='del_feature.php?i=$id'>$name</a><br />";
		}
	}

}
?>
