<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST["del"];
if (isset($t))
{

	$id = $_GET['del'];
	/*
	$f = myq("select * from milestones where id=$id");
	$mname = $f[0]['name'];

	echo"Are you sure you want to remove $mname	Milestone<br />";
	
	startform("delmile","POST","handle_rem_milestone.php");

	hidden("id",$id);

	stopform("Yes");*/
	
	echo $id;
}
else
{

	echo"Please Select a Task to Remove: <br />";
	startform("deletetask","POST","del_task.php");
	foreach( $feat = myq("select * from tasks order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <input type='checkbox' name='del' value='$id'/> $name  <br />";
	}
	stopform("Delete Task");
}
?>
