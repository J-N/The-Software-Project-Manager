<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['t'];
if (!empty($t))
{
	
	for($i=0; $i < count($t); $i++)
    {
		$k = $t[$i];
		$f = myq("select * from tasks where id=$k");
		$mname = $f[0]['name'];
		echo"$mname	<br />";
    }
	
	
}
?>
