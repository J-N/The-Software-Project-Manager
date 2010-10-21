
<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['id'];

//set any tasks with this feature to none
$q="update tasks set feature='1' where feature='$t'";
$r= mysql_query($q);

//delete the feature
$q="delete from features where id='$t'";
$r= mysql_query($q);

	
Echo"The feature has been removed";

?>
