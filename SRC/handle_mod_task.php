<?php
include ('config.php');
include ('custom_functions.php');

$post = post ($_POST);

$dev = $post['dev'];
//feature
$feat = $post['feat'];
//milestone
$mile = $post['milestone'];

$name = $post['fname'];
$desc = $post['desc'];
$details = $post['details'];
$eet = $post['eet'];
$status = $post['status'];
$id = $post['id'];
	
$q = "update tasks set name='$name',developer='$dev',feature='$feat',milestone='$mile',description='$desc',details='$details',eet='$eet',status='$status' where id='$id'";
$r = mysql_query($q);
//should check to make sure it works

echo $q;

Echo"Task updated";


?>
