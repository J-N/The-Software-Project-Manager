<?php
include ('config.php');
include ('custom_functions.php');

$post = post ($_POST);

//do error checking

//update database
$dname = $post['dname'];
$email = $post['email'];
$id = $post['id'];
	
$q = "update developers set name='$dname',email='$email' where id='$id'";
$r = mysql_query($q);
//should check to make sure it works


Echo"Developer updated";
echo"<br /><a href='index.php'>Return Home</a>";


?>
