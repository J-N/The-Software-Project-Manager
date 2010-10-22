<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$post = post($_POST);

//do error checking

//insert into database
$fname = $post['fname'];
$desc = $post['desc'];
$details = $post['details'];
$q = "Insert into features (name,description,details) values ('$fname','$desc','$details')";
$r = @mysql_query($q);
echo  mysql_error();

//we should do some mysql error checking here also...

echo"Feature $fname has been added";
echo"<br /> <a href='index.php'>Return home</a>";
?>
