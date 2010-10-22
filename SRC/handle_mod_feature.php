<?php
include ('config.php');
include ('custom_functions.php');

$post = post ($_POST);

//do error checking

$fname = $post['fname'];
$desc = $post['desc'];
$details = $post['details'];
$id = $post['id']; // will it grab this?
	
$q = "update features set fname='$fname',desc='$desc',details='$details' where id='$id'";
$r = mysql_query($q);
//should check to make sure it works


Echo"Feature updated";
echo"<br /><a href='index.php'>Return Home</a>";


?>