<?php
include ('config.php');
include ('custom_functions.php');

$t = $_POST["i"];
if (isset($t))
{
	echo"Original Task<br />";

	startform("modtask","POST","handle_breakout.php");

	$id = $_POST['i'];
	
	$f = myq("select * from tasks where id=$id");
	$fname = $f[0]['name'];
	$desc = $f[0]['description'];
	$details = $f[0]['details'];
	$dev = $f[0]['developer'];
	$feat = $f[0]['feature'];
	$mile = $f[0]['milestone'];
	$eet = $f[0]['eet'];
	$status = $f[0]['status'];
	
	//name
	tbox("Task","tname",$fname);
	
	//developer
	select("Developer", "dev", "SELECT * FROM developers order by name", "name", "id", $dev, 0);
	//feature
	select("Feature", "feat", "SELECT * FROM features order by name", "name", "id", $feat, 0);
	//milestone
	select("Milestone", "milestone", "SELECT * FROM milestones order by name", "name", "id", $mile, 0);

	
	tbox("Description","description",$desc);
	tbox("Details","details",$details);
	tbox("Expected Elapsed Time","eet",$eet);
	echo"<select name='status'>";
	if($status == "PENDING")
	{
	echo"<option value='PENDING' selected='selected'>PENDING</option>";
	}
	else
	{
		echo"<option value='PENDING'>PENDING</option>";
	}
	if($status == "IN PROGRESS")
	{
		echo"<option value='IN PROGRESS' selected='selected'>IN PROGRESS</option>";
	}
	else
	{
		echo"<option value='IN PROGRESS'>IN PROGRESS</option>";
	}
	if($status == "COMPLETED")
	{
		echo"<option value='COMPLETED' selected='selected'>COMPLETED</option>";
	}
	else
	{
		echo"<option value='COMPLETED'>COMPLETED</option>";
	}
	
	echo"</select>";
	hidden("id",$id);

	
echo"<br /><br />Task 2: <br />";


tbox("Name","tname2","");
//developer
select("Developer", "dev2", "SELECT * FROM developers order by name", "name", "id", "1", 0);
//feature
select("Feature", "feat2", "SELECT * FROM features order by name", "name", "id", "1", 0);
//milestone
select("Milestone", "milestone2", "SELECT * FROM milestones order by name", "name", "id", "1", 0);
//textboxes
tbox("Description","description2","");
tbox("Details","details2","");
tbox("Expected Elapsed Time","eet2","");
//status -- hardcoded
hidden("status","PENDING2");
	
	
	
	
	stopform("Breakout Tasks");

}
?>
