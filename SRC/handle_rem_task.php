<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['id'];

$p = explode(�,�,$_POST['id']);
echo $t;
	for($i=0; $i < count($p); $i++)
    {
		$k = $p[$i];
	
		$f = myq("select * from tasks where id=$k");
		$mname = $f[0]['name'];
		echo"$mname	<br />";
    }
	


?>
