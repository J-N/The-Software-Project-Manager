<?php

include ('config.php');
include ('custom_functions.php');

$t = $_POST['my_array'];

	for($i=0; $i < count($t); $i++)
    {
		$k = $t[$i];
	
		$q="delete from tasks where id='$k'";
		$r= mysql_query($q);
    }
	
?>