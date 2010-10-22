<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$post = post($_POST);

//do error checking

//insert into database
$mname = $post['mname'];
$date = $post['date'];

$q = "Insert into milestones (name,date) values ('$mname','$date')";
$r = @mysql_query($q);
echo  mysql_error();

//we should do some mysql error checking here also...

echo"Milestone $mname has been added";
echo"<br /> <a href='index.php'>Return home</a>";
?>
