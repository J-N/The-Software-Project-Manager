<?php
include ('config.php');
include ('custom_functions.php');

$post = post ($_POST);

//do error checking

$mname = $post['mname'];
$date = $post['date'];
$id = $post['id']; // will it grab this?
	
$q = "update milestones set mname='$mname',date='$date' where id='$id'";
$r = mysql_query($q);
//should check to make sure it works


Echo"Milestone updated";
echo"<br /><a href='index.php'>Return Home</a>";


?>