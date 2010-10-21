<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo"Add a Task <br />";

startform("addtask","POST","handle_add_task.php");

tbox("Name","tname","");
//developer
select("Developer", "dev", "SELECT * FROM developers order by name", "name", "id", "", 0);
//feature
//milestone
tbox("Description","description","");
tbox("Description","details","");
tbox("Expected Elapsed Time","eet","");
//status

stopform("Add Task");

?>
