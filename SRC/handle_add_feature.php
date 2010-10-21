<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$post = post($_POST);

//do error checking
echo"test";
//insert into database
$q = "Insert into features (name,description,details) values ('$post['fname']','$post['desc']','$post['details']')";
$r = @mysql_query($q);
echo  mysql_error();

//we should do some mysql error checking here also...

echo"Feature $post['fname'] has been added";

?>
