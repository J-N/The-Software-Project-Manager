<?php
include ('config.php');
include ('custom_functions.php');

$t = $_POST['id'];

//set any tasks with this milestone to none
$q="update tasks set developer='1' where developer='$t'";
$r= mysql_query($q);

//delete the feature
$q="delete from developers where id='$t'";
$r= mysql_query($q);

	
Echo"The developer has been removed";
echo"<br /> <a href='index.php'>Return home</a>";
?>
