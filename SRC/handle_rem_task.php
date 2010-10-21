<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['id'];
if (!empty($t))
{
$p = explode(“,”,$_POST['id']);
	for($i=0; $i < count($p); $i++)
    {
		$k = $p[$i];
	
		$f = myq("select * from tasks where id=$k");
		$mname = $f[0]['name'];
		echo"$mname	<br />";
    }
	
	
}


?>
