<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$post = post($_POST);

//do error checking

//insert into database
$tname = $post['tname'];
$dev = $post['dev'];


//feature
$feat = $post['feat'];
//milestone
$milestone = $post['milestone'];
//textboxes
$description = $post['description'];
$details = $post['details'];
$eet = $post['eet'];
//status -- hardcoded
$status = $post['status'];


$q = "Insert into tasks (name,developer,feature,milestone,description,details,eet,status) values ('$tname','$dev','$feat','$milestone','$description','$details','$eet','$status')";
$r = @mysql_query($q);
echo  mysql_error();

//we should do some mysql error checking here also...

echo"Task $tname has been added";

?>
