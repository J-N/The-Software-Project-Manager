<?php
include ('config.php');
include ('custom_functions.php');

$post = post($_POST);

//do error checking

//insert into database
$tname = $post['tname2'];
$dev = $post['dev2'];


//feature
$feat = $post['feat2'];
//milestone
$milestone = $post['milestone2'];
//textboxes
$description = $post['description2'];
$details = $post['details2'];
$eet = $post['eet2'];
//status -- hardcoded
$status = $post['status2'];


$q = "Insert into tasks (name,developer,feature,milestone,description,details,eet,status) values ('$tname','$dev','$feat','$milestone','$description','$details','$eet','$status')";
$r = @mysql_query($q);
echo  mysql_error();

//we should do some mysql error checking here also...


$dev = $post['dev'];
//feature
$feat = $post['feat'];
//milestone
$mile = $post['milestone'];

$name = $post['tname'];
$desc = $post['description'];
$details = $post['details'];
$eet = $post['eet'];
$status = $post['status'];
$id = $post['id'];
	
$q = "update tasks set name='$name',developer='$dev',feature='$feat',milestone='$mile',description='$desc',details='$details',eet='$eet',status='$status' where id='$id'";
$r = mysql_query($q);


echo"Tasks have been updated and added";
echo"<br /> <a href='index.php'>Return home</a>";

?>
