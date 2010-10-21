<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$did = $_GET['i'];


foreach( $dev = myq("SELECT name FROM developers where id=$did") as $k=>$v)
{
	$dname = $dev[$k]['name'];
}

echo "$dname's Tasks: <br /> <table><tr><td></td><td>Task</td><td>Description</td><td>Feature</td><td>Milestone</td></tr>";

startform("deletetask","POST","handle_task_del.php");

foreach( $dev = myq("SELECT * FROM tasks where developer=$did") as $k=>$v)
{
	$tid = $dev[$k]['id'];
	$tname = $dev[$k]['name'];
	$feat = $dev[$k]['feature'];
	$milestone = $dev[$k]['milestone'];
	$desc = $dev[$k]['description'];
	$details = $dev[$k]['details'];
	echo "<tr><td><input type='checkbox' name='del' value='$tid'/></td><td><a href='task.php?i=$tid'>$tname</a></td><td>$desc</td><td>$feat</td><td>$milestone</td></tr>";
}
?>
<br />
<?php
stopform("Delete Task(s)");

echo"<a href='add_task.php'>Add a Task</a>";
?>
