<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

include ('config.php');
include ('custom_functions.php');


echo"Add a Task <br />";

startform("addtask","POST","handle_add_task.php");

tbox("Name","tname","");
//developer
select("Developer", "dev", "SELECT * FROM developers order by name", "name", "id", "1", 0);
//feature
select("Feature", "feat", "SELECT * FROM features order by name", "name", "id", "1", 0);
//milestone
select("Milestone", "milestone", "SELECT * FROM milestones order by name", "name", "id", "1", 0);
//textboxes
tbox("Description","description","");
tbox("Details","details","");
tbox("Expected Elapsed Time","eet","");
//status -- hardcoded
hidden("status","PENDING");

stopform("Add Task");

?>
