<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['id'];
if (!empty($t))
{
	
	for($i=0; $i < count($t); $i++)
    {
		
		$k = $t[$i];
		for($j=0; $j < count($k); $j++)
		{
			echo $k[$j];
		}
		$f = myq("select * from tasks where id=$k");
		$mname = $f[0]['name'];
		echo"$mname	<br />";
    }
	
	
}

print $t;
?>
