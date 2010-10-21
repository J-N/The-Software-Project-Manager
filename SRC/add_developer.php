<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo"Add a Developer <br />";

startform("addfeat","POST","handle_add_dev.php");

tbox("Name","dname","");
tbox("Email","email","");

stopform("Add Developer");

?>
