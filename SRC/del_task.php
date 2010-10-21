<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['del'];
if (!empty($t))
{
	echo"Are you sure you want to remove the following tasks: <br />";
	for($i=0; $i < count($t); $i++)
    {
		$k = $t[$i];
		$f = myq("select * from tasks where id=$k");
		$mname = $f[0]['name'];
		echo"$mname	<br />";
    }
	
	startform("deltask","POST","handle_rem_task.php");
	
	$single_value = implode(“,”, $t);
	echo $single_value;
	hidden("id",$single_value);

	stopform("Yes");
	
}
else
{

	echo"Please Select a Task to Remove: <br />";
	startform("deletetask","POST","del_task.php");
	foreach( $feat = myq("select * from tasks order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <input type='checkbox' name='del[]' value='$id'/> $name  <br />";
	}
	stopform("Delete Task");
}
?>
