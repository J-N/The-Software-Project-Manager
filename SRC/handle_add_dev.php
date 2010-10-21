<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');

$post = post($_POST);

//do error checking

//insert into database
$dname = $post['dname'];
$email = $post['email'];

$q = "Insert into developers (name,email) values ('$dname','$email')";
$r = @mysql_query($q);
echo  mysql_error();

//we should do some mysql error checking here also...

echo"Developer $dname has been added";

?>
