<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo"Add a Feature <br />";

startform("addfeat","POST","handle_add_feat.php");

tbox("Feature","fname","");
tbox("Description","desc","");
tbox("Details","details","");


stopform("Add Feature");

?>
