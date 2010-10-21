<?php
include ('config.php');
include ('custom_functions.php');

$t = $_GET["i"];
if (isset($t))
{
	echo"Modify a Task <br />";

	startform("modtask","POST","handle_mod_task.php");

	$id = $_GET['i'];
	
	$f = myq("select * from tasks where id=$id");
	$fname = $f[0]['name'];
	$desc = $f[0]['description'];
	$details = $f[0]['details'];
	$dev = $f[0]['developer'];
	$feat = $f[0]['feature'];
	$mile = $f[0]['milestone'];
	$eet = $f[0]['eet'];
	$status = $f[0]['status'];
	
	//developer
	select("Developer", "dev", "SELECT * FROM developers order by name", "name", "id", $dev, 0);
	//feature
	select("Feature", "feat", "SELECT * FROM features order by name", "name", "id", $feat, 0);
	//milestone
	select("Milestone", "milestone", "SELECT * FROM milestones order by name", "name", "id", $mile, 0);

	tbox("Feature","fname",$fname);
	tbox("Description","desc",$desc);
	tbox("Details","details",$details);

	hidden("id",$id);

	stopform("Modifify Task");
}
else
{

	echo"Please Select a Task to View/Modify: <br />";

	foreach( $feat = myq("select * from tasks order by name") as $k=>$v)
	{
		$id = $feat[$k]['id'];
		$name = $feat[$k]['name'];
		echo" <a href='tasks.php?i=$id'>$name</a><br />";
	}

}
?>
