<?php

include ('config.php');
include ('custom_functions.php');

$t = $_GET["i"];
if (isset($t))
{

	$id = $_GET['i'];
	
	$f = myq("select * from milestones where id=$id");
	$mname = $f[0]['name'];

	echo"Are you sure you want to remove $mname	Milestone<br />";
	
	startform("delmile","POST","handle_rem_milestone.php");

	hidden("id",$id);

	stopform("Yes");
}
else
{

	echo"Please Select a Milestone to Remove: <br />";

	foreach( $feat = myq("select * from milestones order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		if($id != 1)
		{
			echo" <a href='del_milestone.php?i=$id'>$name</a><br />";
		}
	}

}
?>
