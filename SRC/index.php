<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo "Developers: <br />";
foreach( $dev = myq("SELECT * FROM developers order by name") as $k=>$v)
{
	$id = $dev[$k]['id'];
	$name = $dev[$k]['name'];
	$email = $dev[$k]['email'];
	if ($id!=1)
	{
		echo"<a href='dev.php?i=$id'>$name</a> - ";
		//print seperator and then $email
		echo"$email<br />";
	}
}

echo"Filter by: <br /><table><tr><td>Developer</td><td>Status</td></tr><tr><td>";  
select_no("", "dev", "SELECT * FROM developers order by name", "name", "id", "1", 1);
echo"</td><td>";
echo"<select multiple name='status'>"; 
echo"<option value='PENDING'>PENDING</option>";
echo"<option value='IN PROGRESS'>IN PROGRESS</option>";
echo"<option value='COMPLETED' selected='selected'>COMPLETED</option>";
echo"<option value='COMPLETED'>COMPLETED</option>";
echo"</select>"; echo"</td></tr>";
echo"</table>";
echo "<br /> All Tasks: <br /> <table></td><td>Task</td><td>Developer</td><td>Description</td><td>Feature</td><td>Milestone</td><td>Status</td></tr>";
foreach ( $tasks = myq("select * from tasks order by status") as $k=>$v)
{
	$tid = $tasks[$k]['id'];
	$tname = $tasks[$k]['name'];
	$feat = $tasks[$k]['feature'];
	$milestone = $tasks[$k]['milestone'];
	$desc = $tasks[$k]['description'];
	$details = $tasks[$k]['details'];
	$status = $tasks[$k]['status'];
	$developer = $tasks[$k]['developer'];
	
	$farr = myq("SELECT name FROM features where id=$feat");
	$fname = $farr[0]['name'];
	
	$marr = myq("SELECT name FROM milestones where id=$milestone");
	$mname = $marr[0]['name'];
	
	$dev2 = myq("SELECT * FROM developers where id='$developer'");
	$dname = $dev2[0]['name'];

	echo "<tr><td><a href='tasks.php?i=$tid'>$tname</a></td><td>$dname</td><td>$desc</td><td>$fname</td><td>$mname</td><td>$status</td></tr>";
}
echo"</table>";

echo"<br /><br /><a href='add_developer.php'>Add a Developer</a>";
echo"<br /><a href='mod_dev.php'>Modify a Developer</a>";
echo"<br /><a href='del_dev.php'>Remove a Developer</a>";


?>