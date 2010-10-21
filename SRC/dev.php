<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$did = $_GET['i'];


foreach( $dev = myq("SELECT name FROM developers where id=$did") as $k=>$v)
{
	$dname = $dev[$k]['name'];
}

echo "$dname's Tasks: <br /> <table><tr><td>Task</td><td>Description</td><td>Feature</td><td>Milestone</td></tr>";


foreach( $dev = myq("SELECT * FROM tasks where developer=$did") as $k=>$v)
{
	$tname = $dev[$k]['name'];
	$feat = $dev[$k]['feature'];
	$milestone = $dev[$k]['milestone'];
	$desc = $dev[$k]['description'];
	$details = $dev[$k]['details'];
	echo "<tr><td>$tname</td><td>$desc</td><td>$feat</td><td>$milestone</td></tr>";
}

?>
