<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['id'];

//set any tasks with this milestone to none
$q="update tasks set milestone='1' where milestone='$t'";
$r= mysql_query($q);

//delete the feature
$q="delete from milestones where id='$t'";
$r= mysql_query($q);

	
Echo"The milestone has been removed";
echo"<br /> <a href='index.php'>Return home</a>";
?>
