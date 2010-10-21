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

startform("deletetask","POST","handle_task_del.php");

echo "$dname's Tasks: <br /> <table><tr><td></td><td>Task</td><td>Description</td><td>Feature</td><td>Milestone</td></tr>";



foreach( $dev = myq("SELECT * FROM tasks where developer=$did") as $k=>$v)
{
	$tid = $dev[$k]['id'];
	$tname = $dev[$k]['name'];
	$feat = $dev[$k]['feature'];
	$milestone = $dev[$k]['milestone'];
	$desc = $dev[$k]['description'];
	$details = $dev[$k]['details'];
	
	$farr = myq("SELECT name FROM features where id=$feat")
	$fname = $farr[0]['name'];
	
	$marr = myq("SELECT name FROM milestones where id=$milestone")
	$mname = $marr[0]['name'];
	
	
	echo "<tr><td><input type='checkbox' name='del' value='$tid'/></td><td><a href='task.php?i=$tid'>$tname</a></td><td>$desc</td><td>$fname</td><td>$mname</td></tr>";
}
?>
<br />
</table>
<?php
stopform("Delete Task(s)");

echo"<a href='add_task.php'>Add a Task</a>";
echo"<br /><br /><a href='add_feature.php'>Add a Feature</a>";
echo"<br /><a href='mod_feature.php'>Modify a Feature</a>";
echo"<br /><a href='del_feature.php'>Remove a Feature</a>";

echo"<br /><br /><a href='add_developer.php'>Add a Developer</a>";
echo"<br /><a href='mod_feature.php'>Modify a Developer</a>";
echo"<br /><a href='del_feature.php'>Remove a Developer</a>";

echo"<br /><br /><a href='add_milestone.php'>Add a Milestone</a>";
echo"<br /><a href='mod_milestone.php'>Modify a Milestone</a>";
echo"<br /><a href='del_milestone.php'>Remove a Milestone</a>";
?>
