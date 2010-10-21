<?php

include ('config.php');
include ('custom_functions.php');

$t = $_GET["i"];
if (isset($t))
{
	echo"Modify a Milestone	<br />";

	startform("modmile","POST","handle_mod_milestone.php");

	$id = $_GET['i'];
	
	$f = myq("select * from milestones where id=$id");
	$mname = $f[0]['name'];
	$date = $f[0]['date'];

	tbox("Name","mname",$mname);
	tbox("Date","date",$date);

	hidden("id",$id);

	stopform("Modifify Milestone");
}
else
{

	echo"Please Select a Milestone to Modify: <br />";

	foreach( $feat = myq("select * from milestones order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <a href='mod_milestone.php?i=$id'>$name</a><br />";
	}

}
?>
