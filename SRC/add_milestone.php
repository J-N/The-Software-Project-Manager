<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo"Add a Milestone <br />";

startform("addmilestone","POST","handle_add_milestone.php");

tbox("Name","mname","");
tbox("Date","date","");

stopform("Add Milestone");

?>
